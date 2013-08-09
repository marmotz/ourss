<?php

namespace Ourss\InstallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Install Default Controller
 */
class DefaultController extends Controller
{
    /**
     * Install homepage
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('OurssInstallBundle:Default:index.html.twig');
    }
}
