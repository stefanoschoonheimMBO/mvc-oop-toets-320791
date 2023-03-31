<?php

class PoundForPoundModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMensPounds()
    {
        $sql = "SELECT  Name
                       ,Ranking
                       ,Length
                       ,Weight
                       ,Age
                FROM   PoundForPound";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}