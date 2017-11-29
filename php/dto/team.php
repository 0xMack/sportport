<?php
class Team{ //Stores Team information
    public $teamID;
    public $leagueID;
    public $teamName;

    public function __construct($teamName){
        $this->teamName = trim($teamName);
    }
}

function team_db_to_dto($team_db){
    $team_dto = new Team($team_db['TeamName']);
    $team_dto->teamID = trim($team_db['teamID']);
    $team_dto->leagueID = trim($team_db['LeagueID']);
    return $team_dto;
}