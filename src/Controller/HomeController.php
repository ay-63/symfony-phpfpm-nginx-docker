<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Psr\Log\LoggerInterface;
use App\Service\TradsService;

class HomeController extends AbstractController // implements TokenAuthenticatedController
{
    /**
      * @Route("/")
      */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }
}
