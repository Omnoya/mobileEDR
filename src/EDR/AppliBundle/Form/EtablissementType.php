<?php

namespace EDR\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('nom', 'text', array(
                'label' => 'Nom de l\'établissement'
            ))
            ->add('uploadPhoto', 'file', array('label' => 'Photo', 'required' => false))
            ->add('adresse', 'text', array (
                'label' => 'Adresse'
            ))
            ->add('adresse2', 'text', array(
                'label' => 'Adresse 2'
            ))
            ->add('codePostal', 'integer', array(
                'label' => 'Code Postal'
            ))
            ->add('ville', 'text', array(
                'label' => 'Ville'
            ))
            ->add('longitude')
            ->add('latitude')
            ->add('telephone', 'text', array(
                'label' => 'Téléphone'
            ))
            ->add('email', 'text', array (
                'label' => 'E-Mail'
            ))
            ->add('publier', CheckboxType::class, array(
                'label' => 'Publier'
            ))
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
