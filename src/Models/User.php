<?php

namespace Aristides\Models;

class User extends Model
{
    protected $table = 'users';

    public function insert(array $attributes)
    {
        $sql = "INSERT INTO {$this->table} (name, email, password) values (:name, :email, :password)";

        $insert = $this->connection->prepare($sql);

        return $insert->execute($attributes);
    }
}
