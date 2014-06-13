<?php

namespace webStudent\EntrepriseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use webStudent\EntrepriseBundle\Form\ActiviteType;

class ActiviteModifType extends ActiviteType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
    parent::buildForm($builder, $options);
    //$etudiant = $options['data'];


    $builder->add('libelle', 'text', array('read_only' => false));
    $builder->add('code', 'text', array('read_only' => false));


  }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'webStudent\EntrepriseBundle\Entity\Activite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webstudent_entreprisebundle_activiteModif';
      }
    }
