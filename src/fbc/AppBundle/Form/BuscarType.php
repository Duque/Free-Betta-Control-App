<?php

namespace fbc\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class BuscarType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('keywords')
            ->add('enBettas','hidden')
            ->add('enPuestas','hidden')
            ->add('tipoAletas','hidden')
            ->add('genotipo','hidden')
            ->add('fechaDesde','hidden')
            ->add('fechaHasta','hidden')
        ;
    }

    public function getName()
    {
        return 'fbc_appbundle_bettastype';
    }
}
