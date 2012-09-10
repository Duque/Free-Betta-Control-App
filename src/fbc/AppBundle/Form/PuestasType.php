<?php

namespace fbc\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PuestasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codPuesta')
            ->add('idPadre')
            ->add('idMadre')
            ->add('huevos')
            ->add('eclosiones')
            ->add('tasaSupervivencia')
            ->add('imagenesPuesta', 'hidden')
            ->add('fechaInicio')
            ->add('fechaCruce')
            ->add('fechaEclosion')
            ->add('sexRatio')
        ;
    }

    public function getName()
    {
        return 'fbc_appbundle_puestastype';
    }
}
