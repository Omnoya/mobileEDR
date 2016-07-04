<?php

namespace EDR\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtablissementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('uploadPhoto', 'file', array('label' => 'Photo', 'required' => false))
            ->add('adresse')
            ->add('adresse2')
            ->add('codePostal')
            ->add('ville')
            ->add('longitude')
            ->add('latitude')
            ->add('telephone')
            ->add('email')
            ->add('publier')
            ->add('categories')
            ->add('tags')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDR\AppliBundle\Entity\Etablissement'
        ));
    }
}
