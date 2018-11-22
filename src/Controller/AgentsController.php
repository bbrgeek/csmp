<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AgentsController extends AbstractController
{

    public function index():Response
    {
        return $this->render('pages/agents.html.twig');
    }
}