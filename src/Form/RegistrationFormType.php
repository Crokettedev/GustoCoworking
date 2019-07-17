<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Nom', 'required' => false,
                'attr' => [
                    'placeholder' => 'Nom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un nom.',
                    ])
                ]
            ])

            ->add('lastname', TextType::class, [
                'label' => 'Prénom', 'required' => false,
                'attr' => [
                    'placeholder' => 'Prénom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un prénom',
                    ])
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'E-mail', 'required' => false,
                'attr' => [
                    'placeholder' => 'E-mail'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un e-mail valide',
                    ])
                ]
            ])

            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe', 'required' => false,
                'attr' => [
                    'placeholder' => 'Mot de passe'],
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un mot de passe valide.',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au minimum {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

            ->add('society', TextType::class, [
                'label' => 'Nom de votre société', 'required' => false,
                'attr' => [
                    'placeholder' => 'Nom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez le nom de votre société.',
                    ])
                ]
            ])

            ->add('phone', TelType::class, [
                'label' => 'N° Téléphone', 'required' => false,
                'attr' => [
                    'placeholder' => 'N° Téléphone'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un n° de téléphone valide.',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Votre n° doit contenir au minimum {{ limit }} chiffres',
                        // max length allowed by Symfony for security reasons
                        'max' => 10,
                    ]),
                ]
            ])

            ->add('job', TextType::class, [
                'label' => 'Profession', 'required' => false,
                'attr' => [
                    'placeholder' => 'Ex : Informaticien, Commercial'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez une profession.',
                    ])
                ]
            ])


        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
