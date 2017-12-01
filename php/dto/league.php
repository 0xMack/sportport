<?php
class League{ //Stores League information
    public $leagueID;
    public $sportID;
    public $leagueName;

    public function __construct($leagueName){
        $this->leagueName = trim($leagueName);
    }
}

function league_db_to_dto($league_db){
    $league_dto = new League($league_db['LeagueName']);
    $league_dto->sportID = trim($league_db['SportID']);
    $league_dto->leagueID = trim($league_db['LeagueID']);
    return $league_dto;
}

