<?php

namespace App\Controller;

use App\Repository\DetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class DetailController extends AbstractController
{
    /**
     * @Route("/detail", name="detail")
     */
    public function index(DetailRepository $detailRepository, Security $security): Response
    {
        $details = $detailRepository->findBy(['user' => $security->getUser()], ['id' => 'DESC']);

        return $this->render('detail/index.html.twig', [
            'details' => $details,
        ]);
    }
}
