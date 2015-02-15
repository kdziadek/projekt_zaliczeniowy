<?php

namespace Dziadek\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
	*@Route("/", name="index")
	*@Template()
	*/
	public function indexAction()
    {
        return array();
    }
	
	/**
	*@Route("/filmy.html", name="url_filmy")
	*@Template()
	*/
	public function filmyAction()
    {
        return array();
    }
	
	/**
	*@Route("/log.html", name="url_log")
	*@Template()
	*/
	public function logowanieAction()
    {
        return array();
    }
	
}
