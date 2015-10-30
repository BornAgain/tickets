<?php

namespace ITSS\TicketsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('dateBegin','date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'yyyy-MM-dd',
                                                'attr' => array('type' => 'date'),
                                                'label'=>'Start Date'
                                                ))
            ->add('dateEnd','date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'yyyy-MM-dd',
                                                'attr' => array('type' => 'date'),
                                                'label'=>'Start Date'
                                                ))
            ->add('statut', 'choice', array(
                'choices' => array('step1' => 'Step 1', 'step2' => 'Step 2', 'step3' => 'Step 3'),
                'preferred_choices' => array('step1'),
))
                
            ->add('client', 'entity', array(
                'class' => 'ITSSTicketsBundle:Client',
                'property' => 'name',
))
            ->add('product', 'entity', array(
                'class' => 'ITSSTicketsBundle:Product',
                'property' => 'name',))
            ->add('submit','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITSS\TicketsBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itss_ticketsbundle_projet';
    }
}
