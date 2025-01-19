<?php 
namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 

class BlogController extends AbstractController
{ 
    #[Route('/blog/portefolio', name: 'app_portefolio')]
    public function portefolio(): Response 
    { 
        return $this->render('blog/portefolio.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/loisir', name: 'app_loisir')]
    public function loisir(): Response 
    { 
        return $this->render('blog/loisir.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/cv', name: 'app_cv')]
    public function cv(): Response 
    { 
        return $this->render('blog/cv.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/accueil', name: 'app_accueil')]
    public function accueil(): Response 
    { 
        return $this->render('blog/accueil.html.twig',[
            'controller_name' => 'BlogController',
        ]);
    }
}