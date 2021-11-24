<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route ("/admin")
 * class AdminController
 * @package App\controller\admin
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/home", name ="admin")
     */
    public function admin(): Response
    {
        return $this->render('admin/home.html.twig');
    }
}
