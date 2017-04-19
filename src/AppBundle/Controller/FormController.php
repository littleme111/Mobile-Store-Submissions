<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 12/04/2017
 * Time: 07:24
 */

namespace AppBundle\Controller;

use AppBundle\Entity\David;
use AppBundle\Entity\Form;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class FormController extends Controller
{

    /**
     * @Route("/form", name="Mobile Form Submission")
     */
    public function formAction(Request $request)
    {
        $forms = new Form();
//
			$usr = $this->getUser();
			$username = $usr->getUsername();

			$form = $this->createForm(Form::class, $forms);
			$form->get('author')->setData($username);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

        }


            return $this->render('default/form.html.twig', array(
         'form' => $form->createView(),
        ));
    }


}