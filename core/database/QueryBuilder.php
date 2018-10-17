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

    public function insertUser($fname, $lname, $email, $nickname){
        $statement = $this->pdo->prepare("insert into users(fname, lname, email) values('{$fname}','{$lname}','{$email}'); insert into player (id, nickname) values
        ((select id from users where fname = '{$fname}'), '{$nickname}');");
        $statement->execute();

}


    public function deleteUser($id){

        $statement2 = $this->pdo->prepare("delete from player where id = {$id}");
        $statement2->execute();
        $statement = $this->pdo->prepare("delete from users where id = {$id}");
        $statement->execute();

    }
    public function selectUser($id)
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


    public function selectPlayer($id){
        $nickname = $this->pdo->prepare("select nickname from player where id = {$id};");
        $nickname->execute();
        return $nickname->fetchAll(PDO::FETCH_ASSOC);

    }



    public function insertGame($name, $nopf, $nopt, $dor, $description){
        $statement = $this->pdo->prepare("insert into games(name, nopf, nopt, dor, description) values('{$name}', '{$nopf}', '{$nopt}', '{$dor}', '{$description}')");
        $statement->execute();


    }
    public function removeGame($id){
    $statement = $this->pdo->prepare("delete from games where id = '{$id}'");
    $statement->execute();


}
    public function selectGame($id){
        $statement = $this->pdo->prepare("select * from games where id = '{$id}'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }



    public function addBattleplayer($nickname){
        $nickname = $this->pdo->prepare("insert into players(Player) values('{$nickname}')");
        $nickname->execute();


    }

    public function selectBattleplayer(){
        $selection = $this->pdo->prepare("select 'player%' from battles");
        $selection->execute();

        return $selection->fetchAll(PDO::FETCH_ASSOC);
    }



    public function insertBattleplayer($id){
        $statement = $this->pdo->prepare("insert into battles(playerid) values($id)");
        $statement->execute();


    }
    public function removeBattleplayer($player){
        $statement = $this->pdo->prepare("delete from players where Player = '{$player}'");
        $statement->execute();


    }
    public function selectGameid($title){
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


    public function finishBattle($date, $winner, $gameid, $players){
        $statement = $this->pdo->prepare("insert into battles(dtPlayed, gameid,  wonby, players) values('{$date}','{$gameid}', '{$winner}', '{$players}');");
        $statement->execute();
    }






}