<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
  public function loginAction(Request $request)
  {
    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('');
    }
    
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('OCUserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}