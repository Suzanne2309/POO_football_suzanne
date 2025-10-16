<?php

class Recruting {
    /* Propriétés */
    private int $_seasonStart;
    private int $_seasonEnd;
    private Team $_team;
    private Player $_player;

    /* Méthode magique : Constructor */
    public function __construct($seasonStart, $seasonEnd, $team, $player){
        $this->_seasonStart = $seasonStart;
        $this->_seasonEnd = $seasonEnd;
        $this->_team = $team;
        $this->_player = $player;
        $team->addRecruting($this);
        $player->addRecruting($this);
    }

    /* Getter et Setter */
    /* Début de saison du joueur */
    public function getSeasonStart() {
        return $this->_seasonStart;
    }
    public function setSeasonStart() {
        $this->_seasonStart = $seasonStart;
    }

    /* Fin de saison du joueur*/
    public function getSeasonEnd() {
        return $this->_seasonStart;
    }
    public function setSeasonEnd() {
        $this->_seasonEnd = $seasonEnd;
    }

    /* Team */
    public function getTeam() {
        return $this->_team;
    }
    public function setTeam() {
        $this->_team = $team;
    }

    /* Joueur */
    public function getPlayer() {
        return $this->_player;
    }
    public function setPlayer() {
        $this->_player = $player;
    }

    /* Méthodes */


    /* Méthode magique : toString */
    public function __toString(){
        return "Le joueur " . $this->_player . " a été recruté par l'équipe " . $this->_team . " de " . $this->_seasonStart . " à " . $this->_seasonEnd . ".";
    }
}