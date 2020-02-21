<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LibroRepository")
 */
class Libro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isbn;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genero;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bestseller;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Autor", mappedBy="libro")
     */
    private $autor;

    public function __construct()
    {
        $this->autor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }
    

    public function getIsbn(): ?int
    {
        return $this->isbn;
    }

    public function setIsbn(?int $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getBestseller(): ?bool
    {
        return $this->bestseller;
    }

    public function setBestseller(bool $bestseller): self
    {
        $this->bestseller = $bestseller;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Autor[]
     */
    public function getAutor(): Collection
    {
        return $this->autor;
    }

    public function addAutor(Autor $autor): self
    {
        if (!$this->autor->contains($autor)) {
            $this->autor[] = $autor;
            $autor->setLibro($this);
        }

        return $this;
    }

    public function removeAutor(Autor $autor): self
    {
        if ($this->autor->contains($autor)) {
            $this->autor->removeElement($autor);
            // set the owning side to null (unless already changed)
            if ($autor->getLibro() === $this) {
                $autor->setLibro(null);
            }
        }

        return $this;
    }
}
