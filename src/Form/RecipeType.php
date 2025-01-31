<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Recipe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control mb-3',  
                'placeholder' => 'Entrez le nom de la recette',
            ],
            'label' => "Nom de la recette :",
            'label_attr' => [
                'class' => 'form-label',  
            ]
        ])

     
       
       
        ->add('slug', TextType::class, [
            'attr' => [
                'class' => 'form-control mb-3', 
            ],
            'label' => "Slug de la recette :",
            'label_attr' => [
                'class' => 'form-label',  
            ]
        ])
        


        ->add('description', TextType::class, [
            'attr' => [
                'class' => 'form-control mb-3',
            ],
            'label' => "Description de la recette :",
            'label_attr' => [
                'class' => 'form-label', 
            ]
        ])
       
        ->add('duration', IntegerType::class, [
            'attr' => [
                'class' => 'form-control mb-3',
            ],
            'label' => "Durée de cuisson (minutes) :",
            'label_attr' => [
                'class' => 'form-label',  
            ]
        ])
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'attr' => [
                'class' => 'form-control ',
            ],
            'label' => "Votre catégory :",
            'label_attr' => [
                'class' => 'form-label',  
            ]
        ])
        

        
        
      ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
