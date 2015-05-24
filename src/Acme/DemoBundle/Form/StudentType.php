<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StudentType extends AbstractType
{
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullname','text');
        $builder->add('father_job','text');
        $builder->add('birthday','date');
        $builder->add('national_id','text');
        $builder->add('address','text');
        $builder->add('phone','number');

        $builder->add('submit','submit');
    }

    public function getName()
    {
        return 'student';
    }
}