<?php

/**
 * Description of Adresse
 *
 * @author Administrateur
 */
class Adresse {

    private $libelle;
    private $cdp;
    private $ville;
    
    public function getLibelle() {
        return $this->libelle;
    }

    public function getCdp() {
        return $this->cdp;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    public function setCdp($cdp) {
        $this->cdp = $cdp;
        return $this;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    function __construct($libelle, $cdp, $ville) {
        $this->libelle = $libelle;
        $this->cdp = $cdp;
        $this->ville = $ville;
    }

}
