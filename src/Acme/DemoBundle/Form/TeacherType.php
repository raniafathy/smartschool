<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TeacherType extends AbstractType
{
	    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code', 'text');
        $builder->add('fullname','text');
        $builder->add('job','text');
        $builder->add('graduate','text');
        $builder->add('date_of_graduate','date');
        $builder->add('birthday','date');
        $builder->add('appointment_date','date');
        $builder->add('join_date','date');
        $builder->add('degree','text');
        $builder->add('date_of_get_degree','date');
        $builder->add('national_id','text');
        $builder->add('address','text');
        $builder->add('phone','number');

        $builder->add('submit','submit');
    }

    public function getName()
    {
        return 'teacher';
    }
}