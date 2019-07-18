<?php

namespace App\Form;

use App\Entity\Nourriture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NourritureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('nom')
            ->add('prix')
            ->add('stock')
            ->add('created_at')
            ->add('contenu')
            ->add('label')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Nourriture::class,
        ]);
    }
}
