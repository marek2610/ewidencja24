<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Użytkownik',
                'attr'  => [
                'placeholder'   => 'Użytkownik',
                ]
                ])
            ->add('email', EmailType::class, [
                'label' => 'Adres email',
                'attr'  => [
                'placeholder'   => 'przykladowy@adres.email',
                ]
                ])
            ->add('password', RepeatedType::class, [
                'type'  => PasswordType::class,
                'first_options'  => ['label' => 'Hasło'],
                'invalid_message' => 'The password fields must match.',
                'options' => [
                    'attr' => [
                        'class' => 'password-field',
                        'placeholder'   => '**********',
                        ]],
                'required' => true,
                'second_options' => ['label' => 'Powtórz hasło']
                ]
            )
            ->add('ep', TextType::class, [
                'label' => 'EP Producenta',
                'attr'  => [
                'placeholder'   => '012345678',
                ]
            ])
            ->add('imie', TextType::class, [
                'label' => 'Imię',
                'attr'  => [
                'placeholder'   => 'Jan',
                ]
            ])
            ->add('nazwisko', TextType::class, [
                'label' => 'Nazwisko',
                'attr'  => [
                'placeholder'   => 'Nowak',
                ]
            ])
            ->add('znaksprawy', TextType::class, [
                'label' => 'Znak sprawy',
                'attr'  => [
                'placeholder'   => 'OR01-65432-OR0100001/19',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr'  =>  [
                    'class' => 'btn btn-success pull-right', 
                ],
                'label' => 'Rejestruj',
            ])
            ->add('reset', ResetType::class, [
                'attr'  =>  [
                    'class' => 'btn btn-default pull-right', 
                    'style' => 'margin-right: 4px'
                ],
                'label' => 'Resetuj',
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
