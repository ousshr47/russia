<?php

namespace Russia\RussiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RussiaRussiaBundle:Default:index.html.twig');
    }
    public function ActualiteAction()
    {
        return $this->render('RussiaRussiaBundle:Default:actualite.html.twig');
    }
    public function ContactAction()
    {
        return $this->render('RussiaRussiaBundle:Default:contact.html.twig');
    }
    public function LoginAction()
    {
        return $this->render('RussiaRussiaBundle:Default:login.html.twig');
    }
    public function RegistreAction()
    {
        return $this->render('RussiaRussiaBundle:Default:registre.html.twig');
    }

}
