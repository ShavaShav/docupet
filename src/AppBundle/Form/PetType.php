<?php
// src/AppBundle/Form/UserType.php
namespace AppBundle\Form;

use AppBundle\Entity\Pet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('species', TextType::class)
            ->add('gender', ChoiceType::class, array(
                'choices'  => array(
                    'Male' => 'M', // stored in DB as a single char
                    'Female' => 'F'
                )
            ))
            ->add('birth_date', BirthdayType::class)
            ->add('neutered', CheckboxType::class, array(
                'required' => false
            ))
            ->add('breed', TextType::class, array(
                'required' => false
            ))
            ->add('weight', NumberType::class, array(
                'required' => false
            ))
            ->add('colour', TextType::class, array(
                'required' => false
            ))
            ->add('description', TextType::class, array(
                'required' => false
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Pet::class,
        ));
    }
}