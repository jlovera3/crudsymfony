<?php

namespace App\Form;

use App\Entity\Libro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class LibroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', TextType::class, [
                'label'  => 'titulo:',
                'help' => 'Este campo es obligatorio',
                'required' => false,
            ])
            ->add('isbn')
            ->add('fecha')
            ->add('genero', ChoiceType::class, [
                'choices' => [
                    'Romance' => 'romance',
                    'Historico' => 'historico',
                    'Fantasia' => 'fantasia',
                    'Aventuras' => 'aventuras',
                ],
            ])
            ->add('bestseller')
            ->add('image')
            ->add('brochure', FileType::class, [
                'label' => 'Pincha aquí para subir una imagen',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // everytime you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5m',
                        'mimeTypes' => [
                            'application/jpg',
                            'application/jpeg',
                            'application/png'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPG/ JPEG/ PNG image',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Libro::class,
        ]);
    }
}
