<?php

namespace Ourss\ReaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reader Controller
 */
class ReaderController extends Controller
{
    /**
     * reader homepage
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->redirect(
            $this->generateUrl('ourss_reader_all')
        );
    }

    /**
     * read all feeds
     *
     * @return Response
     */
    public function allAction()
    {
        return $this->render('OurssReaderBundle:Reader:all.html.twig');
    }
}
