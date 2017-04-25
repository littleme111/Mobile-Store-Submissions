<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 24/04/2017
 * Time: 16:53
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Form;
class ModificationController extends Controller {

	/**
	 * @Route("/modify/{id}")
	 */

	public function modifyAction(Request $request, $id){
		$forms = new Form();
		$date = new \DateTime('now');
		$repository = $this->getDoctrine()->getRepository('AppBundle:Form');

		$product = $repository->findById($id);
		$product = $product[0];


		$forms->hydrate($product);
//
		$form = $this->createForm(Form::class, $forms);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$tasks = $form->getData();

			$tasks->setCreatedDate($date);
			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$em = $this->getDoctrine()->getManager();
//			$em->persist($tasks);
			$em->flush();
//			die();

		}



		return $this->render('default/form.html.twig',array(
			'form' => $form->createView(),
			'formdata' => $product

		));
	}

}