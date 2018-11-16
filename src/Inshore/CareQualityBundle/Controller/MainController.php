<?php


namespace Inshore\CareQualityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


//Entities

//Forms



class MainController extends Controller
{
    public function dashboardglobalAction()
    {
        $path = array("Dashboard", "Global Dashboard");

        return $this->render('InshoreCareQualityBundle::index.html.twig', array(
            'path'            =>  $path,
            'currentTitle'    => end($path),
        ));
    }

    public function dashboardalertsAction()
    {
        $path = array("Dashboard", "Alerts");

        return $this->render('InshoreCareQualityBundle::index.html.twig', array(
            'path'            =>  $path,
            'currentTitle'    => end($path),
        ));
    }

    public function dashboardserviceuserAction()
    {
        $path = array("Dashboard", "Service User");

        return $this->render('InshoreCareQualityBundle::index.html.twig', array(
            'path'            =>  $path,
            'currentTitle'    => end($path),
        ));
    }

}