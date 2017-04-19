<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 14/04/2017
 * Time: 15:45
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller

{
    /**
     * @Route("/user_panel", name="User Home")
     */
    public function userAction(){
//        $usr= $this->get('fos_user.user_manager');
        $usr = $this->getUser();
				$username = $usr->getUsername();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Form');

        $product = $repository->findByAuthor($username);
        dump($product);
//				$test = $repository->findOneBy();

        return $this->render('default/user_panel.html.twig',array(
            'formdata' => $product,
						'username' => $username
        ));
    }
}