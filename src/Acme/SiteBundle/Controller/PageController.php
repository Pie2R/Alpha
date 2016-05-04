<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\SiteBundle\Form\Type\RegistrationType;
use Acme\SiteBundle\Form\Model\Registration;


class PageController extends Controller
{
    public function homepageAction()
    {
        return $this->render('AcmeSiteBundle:Page:homepage.html.twig');
    }
    public function referenceAction(){
    	 return $this->render('AcmeSiteBundle:Page:reference.html.twig');
    }
    public function solutionAction(){
    	 return $this->render('AcmeSiteBundle:Page:solution.html.twig');
    }
    

   }
