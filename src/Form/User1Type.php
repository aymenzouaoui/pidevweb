<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\File;


class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => [
                  
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_TRANSPORTEUR' => 'ROLE_TRANSPORTEUR',
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    // add more roles here as needed
                ],
                'multiple' => true, // set this to false to allow only one option to be selected
                'expanded' => true, // set this to true to display checkboxes
            ])
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('adress')
            ->add('cin')
            ->add('date_naissance')
            ->add('date_creation_c')
            ->add('status')
            ->add('token')
            ->add('score')
            ->add('numtel')
            ->add('image', FileType::class, [
                'label' => 'image',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '10240k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image document',
                    ])
                ],
            ])
            ->add('compte_ex')
            ->add('token_ex')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
