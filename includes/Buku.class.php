<?php

class Buku extends DB
{
    function getBuku()
    {
        $query = "SELECT * FROM buku";
        return $this->execute($query);
    }
}


?>