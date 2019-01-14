<?php

class Patients {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '00/00/0000';
    public $phone = 0000000000;
    public $mail = '';
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=hospital;dbname=hospitalE2N;charset=utf8', 'romuald', '******');
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    /**
     * methode permettant d'insérer des données dans la table patients.
     * @return array
     */
    public function addPatients() {

        $query = 'INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) '
                . 'VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $queryResult->bindValue(':phone', $this->phone, PDO::PARAM_INT);
        $queryResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);

        //       $date = DateTime::createFromFormat('d/m/Y', $this->birthdate);
        //       $dateUs = $date->format('Y-m-d');
        //       $addPatients->bindValue(':birthdate', $dateUs, PDO::PARAM_STR);
        return $queryResult->execute();
    }

}
