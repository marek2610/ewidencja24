<?php

namespace App\Form;

use App\Entity\Dokument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DokumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $rok = date("y");

        $builder
            ->add('data', BirthdayType::class,[
                'years' => [
                    $rok -2     => $rok -2,
                    $rok -1     => $rok -1,
                    $rok        => $rok,
                    $rok +1     => $rok +1,
                    $rok +2     => $rok +2,
                ], 
                'format' => 'yyyy-MM-dd',
            ])
            ->add('kwota', NumberType::class, [
                'label' => 'Kwota',
                'attr'  => [
                    'placeholder'   => 'Kwota',
                ],
            ])
            ->add('faktura', TextType::class,[
                'label' => 'Faktura',
                'empty_data' => '-----',
                'attr'  => [
                    'placeholder'   => 'Nr faktury',
                ],
            ])
            ->add('rodzaj', ChoiceType::class, [
                'label' => 'Rodzaj zdarzenia',
                // 'attr'  => [
                //     'placeholder'   => 'Rodzaj zdarzenia',
                // ],
                'choices'   => [
                    'Wybierz rodzaj'   => [
                        'przychód'  => 'przychód',
                        'koszt'     => 'koszt',
                    ]
                ],
            ])
            ->add('uwagi', TextType::class, [
                'label' => 'Uwagi', 
                'required'   => false,
                'empty_data' => '-----',
                'attr'  => [
                    'placeholder'   => 'np. paliwo, dopłaty, ubezpieczenie',
                ],
                
                ],
            )
            // ->add('modyfikacja', DateTimeType::class, [
            //     'data' => new \DateTime()
            // ])
            ->add('dodaj', SubmitType::class, [
                'label' => 'Zapisz',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dokument::class,
        ]);
    }
}
