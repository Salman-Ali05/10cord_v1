<?php

class PDODiscord{

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=discord';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $discord = null;

    private function __construct()
    {
        PDODiscord::$monPdo = new PDO(PDODiscord::$serveur . ';' . PDODiscord::$bdd, PDODiscord::$user, PDODiscord::$mdp);
        PDODiscord::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        PDODiscord::$monPdo = null;
    }

    public function disconnect(){
        session_unset();
        session_destroy();
    }

    public static function getPdoDiscord()
    {
        if (PDODiscord::$discord == null) {
            PDODiscord::$discord = new PDODiscord();
        }
        return PDODiscord::$discord;
    }

    public function isConnect($login, $mdp)
    {
        $res = PDODiscord::$monPdo->query("SELECT * FROM users");
        $lesLignes = array();
        $lesLignes = $res->fetchAll();
        foreach ($lesLignes as $ligne) {
            if ($ligne["login"] == $login && $ligne["mdp"] == $mdp) {
                return true;
            }
        }
        return false;
    }

    public function getInfoUser($login){
        $query = "SELECT * FROM users WHERE login = '" . $login . "'";
        $res = PDODiscord::$monPdo->query($query);
        $ligne = $res->fetch();
        return $ligne;
    }

    public function getUsers($username){
        $query = "SELECT * FROM users WHERE username != '" . $username . "'";
        $res = PDODiscord::$monPdo->query($query);
        $lesLignes = [];
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function createUser($login, $mdp, $pp, $username){
        $id = PDODiscord::lastID("users") + 1;
        $query = "INSERT INTO users VALUES($id, '$login', '$mdp', '$pp', '$username')";
        $res = PDODiscord::$monPdo->exec($query);
        return $res;
    }

    public function lastID($table){
        $query = "SELECT id FROM $table ORDER BY id desc";
        $res = PDODiscord::$monPdo->query($query);
        $lastID = $res->fetchAll();
        return $lastID[0]["id"] + 1;
    }

    public function getConversation($idRecever, $username, $idSender){
        $query = "SELECT * FROM conversation, users WHERE conversation.idRecever = $idRecever AND conversation.idSender = $idSender AND users.username = '" . $username . "'";
        $res = PDODiscord::$monPdo->query($query);
        $lesLignes = [];
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function getMessageAlea(){
        $query = "SELECT * FROM messagealeatoire";
        $res = PDODiscord::$monPdo->query($query);
        $lesLignes = [];
        $lesLignes = $res->fetchAll();
        $randNum = rand(0, count($lesLignes)-1);
        return $lesLignes[$randNum];
    }

    public function sendChat($message, $randResponse, $idRecever, $idSender, $pic){
        $lastID = PDODiscord::lastID("conversation");
        if ($pic == ""){
            $query = "INSERT INTO conversation VALUES($lastID, '" . $randResponse . "', '" . $message . "', $idRecever, $idSender, NULL)";
        }else{
            $file = "images/conversationsPic/";
            $query = "INSERT INTO conversation VALUES($lastID, '" . $randResponse . "', '" . $message . "', $idRecever, $idSender, '". $file . $pic . "')";
        }
        $res = PDODiscord::$monPdo->exec($query);
        return $res;
    }
}
?>