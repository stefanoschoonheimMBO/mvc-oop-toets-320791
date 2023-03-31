<?php

class PoundModel
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
                       ,WinsByKnockout
                FROM   PoundForPound
                ORDER BY Ranking ASC";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}