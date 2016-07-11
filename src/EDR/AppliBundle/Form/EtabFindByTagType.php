<?php

namespace EDR\AppliBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtabFindByTagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', EntityType::class, array(
            // query choices from this entity
            'class' => 'EDRAppliBundle:Tag',

            // use the User.username property as the visible option string
            'choice_label' => 'nom',

//         used to render a select box, check boxes or radios
//         'multiple' => true,
//         'expanded' => true,
        ));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDR\AppliBundle\Entity\Tag',
        ));
    }
    
}