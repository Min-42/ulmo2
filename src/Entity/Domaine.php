<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomaineRepository")
 */
class Domaine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="integer")
     */
    private $numOrdre;

     /**
     * @ORM\Column(type="string", length=24, unique=true)
     */
    private $libelle;

     /**
     * @ORM\Column(type="string", length=64)
     */
    private $titre;

     /**
     * @ORM\Column(type="text")
     */
    private $description;
 
    /**
     * @ORM\Column(type="string", length=256)
     */
    private $icone;

     /**
     * @ORM\Column(type="string", length=256)
     */
    private $fondEcran;

    public function getId()
    {
        return $this->id;
    }

    function getNumOrdre() {
        return $this->numOrdre;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getIcone() {
        return $this->icone;
    }

    function getFondEcran() {
        return $this->fondEcran;
    }

    function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIcone($icone) {
        $this->icone = $icone;
    }

    function setFondEcran($fondEcran) {
        $this->fondEcran = $fondEcran;
    }
}
