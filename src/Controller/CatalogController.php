<?php

namespace App\Controller;

use App\Repository\MoviesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogController extends AbstractController
{
  #[Route("/api/movies")]
  public function getCatalog(MoviesRepository $repository): Response
  {
    $movies = $repository->findAll();
    return $this->json($movies);
  }
}
