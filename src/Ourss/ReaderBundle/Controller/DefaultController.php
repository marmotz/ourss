<?php

namespace Ourss\ReaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reader Default Controller
 */
class DefaultController extends Controller
{
    /**
     * Ourss homepage
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->redirect(
            $this->generateUrl('ourss_reader_homepage')
        );
    }
}
