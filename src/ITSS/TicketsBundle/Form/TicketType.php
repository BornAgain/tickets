<?php

namespace ITSS\TicketsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \ITSS\TicketsBundle\Entity\ProjetRepository ;

class TicketType extends AbstractType
{
    
    public function __construct($id) {
        $this->id = $id;
    }

    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $this->id;
        $builder
            ->add('title')
            ->add('content', 'textarea', array(
    'attr' => array('class' => 'ckeditor1')))
            ->add('projet','entity',array (
                'class' => 'ITSSTicketsBundle:Projet',
                'query_builder' => function(ProjetRepository $er) use ($id)
                {
                    return $er->createQueryBuilder('p')
                            ->leftJoin('p.client', 'c')
                            ->where('c.id = :id')
                                ->setParameter('id', $id);

                },
                        ))
//            ->add('comment','collection', array('type'         => new CommentType(),
//                                              'allow_add'    => true,
//                                              'allow_delete' => true,
//                                              'by_reference' => false,
//                                              'options'  => array('required'  => true)
//                                                )
//                    )                
            ->add('submit','submit')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITSS\TicketsBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itss_ticketsbundle_ticket';
    }
}
