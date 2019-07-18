<?php

namespace App\Form;

use App\Entity\Commandefood;
use App\Entity\Nourriture;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CommandType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numcarte', TextType::class, [
                'label' => 'N° Carte de paiement',
                'attr' => [
                    'placeholder' => 'N° Carte de paiement'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un n° de carte valide',
                    ])
                ]
            ])
            ->add('dateexp', TextType::class, [
                'label' => 'Date d\'expiration',
                'attr' => [
                    'placeholder' => 'MM/YY'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez une date d\'éxpiration valide',
                    ])
                ]
            ])
            ->add('codesecu', TextType::class, [
                'label' => 'Code de sécurité',
                'attr' => [
                    'placeholder' => 'XXX'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un code de sécurité valide',
                    ])
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commandefood::class,
        ]);
    }
}
