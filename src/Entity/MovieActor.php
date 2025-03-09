<?php

namespace App\Entity;

use App\Repository\MovieActorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieActorRepository::class)]
class MovieActor
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $movie_id = null;

    #[ORM\Id]
    #[ORM\Column]
    private ?int $actor_id = null;

    public function getMovieId(): ?int
    {
        return $this->movie_id;
    }

    public function getActorId(): ?int
    {
        return $this->actor_id;
    }
}
