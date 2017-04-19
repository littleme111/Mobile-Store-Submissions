<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 14/04/2017
 * Time: 14:54
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AdminController extends Controller
{
    /**
     * @Route("/admin_panel", name="Admin House")
     */
    public function adminAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Form');

        $product = $repository->findAll('appName');


        return $this->render('default/admin_panel.html.twig',array(
            'formdata' => $product
        ));
    }
}