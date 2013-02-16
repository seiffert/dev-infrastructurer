<?php

namespace Seiffert\InfrastructurerWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SeiffertInfrastructurerWebBundle:Default:index.html.twig');
    }
}
