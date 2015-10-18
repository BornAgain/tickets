<?php

namespace AC\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('type', 'choice', array('choices' => array('Culte' => 'Culte', 'Enseignement' => 'Enseignement', 'Séminaire' => 'Séminaire')))
            ->add('date', 'date', [
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'form-control datepicker date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/MM/yyyy']])
            
            ->add('choeur')
            ->add('theme')
                ->add('tags')
            ->add('orateur', 'entity', array('class' => 'ACMediaBundle:Serviteur', 
                'property' => 'name',
                'query_builder' => function(\AC\MediaBundle\Entity\ServiteurRepository $er)
                {
                    $queryBuilder = $er->createQueryBuilder('p')
                            ->where('p.type like :orateur')
                                ->setParameter('orateur', "%orateur%");
                    
                    return $queryBuilder;

                }
                )
                )
            ->add('conducteur', 'entity', array('class' => 'ACMediaBundle:Serviteur', 
                'property' => 'name',
                'query_builder' => function(\AC\MediaBundle\Entity\ServiteurRepository $er)
                {
                    $queryBuilder = $er->createQueryBuilder('p')
                            ->where('p.type like :conducteur')
                                ->setParameter('conducteur', "%conducteur%");
                    
                    return $queryBuilder;

                }
                ))
            //->add('themeMois', 'entity', array('class' => 'ACMediaBundle:ThemeDuMois', 'property' => 'theme'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AC\MediaBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ac_mediabundle_evenement';
    }
}
