<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\article;
use Ecommerce\EcommerceBundle\Form\articleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class ValidationController extends Controller
{
       public function validationAction()
             {
         $session =$this->getRequest()->getSession();
        if(!$session->has('panier'))
       $session->set('panier',array());
       $em = $this->getDoctrine()->getManager();
       $bb = $em->getRepository("EcommerceBundle:article")->findArray(array_keys($session->get('panier')));
        return $this->render('EcommerceBundle:Default:validation.html.twig',array('cc' =>$bb ,
                                                                             "panier" =>$session->get('panier')));
                      }

}
