<?php

        class DB{
            //properti
            private $host = "127.0.0.1";
            private $user = "root"; 
            private $password = "";
            private $databese = "dbrestoran";

                public function __construct() 
                {
                    echo "function construct";
                }
            //method
            public function selectData()
            {
                echo 'select data';
            }
            public function getDatabse() 
            {
                return $this->database
            }
            public function tampil()  
            {
                $this->selectData();
            }

            public function insert()
            {
                echo "static function";    
            }

        }

        DB::insertData();

        $db = new DB;

        // echo '<br>';

        // $db->selectData();

        // echo '<br>';

        // $db->host;

        // echo '<br>';

        // $db->getDatabase(). '<br>';

        // $db->tampil();


?>