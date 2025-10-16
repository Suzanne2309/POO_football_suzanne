<?php

class Country {
    /* Propriétés */
    private string $_countryName;
    private array $_teams;

    /* Méthode magique : Constructor */
    public function __construct($countryName){
        $this->_countryName = $countryName;
        $this->_teams = [];
    }

    /* Getter et Setter */
    /* Nom de l'équipe */
    public function getCountryName() {
        return $this->_countryName;
    }
    public function setCountryName() {
        $this->_countryName = $countryName;
    }

    /* Méthodes */
    public function addTeam(Team $team){ 
        $this->_teams[] = $team;
    }

    public function showTeams() {
        $result = "";
        foreach($this->_teams as $team) {
            $result .= $team . "<br>";
        }
        return $result;
    }

    /* Méthode magique : toString */
    public function __toString(){
        return "Le pays " . $this->_countryName . " possède les équipes :" . showTeams() . "<br>";
    }
}