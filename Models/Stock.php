<?php
class Stock{
    private $idstock_velo;

    private $quantite_velo;

    public function __construct(int $idstock_velo,int $quantite_velo)
    {
        $this->idstock_velo = $idstock_velo;
        $this->quantite_velo = $quantite_velo;

    /**
     * Get the value of idstock_velo
     */ 
    public function getIdstock_velo()
    {
        return $this->idstock_velo;
    }

    /**
     * Set the value of idstock_velo
     *
     * @return  self
     */ 
    public function setIdstock_velo($idstock_velo)
    {
        $this->idstock_velo = $idstock_velo;

        return $this;
    }

    /**
     * Get the value of quantite_velo
     */ 
    public function getQuantite_velo()
    {
        return $this->quantite_velo;
    }

    /**
     * Set the value of quantite_velo
     *
     * @return  self
     */ 
    public function setQuantite_velo($quantite_velo)
    {
        $this->quantite_velo = $quantite_velo;

        return $this;
    }
    }

  


