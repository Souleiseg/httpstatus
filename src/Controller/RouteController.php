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
     * @Route("/api/", name="home")
     */
    public function homePage()
    {
        return $this->render('pages/homepage.html.twig', [
            'user' => 'admin'
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutPage()
    {
        return $this->render('pages/about.html.twig', [

        ]);
    }


}
