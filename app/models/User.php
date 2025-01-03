<?php
class User{
    private $idUser;
    private $userName;
    private $psswd;
    private $tipoUser;
    
    public function __construct($idUser, $userName, $psswd, $tipoUser) {
        $this->idUser = $idUser;
        $this->userName = $userName;
        $this->psswd = $psswd;
        $this->tipoUser = $tipoUser;
    }

    
    public function getPsswd() {
        return $this->psswd;
    }

    public function setPsswd($psswd): void {
        $this->psswd = $psswd;
    }

        
    public function getIdUser() {
        return $this->idUser;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getTipoUser() {
        return $this->tipoUser;
    }

    public function setIdUser($idUser): void {
        $this->idUser = $idUser;
    }

    public function setUserName($userName): void {
        $this->userName = $userName;
    }

    public function setTipoUser($tipoUser): void {
        $this->tipoUser = $tipoUser;
    }


}
?>