<?php

namespace webStudent\EntrepriseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntrepriseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('raisonSociale','text')
            ->add('rue','text')
            ->add('ville','text')
            ->add('cp','text')
            ->add('activite','entity', array(
                                        'class'    => 'webStudentEntrepriseBundle:Activite',
                                        'property' => 'libelle',
                                        'multiple' => false,
                                        'expanded' => false))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'webStudent\EntrepriseBundle\Entity\Entreprise'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webstudent_entreprisebundle_entrepriseModif';
    }
}
