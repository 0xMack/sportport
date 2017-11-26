CREATE DATABASE sportportdb;

CREATE TABLE Users
(
    UserID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LastName NVARCHAR(255) NOT NULL,
    FirstName NVARCHAR(255) NOT NULL,
    Email NVARCHAR(255) NOT NULL,
    DateOfBirth DATE NOT NULL,
    PasswordHash BINARY(64) NOT NULL,
    Salt BINARY(64) NOT NULL
);
CREATE UNIQUE INDEX Users_UserID_uindex ON Users (UserID);
CREATE UNIQUE INDEX Users_Email_uindex ON Users (Email);

CREATE TABLE teams
(
    TeamID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TeamName NVARCHAR(255) NOT NULL
);
CREATE UNIQUE INDEX teams_TeamID_uindex ON teams (TeamID);
CREATE UNIQUE INDEX teams_TeamName_uindex ON teams (TeamName);

CREATE TABLE sports
(
    SportID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    SportName NVARCHAR(255) NOT NULL
);
CREATE UNIQUE INDEX sports_SportID_uindex ON sports (SportID);
CREATE UNIQUE INDEX sports_SportName_uindex ON sports (SportName);

# Add foreign keys between tables
ALTER TABLE teams
    ADD CONSTRAINT teams_leagues_LeagueID_fk
FOREIGN KEY (TeamID) REFERENCES leagues (LeagueID);
ALTER TABLE leagues
    ADD CONSTRAINT leagues_sports_SportID_fk
FOREIGN KEY (LeagueID) REFERENCES sports (SportID);

CREATE TABLE team_membership
(
    TeamID INT NOT NULL,
    CONSTRAINT team_membership_teams_TeamID_fk FOREIGN KEY (TeamID) REFERENCES teams (TeamID)
);
CREATE UNIQUE INDEX team_membership_TeamID_uindex ON team_membership (TeamID);
ALTER TABLE team_membership ADD UserID INT NOT NULL;
CREATE UNIQUE INDEX team_membership_UserID_uindex ON team_membership (UserID);
ALTER TABLE team_membership
    ADD CONSTRAINT team_membership_users_UserID_fk
FOREIGN KEY (UserID) REFERENCES users (UserID);

CREATE TABLE games
(
    GameID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    AteamID INT NOT NULL,
    BteamID INT NOT NULL,
    AteamScore INT NOT NULL,
    BteamScore INT NOT NULL,
    Date DATE NOT NULL,
    CONSTRAINT games_teams_ATeamID_fk FOREIGN KEY (AteamID) REFERENCES teams (TeamID),
    CONSTRAINT games_teams_BTeamID_fk FOREIGN KEY (BteamID) REFERENCES teams (TeamID)
);
CREATE UNIQUE INDEX games_GameID_uindex ON games (GameID);
CREATE UNIQUE INDEX games_AteamID_uindex ON games (AteamID);
CREATE UNIQUE INDEX games_BteamID_uindex ON games (BteamID);

GRANT ALL PRIVILEGES ON sportportdb.* To 'fakeuser'@'localhost' IDENTIFIED BY 'fakepassword';
