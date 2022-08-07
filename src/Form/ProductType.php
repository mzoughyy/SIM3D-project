<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
            ])
            ->add('price', NumberType::class)
            ->add('dispo', ChoiceType::class,
            [
            'choices'=>
            [
                '-Avaibility-' => null,
                'In stock' => 'in stock',
                'Out of stock' => 'out of stock',
            ],
          
            ])

            ->add('photo', TextType::class)
            ->add('RAM', ChoiceType::class,
            [
                'choices'=>
                [
                    '-RAM-' => null,
                    '16 KB' => '16',
                    '64 KB' => '64',
                    '128 KB' => '128',
                    '256 KB' => '256',
                    '512 KB' => '512',

                ],
              
                ])
            ->add('CPU_SP', ChoiceType::class,
            [
                'choices'=>
                [
                    '-CPU Speed-' => null,
                    '40 MHz' => '40',
                    '50 MHz' => '50',
                    '72 MHz' => '72',
                    '80 MHz' => '80',
                    '100 MHz' => '100',
                    '120 MHz' => '120',

                ],
              
                ])
            ->add('OP_V', ChoiceType::class,
            [
                'choices'=>
                [
                    '-Operating Voltage-' => null,
                    '2.3 V' => '2.3',
                    '2.6 V' => '2.6',
                    '2.9 V' => '2.9',
                    '3.2 V' => '3.2',
                    '3.4 V' => '3.4',
                    '3.6 V' => '3.6',

                ],
              
                ])
            ->add('Pins', ChoiceType::class,
            [
                'choices'=>
                [
                    '-Number of Pins-' => null,
                    '28 Pins' => '28',
                    '36 Pins' => '36',
                    '44 Pins' => '44',
                    '64 Pins' => '64',
                    '100 Pins' => '100',
                    '121 Pins' => '121',
                    '124 Pins' => '124',
                ],
              
                ])
            ->add('infos', TextareaType::class)
            //->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
