<?php

include 'Country.php';
include 'Team.php';
include 'Player.php';
include 'Recruting.php';

$country1 = new Country('France');
$country2 = new Country('Espagne');
$country3 = new Country('Allemagne');
$country4 = new Country('Italie');
$country5 = new Country('Angleterre');
$country6 = new Country('Portugal');
$country7 = new Country('Argentine');
$country8 = new Country('Brésil');

$team1 = new Team('PSG', '1970', $country1);
$team2 = new Team('Racing Club Strasbourg', '1906', $country1);
$team3 = new Team('FC Barcelone', '1899', $country2);
$team4 = new Team('Juventus', '1897', $country4);
$team5 = new Team('Manchester United', '1878', $country5);
$team6 = new Team('Real Madrid', '1902', $country2);

var_dump($country2);
var_dump($country3);

$player1 = new Player('Killian', 'Mbappe', '1998-12-20', $country1 ,[]);
$player2 = new Player('Christiano', 'Ronaldo', '1985-02-05', $country6 ,[]);
$player3 = new Player('Lionel', 'Messi', '1987-06-24', $country7 ,[]);
$player4 = new Player('Neymar', 'Junior', '1992-02-05',$country8 ,[]);

var_dump($player2);

$recruting1 = new Recruting('2017', '2024', $team1, $player1);
$recruting2 = new Recruting('2024', '2025', $team6, $player1);
$recruting3 = new Recruting('2009', '2018', $team6, $player2);
$recruting4 = new Recruting('2018', '2021', $team4, $player2);
$recruting5 = new Recruting('2021', '2025', $team5, $player2);
$recruting6 = new Recruting('2004', '2021', $team3, $player3);
$recruting7 = new Recruting('2021', '2025', $team1, $player3);
$recruting8 = new Recruting('2013', '2017', $team3, $player4);
$recruting9 = new Recruting('2017', '2025', $team1, $player4);

var_dump($recruting5);
var_dump($team3);