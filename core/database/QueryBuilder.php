<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class QueryBuilder
{
    protected $pdo;

    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define database for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    public function comparator($email)
    {

        $password = $this->pdo->prepare("SELECT password FROM users WHERE email = '{$email}'");


        $password->execute();
        return $password->fetchAll(PDO::FETCH_ASSOC);


    }


    public function selectUserID($email)
    {

        $password = $this->pdo->prepare("SELECT id FROM users WHERE email = '{$email}'");
        $password->execute();
        return $password->fetchAll(PDO::FETCH_ASSOC);


    }

    public function selectUser($id)
    {
        $user = $this->pdo->prepare("SELECT * FROM users WHERE id = {$id}");
        $user->execute();

        return $user->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insertUser($fname, $lname, $email, $nickname, $password)
    {
        $statement = $this->pdo->prepare("insert into users(fname, lname, email, password) values('{$fname}','{$lname}','{$email}', '{$password}'); insert into player (id, nickname) values
        ((select id from users where fname = '{$fname}'), '{$nickname}');");
        $statement->execute();

    }


    public function deleteUser($id)
    {

        $statement2 = $this->pdo->prepare("delete from player where id = {$id}");
        $statement2->execute();
        $statement = $this->pdo->prepare("delete from users where id = {$id}");
        $statement->execute();

    }

    public function selectUser2($id)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define database for output
         */
        $user = $this->pdo->prepare("select id, fname, lname, email from users where id = {$id}");


        $user->execute();

        return $user->fetchAll(PDO::FETCH_ASSOC);


    }

    public function alterUser($fname, $lname, $email, $nickname, $id)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define database for output
         */
        $user = $this->pdo->prepare("update users set fname = '{$fname}', lname = '{$lname}', email ='{$email}' where id = '{$id}'; update player set nickname = '{$nickname}' where id = '{$id}'; ");
        $user->execute();


    }


    public function selectPlayer($id)
    {
        $nickname = $this->pdo->prepare("select nickname from player where id = {$id};");
        $nickname->execute();
        return $nickname->fetchAll(PDO::FETCH_ASSOC);

    }


    public function insertGame($name, $nopf, $nopt, $dor, $score, $description, $suggestion)
    {
        $statement = $this->pdo->prepare("insert into games(name, nopf, nopt, dor, score, description, suggestion) values('{$name}', '{$nopf}', '{$nopt}', '{$dor}', {$score}, '{$description}', {$suggestion})");
        $statement->execute();


    }

    public function removeGame($id)
    {
        $statement = $this->pdo->prepare(" delete from battles where gameid = '{$id}'; delete from games where id = '{$id}';");
        $statement->execute();


    }

    public function selectGame($id)
    {
        $statement = $this->pdo->prepare("select * from games where id = '{$id}'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }


    public function addBattleplayer($nickname)
    {
        $nickname = $this->pdo->prepare("insert into players(Player) values('{$nickname}')");
        $nickname->execute();


    }


    public function insertBattleplayer($id)
    {
        $statement = $this->pdo->prepare("insert into battles(playerid) values($id)");
        $statement->execute();


    }

    public function removeBattleplayer($player)
    {
        $statement = $this->pdo->prepare("delete from players where Player = '{$player}'");
        $statement->execute();


    }

    public function selectGameid($title)
    {
        $statement = $this->pdo->prepare("select id from games where name = '{$title}'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function selectplayers()
    {
        $statement = $this->pdo->prepare("select Player from players");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }


    public function finishBattleWithoutScore($date, $winner, $gameid, $players)
    {
        $statement = $this->pdo->prepare("update player set wins = wins + 1 where nickname = '{$winner}'; insert into battles(dtPlayed, gameid,  wonby, players) values('{$date}','{$gameid}', '{$winner}', '{$players}');");
        $statement->execute();
    }

    public function finishBattleWithScore($date, $winner, $score, $gameid, $players)
    {
        $statement = $this->pdo->prepare("update player set wins = wins + 1 where nickname = '{$winner}'; insert into battles(dtPlayed, gameid,  wonby, score, players) values('{$date}','{$gameid}', '{$winner}', '{$score}', '{$players}');");
        $statement->execute();
    }

    public function addplayed($gameid)
    {
        $statement = $this->pdo->prepare("update games set played = played + 1 where id = {$gameid}");
        $statement->execute();
    }

    public function deletePlayers()
    {
        $statement = $this->pdo->prepare("delete from players");
        $statement->execute();
    }

    public function leaderboard($intoClass)
    {
        $statement = $this->pdo->prepare("select * from player order by wins DESC");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function leaderboardgames($intoClass)
    {
        $statement = $this->pdo->prepare("select * from games order by played DESC");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }


    public function selectPlayerbyID($id)
    {
        $statement = $this->pdo->prepare("select * from player where id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function changeStatus($state, $id)
    {
        $statement = $this->pdo->prepare("update player set gamestatus = {$state} where id = {$id}");
        $statement->execute();

    }

    public function selectOnlineplayers()
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define database for output
         */
        $statement = $this->pdo->prepare("select * from player where gamestatus = 1");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function selectScore($name)
    {
        $statement = $this->pdo->prepare("select score from games where name = '{$name}'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function changePassword($password, $id)
    {
        $statement = $this->pdo->prepare("update users set password = '{$password}' where id = '{$id}'");
        $statement->execute();


    }

    public function selectGames($suggestion, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from games where suggestion = {$suggestion}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    public function addSuggestion($id)
    {
        $statement = $this->pdo->prepare("update games set suggestion = 0 where id = '{$id}'");
        $statement->execute();

        header("Location: games");
        exit;

    }


    public function insertMessage($naam, $email, $onderwerp, $bericht, $datum)
    {
        $statement = $this->pdo->prepare("INSERT INTO contact(naam, email, onderwerp, bericht, datum) VALUES('{$naam}', '{$email}', '{$onderwerp}', '{$bericht}', '{$datum}')");
        $statement->execute();
    }

    public function selectMessage($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM contact WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Contact');
    }

    public function selectAllMessages()
    {
        $statement = $this->pdo->prepare("SELECT * FROM contact ORDER BY datum");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Contact');
    }


}