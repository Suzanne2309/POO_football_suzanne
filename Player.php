<?php

class Player {
    /* Propriétés */
    private string $_firstName;
    private string $_lastName;
    private string $_birthDate;
    private Country $_country;
    private array $_recrutings;



    /* Méthode magique : Constructor */
    public function __construct($firstName, $lastName, $birthDate, $country){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = $birthDate;
        $this->_country = $country;
        $this->_recrutings = [];
    }

    /* Getter et Setter */
    /* Prénom du joueur */
    public function getFirstName() {
        return $this->_firstName;
    }
    public function setFirstName() {
        $this->_firstName = $firstName;
    }

    /* Nom du joueur */
    public function getLastName() {
        return $this->_lastName;
    }
    public function setLastName() {
        $this->_lastName = $lastName;
    }

    /* Date de naissance du joueur */
    public function getBirthDate() {
        return $this->_birthDate;
    }
    public function setBirthDate() {
        $this->_birthDate = $birthDate;
    }

    /* Nationnalité */
    public function getCountry() {
        return $this->_country;
    }
    public function setCountry() {
        $this->_country = $country;
    }

    /* Equipe */
    public function getTeam() {
        return $this->_team;
    }
    public function setTeam() {
        $this->_team = $team;
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

    public function teamRecrutings() {
        foreach($this->_recrutings as $recruting) {

                $recrutings[] = $recruting;
        };
    }

    public function calculAge(){
        $birth_date = $this->getBirthDate(); //on récupère la date de naissance du joueur
        $actual_date = date("Y-m-d"); //on utilise la fonction prédifinie "date"
        $birth_date_obj = new DateTime($birth_date);
        $actual_date_obj = new DateTime($actual_date);
        $diff = $actual_date_obj->diff($birth_date_obj);
        $age_years = $diff->y;
        return $age_years;
    }

    /* Méthode magique : toString */
    public function __toString(){
        return "Le joueur " . $this->_firstName . " " . $this->_lastName . ", " . $this->calculAge() . "ans, est recruté par les équipes : <br>" . $this->teamRecrutings() . "";
    }
}