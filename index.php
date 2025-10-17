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

//var_dump($country2);
//var_dump($country3);

$player1 = new Player('Killian', 'Mbappe', '1998-12-20', $country1);
$player2 = new Player('Christiano', 'Ronaldo', '1985-02-05', $country6);
$player3 = new Player('Lionel', 'Messi', '1987-06-24', $country7);
$player4 = new Player('Neymar', 'Junior', '1992-02-05',$country8);

//var_dump($player2);

$recruting1 = new Recruting('2017', '2024', $team1, $player1);
$recruting2 = new Recruting('2024', '2025', $team6, $player1);
$recruting3 = new Recruting('2009', '2018', $team6, $player2);
$recruting4 = new Recruting('2018', '2021', $team4, $player2);
$recruting5 = new Recruting('2021', '2025', $team5, $player2);
$recruting6 = new Recruting('2004', '2021', $team3, $player3);
$recruting7 = new Recruting('2021', '2025', $team1, $player3);
$recruting8 = new Recruting('2013', '2017', $team3, $player4);
$recruting9 = new Recruting('2017', '2025', $team1, $player4);

//var_dump($recruting5);
//var_dump($team3);

//echo $team2->playersRecruting();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice POO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="uikit/css/uikit.min.css" />
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/uikit-icons.min.js"></script>
</head>
<body>

    <header>
        <h1>Exercice POO - Football</h1>
    </header>

    <main>
        <h2>Liste des pays</h2>
        <div class="container">
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $country1->getcountryName(); ?></h3>
                <p class="team"><?php echo $country1->showTeams(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $country2->getcountryName(); ?></h3>
                <p class="team"><?php echo $country2->showTeams(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $country3->getcountryName(); ?></h3>
                <p class="team"><?php echo $country3->showTeams(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $country4->getcountryName(); ?></h3>
                <p class="team"><?php echo $country4->showTeams(); ?></p>
            </div>
        </div>
        
        <h2>Liste des équipes</h2>
        <div class="container">
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team1->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team1->getCountry() . " - " . $team1->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team1->playersRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team2->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team2->getCountry() . " - " . $team2->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team2->playersRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team3->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team3->getCountry() . " - " . $team3->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team3->playersRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team4->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team4->getCountry() . " - " . $team4->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team4->playersRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team5->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team5->getCountry() . " - " . $team5->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team5->playersRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo $team6->getTeamName(); ?></h3>
                <p class="info"><?php echo "" . $team6->getCountry() . " - " . $team6->getCreationDate() . "<br>"; ?></p>
                <p class="players"><?php echo $team6->playersRecruting(); ?></p>
            </div>
        </div>

        <h2>Liste des joueurs</h2>
        <div class="container">
            <div class="uk-card uk-card-overlay">
                <h3><?php echo "" . $player1->getFirstName() . " " . $player1->getLastName() . "<br>"; ?></h3>
                <p class="info"><?php echo "" . $player1->getCountry() . " - " . $player1->calculAge() . "ans<br>"; ?></p>
                <p class="teams"><?php echo $player1->teamsRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo "" . $player2->getFirstName() . " " . $player2->getLastName() . "<br>"; ?></h3>
                <p class="info"><?php echo "" . $player2->getCountry() . " - " . $player2->calculAge() . "ans<br>"; ?></p>
                <p class="teams"><?php echo $player2->teamsRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo "" . $player3->getFirstName() . " " . $player3->getLastName() . "<br>"; ?></h3>
                <p class="info"><?php echo "" . $player3->getCountry() . " - " . $player3->calculAge() . "ans<br>"; ?></p>
                <p class="teams"><?php echo $player3->teamsRecruting(); ?></p>
            </div>
            <div class="uk-card uk-card-overlay">
                <h3><?php echo "" . $player4->getFirstName() . " " . $player4->getLastName() . "<br>"; ?></h3>
                <p class="info"><?php echo "" . $player4->getCountry() . " - " . $player4->calculAge() . "ans<br>"; ?></p>
                <p class="teams"><?php echo $player4->teamsRecruting(); ?></p>
            </div>
        </div>

    </main>

</body>
</html>