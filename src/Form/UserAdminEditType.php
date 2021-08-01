<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserAdminEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Użytkownik',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adres email',
            ])
            ->add('ep', TextType::class, [
                'label' => 'EP Producenta',
            ])
            ->add('imie', TextType::class, [
                'label' => 'Imię',
            ])
            ->add('nazwisko', TextType::class, [
                'label' => 'Nazwisko',
            ])
            ->add('znaksprawy', TextType::class, [
                'label' => 'Znak sprawy',
            ])
            ->add('roles', ChoiceType::class, [
                'multiple'  => true,
                'expanded'  => true,
                'choices'   => [
                    'User'  => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Aktualizuj',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
