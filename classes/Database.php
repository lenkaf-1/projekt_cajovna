<?php

require_once __DIR__ . '/../appka/jadro/db.php';

class Database extends db {

    public function getConnection() {
        return $this->pripojenie();
    }
}