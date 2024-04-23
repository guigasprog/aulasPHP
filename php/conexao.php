<?php
    class Conexao {
        private static string $dbName = 'servicos';
        private static string $dbHost = 'localhost';
        private static string $dbUserName = 'root';
        private static string $dbPassword = '';

        private static PDO $connected = null;

        public static function connect() {
            if(self::$connected) {
                try {
                    self::$connected = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUserName, self::$dbPassword);
                }
                catch(\PDOException $e) {
                    die($e->getMessage());
                }
            }
            return self::$connected;
        }
        public static function disconnect() {
            return self::$connected = null;
        }
    }
?>