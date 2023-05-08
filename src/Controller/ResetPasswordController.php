<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use Symfony\Component\Mime\Email;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Display & process form to request a password reset.
     */
    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(),
                $mailer,
                $translator
            );
            
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        // Generate a fake token if the user does not exist or someone hit this page directly.
        // This prevents exposing whether or not a user was found with the given email address or not
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    /**
     * Validates and process the reset URL that the user clicked in their email.
     */
    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        if ($token) {
            // We store the token in session and remove it from the URL, to avoid the URL being
            // loaded in a browser and potentially leaking the token to 3rd party JavaScript.
            $this->storeTokenInSession($token);

            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('No reset password token found in the URL or in the session.');
        }

        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        // The token is valid; allow the user to change their password.
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // A password reset token should be used only once, remove it.
            $this->resetPasswordHelper->removeResetRequest($token);

            // Encode(hash) the plain password, and set it.
            $encodedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );

            $user->setPassword($encodedPassword);
            $this->entityManager->flush();

            // The session is cleaned up after the password has been changed.
            $this->cleanSessionAfterReset();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);

        // Do not reveal whether a user account was found or not.
        if (!$user) {
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
          
            return $this->redirectToRoute('app_check_email');
        }

       
        /*$mailer->send($email); */

        $email = (new Email())
        ->from('aymen.zouaoui@esprit.tn')
        ->to($user->getEmail())
        ->subject('Your password reset request')
        ->html("<div class=''><div class='aHl'></div><div id=':w5' tabindex='-1'></div><div id=':pi' class='ii gt' jslog='20277; u014N:xr6bB; 1:WyIjdGhyZWFkLWY6MTc2MzY0NzE2MDAzMTM5NTg3OCIsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsW11d; 4:WyIjbXNnLWY6MTc2MzY0NzE2MDAzMTM5NTg3OCIsbnVsbCxbXV0.'><div id=':18v' class='a3s aiL msg-5569979896873432607'><u></u>


    
    
    
    
    

        <div style='margin:0;padding:0;background-color:#f2f7f7'>
        <div style='color:transparent;opacity:0;font-size:0px;border:0;max-height:1px;width:1px;margin:0px;padding:0px;border-width:0px!important;display:none!important;line-height:0px!important'><img border='0' width='1' height='1' src='https://ci5.googleusercontent.com/proxy/So1NTNm-wPeDOP7UxaVQtazfWcsqHUNx1nxKqzyT1fjWTO8T-cFp06FbOddoPAzDT0A58XyFI35Q_ajVA4PjXS7T7YeEa3hJNl4GPgjLGj7HDVDW6zyJOmCoewB7z-2nGAfxekYLfArymu6WJ62HI4y3kpfkJYbrlaWvMIuxS09Bk4K9r9gy1dR3ZE5ggKLD6DJwhG2wT8A=s0-d-e1-ft#http://et.amena.com/q/7RSf8q3q7FSbHI1knx_KAg~~/AAGzbgA~/RgRmIvamPVcDc3BjQgpkPqZxQGT-b53JUhhheW1lbnpvdWFvdWk5N0BnbWFpbC5jb21YBAAAAAA~' alt='' class='CToWUd' data-bit='iit'></div>
        
        
        
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tbody><tr>
                <td bgcolor='#f2f7f7'>
                    
                    <div style='display:none;font-size:1px;color:#fefefe;line-height:1px;font-family:Helvetica,Arial,sans-serif;max-height:0px;max-width:0px;opacity:0;overflow:hidden'>
                        Demande de réinitialisation du mot de passe - amena.com
                    </div>
                    <table border='0' cellpadding='0' cellspacing='0' width='600' align='center'>
                        
                        <tbody><tr>
                            <td align='center'>
                                <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                    <tbody><tr>
                                        <td bgcolor='#f2f7f7' align='center' style='padding:70px 0px 40px 0px;width:100%!important'>
                                            <a href='http://et.amena.com/f/a/JLxScZjLgQblcuWQRCp7pw~~/AAGzbgA~/RgRmIvamP0QVaHR0cHM6Ly93d3cuZXhwYXQuY29tVwNzcGNCCmQ-pnFAZP5vnclSGGF5bWVuem91YW91aTk3QGdtYWlsLmNvbVgEAAAAAA~~' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://et.amena.com/f/a/JLxScZjLgQblcuWQRCp7pw~~/AAGzbgA~/RgRmIvamP0QVaHR0cHM6Ly93d3cuZXhwYXQuY29tVwNzcGNCCmQ-pnFAZP5vnclSGGF5bWVuem91YW91aTk3QGdtYWlsLmNvbVgEAAAAAA~~&amp;source=gmail&amp;ust=1682031402480000&amp;usg=AOvVaw0js5mfNAkquZ4YjnO6lfKy'>
                                                <img alt='Logo' src='https://scontent.fnbe1-2.fna.fbcdn.net/v/t1.15752-9/326412972_856681762111879_232346873904870547_n.png?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_ohc=xYzYVxeopEcAX8Pu9lK&_nc_ht=scontent.fnbe1-2.fna&oh=03_AdTsz0zig0sXBNjCzqzIh-fBfK84bil2xQzTofqCpUkYeQ&oe=6467F4F5' width='243' height='150' style='display:block;font-family:Arial,Helvetica,sans-serif;color:#5a6161;font-size:16px' border='0' class='CToWUd' data-bit='iit'>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
        
        
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tbody><tr>
                <td bgcolor='#f2f7f7' align='center'>
                    <table border='0' cellpadding='0' cellspacing='0' width='600'>
                        <tbody><tr>
                            <td bgcolor='#ffffff' align='center'>
                                
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody><tr>
                                        <td height='5' bgcolor='#00bfce' style='font-size:5px;height:5px;line-height:5px;background-color:#00bfce'>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style='padding:30px 60px 30px 60px'>
                                            <table width='100%' border='0' cellspacing='0' cellpadding='0' style='width:100%!important'>
                                                <tbody><tr>
                                                    <td style='padding:0 0 30px 0;color:#5a6161;font-size:16px;font-family:Arial,Helvetica,sans-serif;line-height:24px'>
                                                        
                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                            <tbody><tr>
                                                                <td align='left' style='font-family:Arial,Helvetica,sans-serif'>
                                                                    Demande de nouveau mot de passe
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height='1' bgcolor='#e6e8e9' style='font-size:1px;height:1px;line-height:1px;background-color:#e6e8e9'>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style='padding:0 0 30px 0'>
                                                        
                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                            <tbody><tr>
                                                                <td style='color:#696f6f;font-size:14px;font-family:Arial,Helvetica,sans-serif;line-height:24px'>
                                                                    
                                                                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                        <tbody><tr>
                                                                            <td style='padding-top:20px;font-family:Arial,Helvetica,sans-serif'>
                                                                                Bonjour ,<br><br>
        Vous avez demandé un nouveau mot de passe pour votre compte <a href='http://et.amena.com/f/a/CyFYasGkITlOogQrxfRFlw~~/AAGzbgA~/RgRmIvamP0QZaHR0cHM6Ly93d3cuZXhwYXQuY29tL2ZyL1cDc3BjQgpkPqZxQGT-b53JUhhheW1lbnpvdWFvdWk5N0BnbWFpbC5jb21YBAAAAAA~' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://et.amena.com/f/a/CyFYasGkITlOogQrxfRFlw~~/AAGzbgA~/RgRmIvamP0QZaHR0cHM6Ly93d3cuZXhwYXQuY29tL2ZyL1cDc3BjQgpkPqZxQGT-b53JUhhheW1lbnpvdWFvdWk5N0BnbWFpbC5jb21YBAAAAAA~&amp;source=gmail&amp;ust=1682031402480000&amp;usg=AOvVaw1UV5INPtR8SUOjqQTGFVAJ'>amena.com</a>.<br><br>
        Pour changer votre mot de passe, veuillez cliquer sur le bouton suivant :<br><br>
        <a href='http://localhost:8000/reset-password/reset/".$resetToken->getToken()."' bgcolor='#00cea0' style='color:#ffffff;font-size:15px;font-family:Arial,Helvetica,sans-serif;font-weight:bold;text-decoration:none;background-color:#00cea0;border-top:8px solid #00cea0;border-bottom:8px solid #00cea0;border-left:20px solid #00cea0;border-right:20px solid #00cea0;border-radius:3px;display:inline-block;text-transform:uppercase' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://et.amena.com/f/a/k68z5GP8C0Z1gDYy1dyk9g~~/AAGzbgA~/RgRmIvamP0RSaHR0cHM6Ly93d3cuZXhwYXQuY29tL2ZyL2NoYW5nZS1wYXNzd29yZC82MDhkYTllZTg2OGExZjdkN2RmOGZkOWE1NGVhZTRjM2YwMDk2ZGE0L1cDc3BjQgpkPqZxQGT-b53JUhhheW1lbnpvdWFvdWk5N0BnbWFpbC5jb21YBAAAAAA~&amp;source=gmail&amp;ust=1682031402480000&amp;usg=AOvVaw2wZg19dxIgLxBKb5kvnYpl'>Changer mon mot de passe</a><br><br>
        Le lien ci-dessus est valable pendant quelques heures. Passé ce délai, vous devrez demander un nouveau lien pour pouvoir changer votre mot de passe.<br><br>
        Nous vous rappelons également votre nom d'utilisateur: <strong>$user</strong><br><br>
        Si vous n'avez pas demandé un nouveau mot de passe, veuillez ignorer ce message.<br><br>
        A bientôt,<br><br>
        L'équipe amena.com
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
        
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tbody><tr>
                <td bgcolor='#f2f7f7' align='center' style='padding:30px 0px 30px 0'>
                    
                    <table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
                        <tbody><tr>
                            <td align='center' style='color:#949da5;font-size:14px;line-height:28px;font-family:Arial,Helvetica,sans-serif'>
                                Partagez votre expérience d'amenarié !
                            </td>
                        </tr>
                    </tbody></table>
        
                    
                    <br><br>
        
                </td>
            </tr>
        </tbody></table>
        
        
        
        <img border='0' width='1' height='1' alt='' src='https://ci6.googleusercontent.com/proxy/PH-J8iNEXwUn8qFsTTvcmJkCVVLOUoPwqafI8THkgrJ6quD1-SNALR66yrpT26rMZpwNLplrq3hdsrNag9lu5pA25t4c8gsqdlO4ZDMdveX5ToGQDywecbwtF-bXI1kT9eeiXBqnrSeBRMEboJ6pZUeEPJheqilRGMWqepcdvr6yqTP5I3UFSCU9S7SlAluyltbw5A0F8kg=s0-d-e1-ft#http://et.amena.com/q/vSbfm3sZIfNrIgbQz4wdUw~~/AAGzbgA~/RgRmIvamPlcDc3BjQgpkPqZxQGT-b53JUhhheW1lbnpvdWFvdWk5N0BnbWFpbC5jb21YBAAAAAA~' class='CToWUd' data-bit='iit'><div class='yj6qo'></div><div class='adL'>
        </div></div><div class='adL'>
        </div></div></div><div id=':w9' class='ii gt' style='display:none'><div id=':wc' class='a3s aiL '></div></div><div class='hi'></div></div>");
        //->text('Use this link to reset your email: http://localhost:8000/reset-password/reset/'.$resetToken->getToken());
        

        $mailer->send($email);

        // Store the token object in session for retrieval in check-email route.
        $this->setTokenObjectInSession($resetToken);

        return $this->redirectToRoute('app_check_email');
    }
}
