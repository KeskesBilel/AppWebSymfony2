<?php

namespace Ecommerce\EcommerceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\article;
use Ecommerce\EcommerceBundle\Form\articleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;


class PanierController extends Controller
{
  public function supprimerpanierAction($id)
            {
                 $session = $this->getRequest()->getSession();
                 $panier =$session->get('panier');
                 if(array_key_exists($id, $panier))
                 {
                  unset($panier[$id]);
                  $session->set('panier',$panier);
                  $this->get('session')->getFlashBag()->add('success','article suprimer avec success');
                  }
                return $this->redirect($this->generateUrl("panier"));

           }
         public function ajouterpanierAction($id)
                           {
                             $session = $this->getRequest()->getSession();
                             if(!$session->has('panier'))
                             $session->set('panier',array());
                             $panier =$session->get('panier');
                             if(array_key_exists($id, $panier))
                             {
                               if($this->getRequest()->query->get('qte') !=null)
                               $panier[$id] = $this->getRequest()->query->get('qte');
                             }
                             else {
                               if ($this->getRequest()->query->get('qte') !=null)
                                $panier[$id] = $this->getRequest()->query->get('qte');
                              else
                                $panier[$id] = 1 ;
                             }
                             $session->set('panier',$panier);
                            return $this->redirect($this->generateUrl("panier"));
                           }



       public function panierAction()
                     {
         $session =$this->getRequest()->getSession();
         //$session->remove('panier');
        if(!$session->has('panier'))
         $session->set('panier',array());
      //  var_dump($session->get('panier'));
      // die();
       $em = $this->getDoctrine()->getManager();
       $bb = $em->getRepository("EcommerceBundle:article")->findArray(array_keys($session->get('panier')));


        /*
        $query= $repository ->createQueryBuilder('p')
        ->Select('p')
        ->where('p.id IN (:array) ')
        ->setParameter('array',$cc)
        ->getQuery();
        $bb = $query->getResult();*/
        //->findArray(array_keys($session->get('panier')));


    return $this->render('EcommerceBundle:Default:panier.html.twig',array('cc' =>$bb ,
                                                                      "panier" =>$session->get('panier')
                          ));
                      }



}
