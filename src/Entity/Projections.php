<?php

namespace App\Entity;

use App\Repository\ProjectionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectionsRepository::class)]
class Projections
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $movie_id = null;

    #[ORM\Column]
    private ?int $hall_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $projection_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieId(): ?int
    {
        return $this->movie_id;
    }

    public function setMovieId(int $movie_id): static
    {
        $this->movie_id = $movie_id;

        return $this;
    }

    public function getHallId(): ?int
    {
        return $this->hall_id;
    }

    public function setHallId(int $hall_id): static
    {
        $this->hall_id = $hall_id;

        return $this;
    }

    public function getProjectionDate(): ?\DateTimeInterface
    {
        return $this->projection_date;
    }

    public function setProjectionDate(\DateTimeInterface $projection_date): static
    {
        $this->projection_date = $projection_date;

        return $this;
    }
}
