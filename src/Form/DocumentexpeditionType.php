<?php

namespace App\Form;

use App\Entity\Documentexpedition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\ColisRec;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DocumentexpeditionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('statut', ChoiceType::class, [
            'choices' => [
                'Signé' => 'signe',
                'Non signé' => 'non-signe',
            ],
            'expanded' => true,
            'multiple' => false,
            'label' => 'Statut',
        ])
           ->add('colis_id', EntityType::class, [
                'class' => ColisRec::class,
                'choice_label' => function ($colisRec) {
                    return $colisRec->getIdC()->getNomDestinataire(); //Remplacez cette ligne par la méthode qui retourne la propriété que vous souhaitez afficher dans le choix du formulaire
                },
                ])
                ->add('description')
                ->add('Enregistrer', SubmitType::class);
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documentexpedition::class,
        ]);
    }
}
