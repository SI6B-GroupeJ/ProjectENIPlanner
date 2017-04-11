<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DefaultController extends Controller
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    /**
     * @Route("/")
     */
    public function loginAction(Request $request)
    {
        $authChecker = $this->container->get('security.authorization_checker');
        $router = $this->container->get('router');

        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($router->generate('admin_home'), 307);
        }

        if ($authChecker->isGranted('ROLE_CONSULTANT')) {
            return new RedirectResponse($router->generate('consultant'), 307);
        }
    }
}
