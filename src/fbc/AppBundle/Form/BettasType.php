<?php

namespace fbc\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class BettasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codBetta')
            ->add('idPuesta','hidden')
            ->add('fenotipoAletas')
            ->add('genotipoAletas')
            ->add('fenotipoColor')
            ->add('genotipoColor')
            ->add('sexo')
            ->add('imagenesBetta','hidden')
            ->add('fechaRegistro')
        ;
    }

    public function getName()
    {
        return 'fbc_appbundle_bettastype';
    }
}
