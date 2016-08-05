<?php

namespace EDR\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AvisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentaire')
            ->add('note')
            ->add('published', CheckboxType::class, array('required' => false))
            ->add('favoris', CheckboxType::class, array('required' => false))
            ->add('sauvegarde', CheckboxType::class, array('required' => false))
            ->add('etablissement')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDR\AppliBundle\Entity\Avis'
        ));
    }
}
