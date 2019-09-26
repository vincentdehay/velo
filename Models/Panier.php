<?php
class Panier{
    private $id_panier;

    private $users_panier;

    private $velo_panier;

    public function __construct(int $id_panier,string $users_panier,string $velo_panier)
    {
        $this->id_panier = $id_panier;
        $this->users_panier = $users_panier;
        $this->velo_panier = $velo_panier;

    /**
     * Get the value of id_panier
     */ 
    public function getId_panier()
    {
        return $this->id_panier;
    }

    /**
     * Set the value of id_panier
     *
     * @return  self
     */ 
    public function setId_panier($id_panier)
    {
        $this->id_panier = $id_panier;

        return $this;
    }

    /**
     * Get the value of users_panier
     */ 
    public function getUsers_panier()
    {
        return $this->users_panier;
    }

    /**
     * Set the value of users_panier
     *
     * @return  self
     */ 
    public function setUsers_panier($users_panier)
    {
        $this->users_panier = $users_panier;

        return $this;
    }

    /**
     * Get the value of velo_panier
     */ 
    public function getVelo_panier()
    {
        return $this->velo_panier;
    }

    /**
     * Set the value of velo_panier
     *
     * @return  self
     */ 
    public function setVelo_panier($velo_panier)
    {
        $this->velo_panier = $velo_panier;

        return $this;
    }
    }


   
