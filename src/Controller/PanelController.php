<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{
    #[Route('/panel', name: 'app_panel')]
    public function index(Security $security): Response
    {
        if ($security->getUser()->getAdmin() !=1){
            return $this->redirectToRoute('app_default');
        }
        return $this->render('panel/index.html.twig', [
            'controller_name' => 'PanelController',
        ]);
    }
}
