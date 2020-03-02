<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Vārds',
                'attr' => array(
                    'placeholder' => 'Ievadiet savu vārdu'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'E-pasts',
                'attr' => array(
                    'placeholder' => 'Ievadiet savu e-pastu'
                )
            ))
            ->add('message', TextareaType::class, array(
                'label' => 'Ziņa',
                'attr' => array(
                    'placeholder' => 'Jūsu jautājums...'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
