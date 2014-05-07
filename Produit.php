<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produit
 *
 * @author Administrateur
 */
class Produit {
    private $libelle;
    private $prix;
    private $poids;
    private $taille;
    private $quantite;
    
    function __construct($libelle, $prix, $poids, $taille) {
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->poids = $poids;
        $this->taille = $taille;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getTaille() {
        return $this->taille;
    }
    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

        public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
        return $this;
    }

    public function setTaille($taille) {
        $this->taille = $taille;
        return $this;
    }


}
