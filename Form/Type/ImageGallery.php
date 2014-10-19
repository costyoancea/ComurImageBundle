<?php
namespace Comur\ImageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\FormBuilder;

use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageGallery extends AbstractType
{
    protected $span4 = "span4";
    protected $span3 = "span3";

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('location', 'text', array(
                'label'=>' ',
                   'attr' => array('style' => 'opacity: 0;width: 0; max-width: 0; height: 0; max-height: 0;padding: 0; position: absolute;')
                ))
            ->add('title', 'text', array(
                'label_attr' => array('style' => 'float:left; width:20%;'),
                'attr' => array('style' => 'float:left; width:70%;')
            ))
            ->add('url', 'url', array(
                'label_attr' => array('style' => 'float:left; width:20%;'),
                'attr' => array('style' => 'float:left; width:70%;')
            ));

    }

    public function getName()
    {
        return "ImageGallery";
    }
}