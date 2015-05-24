<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Student;
use Acme\DemoBundle\Form\StudentType;
use Symfony\Component\HttpFoundation\Response;

class AddStudentController extends Controller
{
    public function addstudentAction()
    {
    	$student = new student();
		$form = $this->createForm(new StudentType(), $student);
		
		$request = $this->get('request');
		$form->handleRequest($request);
		
		if($request->getMethod() == 'POST')
		{
			if($form->isValid())
			{
				//$name=$form->get('fullname')->getData();
				
               //to save the data of student in database
				$em = $this->getDoctrine()->getManager();
				$em->persist($student);
				$em->flush();

				return new Response('تم حفظ البيانات بنجاح');
			}
			
        return $this->render('AcmeDemoBundle:AddStudent:addstudent.html.twig',array('form'=>$form->createView()));

		}
        return $this->render('AcmeDemoBundle:AddStudent:addstudent.html.twig',array('form'=>$form->createView()));
                    
    }

}
