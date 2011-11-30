<?php

namespace Migol\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SkillType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('forplayer')
            ->add('formanager')
            ->add('fortrainer')
            ->add('forfan')
            ->add('formedic')
            ->add('foragent')
            ->add('forexecutive')
            ->add('position', null ,array('required'=> false))
        ;
    }

    public function getName()
    {
        return 'migol_backendbundle_skilltype';
    }
}
