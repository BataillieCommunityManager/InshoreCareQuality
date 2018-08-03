<?php

namespace Inshore\CareQualityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InshoreCareQualityBundle:Default:index.html.twig');
    }
}
