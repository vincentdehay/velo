<?php
class Users{
    private $idusers;

    private $genre_users;

    private $nom_users;

    private $prenom_users;

    private $date_de_naissance_users;

    private $telephone_users;

    private $cp_users;

    private $ad_mail_users;

    private $pro_users;

    

    private $id_mode_de_paiement;

    public function __construct(int $idusers, string $genre_users,string $nom_users,string $prenom_users, string $date_de_naissance_users,string $telephone_users, int $cp_users,string $ad_mail_users,string $pro_users, string $id_mode_de_paiement)
    {
        $this->idusers = $idusers;
        $this->genre_users = $genre_users;
        $this->nom_users = $nom_users;
        $this->prenom_users = $prenom_users;
        $this->date_de_naissance_users = $date_de_naissance_users;
        $this->telephone_users = $telephone_users;
        $this->cp_users = $cp_users;
        $this->ad_mail_users = $ad_mail_users;
        $this->pro_users = $pro_users;
    
        $this->id_mode_de_paiement = $id_mode_de_paiement;
    }

    /**
     * Get the value of idusers
     */ 
    public function getIdusers()
    {
        return $this->idusers;
    }

    /**
     * Set the value of idusers
     *
     * @return  self
     */ 
    public function setIdusers($idusers)
    {
        $this->idusers = $idusers;

        return $this;
    }

    /**
     * Get the value of genre_users
     */ 
    public function getGenre_users()
    {
        return $this->genre_users;
    }

    /**
     * Set the value of genre_users
     *
     * @return  self
     */ 
    public function setGenre_users($genre_users)
    {
        $this->genre_users = $genre_users;

        return $this;
    }

    /**
     * Get the value of nom_users
     */ 
    public function getNom_users()
    {
        return $this->nom_users;
    }

    /**
     * Set the value of nom_users
     *
     * @return  self
     */ 
    public function setNom_users($nom_users)
    {
        $this->nom_users = $nom_users;

        return $this;
    }

    /**
     * Get the value of prenom_users
     */ 
    public function getPrenom_users()
    {
        return $this->prenom_users;
    }

    /**
     * Set the value of prenom_users
     *
     * @return  self
     */ 
    public function setPrenom_users($prenom_users)
    {
        $this->prenom_users = $prenom_users;

        return $this;
    }

    /**
     * Get the value of date_de_naissance_users
     */ 
    public function getDate_de_naissance_users()
    {
        return $this->date_de_naissance_users;
    }

    /**
     * Set the value of date_de_naissance_users
     *
     * @return  self
     */ 
    public function setDate_de_naissance_users($date_de_naissance_users)
    {
        $this->date_de_naissance_users = $date_de_naissance_users;

        return $this;
    }

    /**
     * Get the value of telephone_users
     */ 
    public function getTelephone_users()
    {
        return $this->telephone_users;
    }

    /**
     * Set the value of telephone_users
     *
     * @return  self
     */ 
    public function setTelephone_users($telephone_users)
    {
        $this->telephone_users = $telephone_users;

        return $this;
    }

    /**
     * Get the value of cp_users
     */ 
    public function getCp_users()
    {
        return $this->cp_users;
    }

    /**
     * Set the value of cp_users
     *
     * @return  self
     */ 
    public function setCp_users($cp_users)
    {
        $this->cp_users = $cp_users;

        return $this;
    }

    /**
     * Get the value of ad_mail_users
     */ 
    public function getAd_mail_users()
    {
        return $this->ad_mail_users;
    }

    /**
     * Set the value of ad_mail_users
     *
     * @return  self
     */ 
    public function setAd_mail_users($ad_mail_users)
    {
        $this->ad_mail_users = $ad_mail_users;

        return $this;
    }

    /**
     * Get the value of pro_users
     */ 
    public function getPro_users()
    {
        return $this->pro_users;
    }

    /**
     * Set the value of pro_users
     *
     * @return  self
     */ 
    public function setPro_users($pro_users)
    {
        $this->pro_users = $pro_users;

        return $this;
    }
  }

