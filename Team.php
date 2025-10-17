<?php

class Team {
    /* Propriétés */
    private string $_teamName;
    private string $_creationDate;
    private Country $_country;
    private array $_recrutings;

    /* Méthode magique : Constructor */
    public function __construct($teamName, $creationDate, $country){
        $this->_teamName = $teamName;
        $this->_creationDate = $creationDate;
        $this->_country = $country;
        $this->_recrutings = [];
        $country->addTeam($this);
    }

    /* Getter et Setter */
    /* Nom de l'équipe */
    public function getTeamName() {
        return $this->_teamName;
    }
    public function setTeamName() {
        $this->_teamName = $teamName;
    }

    /* Date de création de l'équipe */
    public function getCreationDate() {
        return $this->_creationDate;
    }
    public function setCreationDate() {
        $this->_creationDate = $creationDate;
    }

    /* Pays d'appartenance */
    public function getCountry() {
        return $this->_country;
    }
    public function setCountry() {
        $this->_country = $country;
    }

    /* Méthodes */
    public function addRecruting(Recruting $recruting) {
        $this->_recrutings[] = $recruting;
    }

    public function playersRecruting() {
        $resultat = "";
        foreach($this->_recrutings as $recruting) {

            $resultat .= $recruting->getPlayer() . "<br>";

        }
             return "" . $resultat . "<br>";
    }

    /* Méthode magique : toString */
    public function __toString(){
        return "" . $this->_teamName . " (" . $this->_creationDate . ") <br>";
    }
}