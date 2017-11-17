<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\article;
use Ecommerce\EcommerceBundle\Form\articleType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
    public function pagecontactAction()
    {
        return $this->render('EcommerceBundle:Default:contact.html.twig');
    }
    public function pageproduitAction()
    {

      {
          $em = $this->getDoctrine()->getManager();
          $bb = $em->getRepository("EcommerceBundle:article")->findAll();
          return $this->render('EcommerceBundle:Default:produit.html.twig', array('cc' =>$bb));
      }
    }
    public function pageajouteAction()
    {
      $em = $this->getDoctrine()->getManager();
      $a = new article();
      $form = $this->createForm(new articleType(),$a);
      $request = $this->getRequest();
      if ($request->isMethod('POST')) {
       $form->submit($request);

        //$form->bind($request);
      $em->persist($a);
      $em->flush();

       return $this->redirect($this->generateUrl("ecommerce_ajoutepage"));
      }

       return $this->render('EcommerceBundle:Default:ajoute.html.twig', array('form' => $form->createView() ));

    }
}
