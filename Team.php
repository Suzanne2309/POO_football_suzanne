<?php

class Team {
    /* Propriétés */
    private string $_teamName;
    private string $_creationDate;
    private Country $_country;
    private Player $_player;
    private array $_recrutings;

    /* Méthode magique : Constructor */
    public function __construct($teamName, $creationDate, $country, $player, $recrutings = []){
        $this->_teamName = $teamName;
        $this->_creationDate = $creationDate;
        $this->_country = $country;
        $this->_player = $player;
        $this->_recrutings = $recrutings;
        $country->addTeam($this);
        $player->addTeamToPlayer($this);
    }

    /* Getter et Setter */
    /* Nom de l'équipe */
    public function getTeamName() {
        return $this->_teamName;
    }
    public function setTeamName() {
        $this->_teamName = $teamName;
    }

    /* Pays d'appartenance */
    public function getCoutnry() {
        return $this->_country;
    }
    public function setCountry() {
        $this->_country = $country;
    }

    /* Recrutement */
    public function getRecrutings() {
        return $this->_recrutings;
    }
    public function setRecrutings() {
        $this->_recrutings = $recrutings;
    }

    /* Méthodes */
    public function addRecruting(Recruting $recruting) {
        $this->_recrutings[] = $recruting;
    }

    public function playersRecruting() {
        //Un hôtel va accéder aux tableaux de réservations de chaque chambre lui appartenant, pour compter le nombre de chambre et faire le total des réservations
        $result = "";
        foreach($this->_players as $player) {
            foreach($player->getRecrutings() as $recruting){

                $result .= $recruting . ",<br>";
            };
        }
        return "L'équipe " . $this->_teamName . " a recruté les joueurs : <br>" . $result . "";
    }

    /* Méthode magique : toString */
    public function __toString(){
        return "L'équipe " . $this->_teamName . " du Pays " . $this->_country . " est composé des joueurs : <br>" . playersRecruting() . "";
    }
}