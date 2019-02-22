<?php
/**
 * Created by PhpStorm.
 * User: soussou
 * Date: 22/02/19
 * Time: 13:37
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class RouteController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function homepage()
    {
        return $this->render('pages/homepage.html.twig', [

        ]);
    }
}