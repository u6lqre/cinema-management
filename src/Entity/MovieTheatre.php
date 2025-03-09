<?php

namespace App\Entity;

use App\Repository\MovieTheatreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieTheatreRepository::class)]
class MovieTheatre
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $movie_id = null;

    #[ORM\Id]
    #[ORM\Column]
    private ?int $theatre_id = null;

    public function getMovieId(): ?int
    {
        return $this->movie_id;
    }

    public function getTheatreId(): ?int
    {
        return $this->theatre_id;
    }
}
