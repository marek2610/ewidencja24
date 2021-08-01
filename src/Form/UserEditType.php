<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditType extends AbstractType
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
            ->add('submit', SubmitType::class, [
                'attr'  =>  [
                    'class' => 'btn btn-success pull-right', 
                ],
                'label' => 'Aktualizuj',
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
