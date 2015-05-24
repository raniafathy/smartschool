<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Teacher;
use Acme\DemoBundle\Form\TeacherType;
use Symfony\Component\HttpFoundation\Response;


class AddTeacherController extends Controller
{
	public function addteacherAction()
	{
		$teacher = new teacher();
		$form = $this->createForm(new TeacherType(), $teacher);
		
		$request = $this->get('request');
		$form->handleRequest($request);
		
		if($request->getMethod() == 'POST')
		{
			if($form->isValid())
			{
				//$name=$form->get('fullname')->getData();
				
               //to save the data of teacher in database
				$em = $this->getDoctrine()->getManager();
				$em->persist($teacher);
				$em->flush();

				return new Response('تم حفظ البيانات بنجاح');
			}
			
		   return $this->render('AcmeDemoBundle:AddTeacher:addteacher.html.twig',array('form'=>$form->createView())); 

		}

		   return $this->render('AcmeDemoBundle:AddTeacher:addteacher.html.twig',array('form'=>$form->createView())); 

	}
}