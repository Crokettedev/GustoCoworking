<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', TextType::class, [
                'label' => 'Nom', 'required' => true,
                'attr' => [
                    'placeholder' => 'Nom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un nom.',
                    ])
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'E-mail', 'required' => true,
                'attr' => [
                    'placeholder' => 'E-mail'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un e-mail valide',
                    ])
                ]
            ])

            ->add('message', TextareaType::class, [
                'label' => 'Message', 'required' => true,
                'attr' => [
                    'placeholder' => 'Votre message ...'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un message',
                    ])
                ]
            ])

        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
