<?php
class Ville{
    private $id_ville;

    private $cp_ville;

    private $nom_ville;

    private $id_stock__velo;

    public function __construct(int $id_ville,string $cp_ville,string $nom_ville,int $id_stock__velo)
    {
        $this->id_ville = $id_ville;
        $this->cp_ville = $cp_ville;
        $this->nom_ville = $nom_ville;
        $this->id_stock__velo = $id_stock__velo;

    /**
     * Get the value of id_ville
     */ 
    public function getId_ville()
    {
        return $this->id_ville;
    }

    /**
     * Set the value of id_ville
     *
     * @return  self
     */ 
    public function setId_ville($id_ville)
    {
        $this->id_ville = $id_ville;

        return $this;
    }

    /**
     * Get the value of cp_ville
     */ 
    public function getCp_ville()
    {
        return $this->cp_ville;
    }

    /**
     * Set the value of cp_ville
     *
     * @return  self
     */ 
    public function setCp_ville($cp_ville)
    {
        $this->cp_ville = $cp_ville;

        return $this;
    }

    /**
     * Get the value of nom_ville
     */ 
    public function getNom_ville()
    {
        return $this->nom_ville;
    }

    /**
     * Set the value of nom_ville
     *
     * @return  self
     */ 
    public function setNom_ville($nom_ville)
    {
        $this->nom_ville = $nom_ville;

        return $this;
    }

    /**
     * Get the value of id_stock__velo
     */ 
    public function getId_stock__velo()
    {
        return $this->id_stock__velo;
    }

    /**
     * Set the value of id_stock__velo
     *
     * @return  self
     */ 
    public function setId_stock__velo($id_stock__velo)
    {
        $this->id_stock__velo = $id_stock__velo;

        return $this;
    }
    }

    
