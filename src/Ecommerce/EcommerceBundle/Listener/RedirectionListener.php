<?php
namespace Ecommerce\EcommerceBundle\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RedirectionListener
{
public function __construct(ContainerInterface $container, Session $session)
{
$this->session= $session;
$this->router = $container->get('router');
$this->securityContext = $container->get('security.context');
}
public function onKernelRequest(GetResponseEvent $event)
{

  $route = $event->getRequest()->attributes->get('_route');
  if($route == 'validation'){
    if ($this->session->has('panier')) {
      if (count($this->session->get('panier')) == 0)
        $event->setResponse(new RedirectResponse($this->router->generate('panier')));
    }
    if (!is_object($this->securityContext->getToken()->getUser())) {
      $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
    }
    }
  }
}
