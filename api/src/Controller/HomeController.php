<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class HomeController
 * @package App\Controller
 *
 * @since 0.1
 * @version 1.0
 * @author HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home_page")
     */
    public function index(): Response
    {
        return new Response(
            '<center><h1> React Challenge 2 - API </h1></center>',
            200
        );
    }
}
