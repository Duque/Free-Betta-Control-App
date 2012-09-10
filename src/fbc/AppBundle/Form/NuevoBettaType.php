<?php

namespace fbc\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NuevoBettaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codBetta')
            ->add('idPuesta', 'hidden')
            ->add('fenotipoAletas','choice', array(
                    'choices' => array(
                        'HM' => 'Halfmoon',
                        'PK' => 'Plakat',
                        'HMPK' => 'Halfmoon Plakat',
                        'GHM' => 'Halfmoon gigante',
                        'GPK' => 'Plakat gigante',
                        'GHMPK' => 'Hafmoon Plakat gigante')))
            ->add('genotipoAletas','choice', array(
                    'choices' => array(
                        'HM' => 'Halfmoon',
                        'PK' => 'Plakat',
                        'HMPK' => 'Halfmoon Plakat',
                        'GHM' => 'Halfmoon gigante',
                        'GPK' => 'Plakat gigante',
                        'GHMPK' => 'Hafmoon Plakat gigante')))
            ->add('fenotipoColor')
            ->add('genotipoColor')
            ->add('sexo','choice', array(
                    'choices' => array(
                        'f' => 'Hem',
                        'm' => 'Mach')))
            ->add('imagenesBetta', 'hidden')
            ->add('fechaRegistro')
        ;
    }

    public function getName()
    {
        return 'fbc_appbundle_nuevo_bettastype';
    }
}
