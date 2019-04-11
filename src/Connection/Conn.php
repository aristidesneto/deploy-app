<?php

namespace Aristides\Connection;

use PDO;

abstract class Conn
{
    /**
     * @var PDO
     */
    private static $instance = null;

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * Classe seja criada através do operador `new` de fora dessa classe.
     */
    protected function __construct()
    {
        //
    }

    /**
     * Método clone do tipo privado previne a clonagem dessa instância
     * da classe
     *
     * @return void
     */
    private function __clone()
    {
        //
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup()
    {
        //
    }

    /**
     * Realiza a conexão com o banco de dados
     * Padrão Singleton
     *
     * @return void
     */
    public static function getInstance()
    {
        $config = require __DIR__ . "../../../config/database.php";

        try {
            // Cria uma conexão PDO caso não exista
            if (self::$instance == null) {
                $dns = 'mysql:host='. $config['host'] .';dbname='. $config['database'] .';charset='. $config['charset'];
                $pdo = new PDO($dns, $config['username'], $config['password']);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

                return $pdo;
            }

            return self::$instance;

        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
