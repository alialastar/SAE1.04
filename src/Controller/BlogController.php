<?php 
namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 

class BlogController extends AbstractController
{ 
    #[Route('/blog/accueil', name: 'app_accueil')]
    public function accueil(): Response 
    { 
        return $this->render('blog/accueil.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response 
    { 
        return $this->render('blog/blog.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/new', name: 'app_new')]
    public function new(): Response 
    { 
        return $this->render('blog/new.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }
}