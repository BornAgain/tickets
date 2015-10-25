<?php

namespace AC\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ThemeDuMoisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', [
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'form-control datepicker date-picker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/MM/yyyy']])
            ->add('theme')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AC\MediaBundle\Entity\ThemeDuMois'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ac_mediabundle_themedumois';
    }
}
