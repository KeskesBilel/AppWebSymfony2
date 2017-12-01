<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\article;
use Ecommerce\EcommerceBundle\Form\articleType;



class RechercheController extends Controller
{

         public function pagerechercheAction(Request $request)
                           {
                                 $em = $this->getDoctrine()->getManager();
                                 $motcle = $request->get('motcle');
                                 //1 methode
                                 $repository = $em->getRepository("EcommerceBundle:article");
                                 $query= $repository ->createQueryBuilder('p')
                                 ->where('p.nom like :nom ')
                                 ->setParameter('nom',$motcle.'%')
                                 ->orderBy('p.nom','ASC')
                                 ->getQuery();
                                 $bb = $query->getResult();
                                 //2 methode avec findBy
                                 // $bb = $em->getRepository("EcommerceBundle:article")
                                 //  -> findBy( array('nom' => $motcle ));
                                 return $this->render('EcommerceBundle:Default:produit.html.twig', array('cc' =>$bb ));
                           }



}
