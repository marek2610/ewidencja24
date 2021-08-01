<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imie', TextType::class, [
                'label' => 'Imię',
                'attr'  => [
                    'placeholder'   => 'Proszę podaj swoje imię',
                ]
            ])
            ->add('nazwisko', TextType::class, [
                'label' => 'Nazwisko',
                'attr'  => [
                    'placeholder'   => 'Proszę podaj swoje nazwisko',
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adres email',
                'attr'  => [
                    'placeholder'   => 'przykladowy@adres.email',
                ]
            ])
            ->add('temat', ChoiceType::class, [
                'label' => 'Temat',
                'placeholder'   => 'Wybierz temat',
                'choices'   => [
                        'Sugestia'  => 'sugestia',
                        'Problem'   => 'problem',
                        'Inne'      => 'inne',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Wiadomość',
                'attr'  => [
                    'placeholder'   => 'Treść wiadomości',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr'  =>  [
                    'class' => 'btn btn-success pull-right', 
                ],
                'label' => 'Wyślij wiadomość',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'        => Message::class,
            'csrf_protection' => true,
            /*
            // AUTOMATYCZNE TWORZENIE OCHRONY
            // enable/disable CSRF protection for this form
            'csrf_protection' => true,
            // the name of the hidden HTML field that stores the token
            'csrf_field_name' => '_token',
            // an arbitrary string used to generate the value of the token
            // using a different string for each form improves its security
            'csrf_token_id'   => 'task_item',
            */
        ]);
    }
}
