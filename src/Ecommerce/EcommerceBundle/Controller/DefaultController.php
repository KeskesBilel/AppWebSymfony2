<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
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
            $session = $this->getRequest()->getSession();
            $em = $this->getDoctrine()->getManager();
            $bb = $em->getRepository("EcommerceBundle:article")->findAll();

            if(!$session->has('panier'))
            $panier =$session->get('panier');
            else
            $panier = false ;
            return $this->render('EcommerceBundle:Default:produit.html.twig', array('cc' =>$bb,
                                                                                    'panier'=>$panier));
          }

    public function pageajouteAction()
          {
            $em = $this->getDoctrine()->getManager();
            $a = new article();
            $form = $this->createForm(new articleType(),$a);
            $request = $this->getRequest();
            if ($request->isMethod('POST')) {
             $form->submit($request);
           if ($form->isValid()){
              //$form->bind($request);
            $em->persist($a);
            $em->flush();
             return $this->redirect($this->generateUrl("ecommerce_produitpage"));
            }
             }
             return $this->render('EcommerceBundle:Default:ajoute.html.twig', array('form' => $form->createView() ));
          }


    public function pagevoirAction($id)
            {
              $session = $this->getRequest()->getSession();
              $em = $this->getDoctrine()->getManager();
              $bb = $em->getRepository("EcommerceBundle:article")->findOneById($id);
              if(!$session->has('panier'))
              $panier =$session->get('panier');
              else
              $panier = false ;
                  return $this->render('EcommerceBundle:Default:voir.html.twig', array('cc' =>$bb,
                                                                                      'panier'=>$panier));
            }


    public function pageediterAction(article $article)
            {
              $em = $this->getDoctrine()->getManager();
              $form = $this->createForm(new articleType(),$article);
              $request = $this->getRequest();
              if ($request->isMethod('POST')) {
               $form->submit($request);
             if ($form->isValid()){
                //$form->bind($request);
              $em->persist($article);
              $em->flush();
               return $this->redirect($this->generateUrl("ecommerce_voirepage", array('id' => $article->getId(),
               ))
             );
              }
            }
            return $this->render('EcommerceBundle:Default:editer.html.twig', array(
             'id'    =>$article->getId(),
              'form' => $form->createView(),
               ));
         }


         public function pagesupprimerAction(article $article)
                 {
                   $em = $this->getDoctrine()->getManager();
                   $em ->remove($article);
                   $em ->flush();
                   return $this->redirect($this->generateUrl("ecommerce_produitpage")) ;
                 }

        public function pagecategorieAction()
                    {
                          $em = $this->getDoctrine()->getManager();
                          $bb = $em->getRepository("EcommerceBundle:article")->findAll();
                          return $this->render('EcommerceBundle:Default:Categorie.html.twig', array('cc' =>$bb));
                     }



}
