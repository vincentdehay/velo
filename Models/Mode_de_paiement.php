<?php
class Mode_de_paiement{
    private $idMode_de_paiement;

    private $CB_paiement;

    private $paypal;

    private $autre_paiement;

    public function __construct(int $idMode_de_paiement,string $CB_paiement, $paypal,string $autre_paiement)
    {
        $this->idMode_de_paiement = $idMode_de_paiement;
        $this->CB_paiement = $CB_paiement;
        $this->paypal = $paypal;
        $this->autre_paiement = $autre_paiement;
    }

   

   
    }

   

    /**
     * Get the value of idMode_de_paiement
     */ 
    public function getIdMode_de_paiement()
    {
        return $this->idMode_de_paiement;
    }

    /**
     * Set the value of idMode_de_paiement
     *
     * @return  self
     */ 
    public function setIdMode_de_paiement($idMode_de_paiement)
    {
        $this->idMode_de_paiement = $idMode_de_paiement;

        return $this;
    }

    /**
     * Get the value of CB_paiement
     */ 
    public function getCB_paiement()
    {
        return $this->CB_paiement;
    }

    /**
     * Set the value of CB_paiement
     *
     * @return  self
     */ 
    public function setCB_paiement($CB_paiement)
    {
        $this->CB_paiement = $CB_paiement;

        return $this;
    }

    /**
     * Get the value of paypal
     */ 
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set the value of paypal
     *
     * @return  self
     */ 
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get the value of autre_paiement
     */ 
    public function getAutre_paiement()
    {
        return $this->autre_paiement;
    }

    /**
     * Set the value of autre_paiement
     *
     * @return  self
     */ 
    public function setAutre_paiement($autre_paiement)
    {
        $this->autre_paiement = $autre_paiement;

        return $this;
    }
}