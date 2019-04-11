<?php

namespace Aristides\Models;

use Aristides\Connection\Conn;

abstract class Model
{
    protected $connection;

    public function __construct()
    {
        $this->connection = Conn::getInstance();
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} where id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function findByName($field, $params)
    {
        $sql = "SELECT * FROM {$this->table} where {$field} = ?";
        $stmt = $this->connection->prepare($sql);
        // $stmt->bindValue(1, $value);
        $stmt->execute($params);

        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "SELECT * FROM {$this->table} where id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->rowCount();
    }
}
