<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('EcommerceBundle:Default:produit.html.twig');
    }
}
