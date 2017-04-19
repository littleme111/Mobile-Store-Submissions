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

class DefaultController extends Controller

{
    /**
     * @Route("/", name="HomePage")
     */
    public function indexAction(){




        return $this->render('default/homepage.html.twig');
    }
}