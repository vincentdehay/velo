<?php
class Velo{
    private $id_velo;

    private $reference_velo;

    private $stock_velo;

    public function __construct(int $id_velo,string $reference_velo,int $stock_velo)
    {
        $this->id_velo = $id_velo;
        $this->reference_velo = $reference_velo;
        $this->stock_velo = $stock_velo;
    }

    

    /**
     * Get the value of id_velo
     */ 
    public function getId_velo()
    {
        return $this->id_velo;
    }

    /**
     * Set the value of id_velo
     *
     * @return  self
     */ 
    public function setId_velo($id_velo)
    {
        $this->id_velo = $id_velo;

        return $this;
    }

    /**
     * Get the value of reference_velo
     */ 
    public function getReference_velo()
    {
        return $this->reference_velo;
    }

    /**
     * Set the value of reference_velo
     *
     * @return  self
     */ 
    public function setReference_velo($reference_velo)
    {
        $this->reference_velo = $reference_velo;

        return $this;
    }

    /**
     * Get the value of stock_velo
     */ 
    public function getStock_velo()
    {
        return $this->stock_velo;
    }

    /**
     * Set the value of stock_velo
     *
     * @return  self
     */ 
    public function setStock_velo($stock_velo)
    {
        $this->stock_velo = $stock_velo;

        return $this;
    }
}