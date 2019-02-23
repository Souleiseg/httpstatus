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
     * @Route("/api/")
     */
    public function homePage()
    {
        return $this->render('pages/homepage.html.twig', [
            'user' => 'admin'
        ]);
    }

    /**
     * @Route("/login")
     */
    public function loginPage()
    {
        return $this->render('pages/login.html.php', [

        ]);
    }



    /**
     * @Route("/about")
     */
    public function aboutPage()
    {
        return $this->render('pages/about.html.twig', [

        ]);
    }

    /**
     * @Route("/api/list")
     */
    public function sitesPage()
    {
        return $this->render('pages/sites.html.php', [

        ]);
    }

    /**
     * @Route("/api/delete/{$id}")
     */
    public function deleteSite($id){
        return $this->render('pages/sites.html.php', [
        ]);
    }

    /**
     * @Route("/api/status/")
     */
    public function siteStatus(){
    }

    /**
     * @Route("/api/history/")
     */
    public function siteHistory(){

    }

    /**
     * @Route("/api/add/")
     */
    public function addMore(){

    }

}
