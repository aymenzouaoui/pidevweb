<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type',ChoiceType::class, [
                'choices'  => [
                    'type' => null,
                    'Voiture' => 'Voiture',
                    'Camion' => 'Camion',
                    'Moto' => 'Moto',
                    'Velo' => 'Velo'
                ],
            ])
            ->add('immat', null, [
                'label' => 'Matricule'
            ])
            ->add('kilometrage')
            ->add('chevaux')
            ->add('marque')
            ->add('modele')
            ->add('lpec', null, [
                'label' => 'Lieu de prise en charge'
            ])
            ->add('prix')
            ->add('img',FileType::class,[
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
                        'mimeTypesMessage' => 'Veuillez télécharger un image valide',
                    ])
                ],
            ])
            ->add('Enregistrer',SubmitType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}