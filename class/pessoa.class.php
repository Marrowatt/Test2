<?php

    require_once('bd.class.php');

    class Pessoa {

        private $nome;

        private $bd;
        private $table = 'pessoa';

        public function __construct () {
            $this->bd = new bd();
        }

        public function __get ($key) {
            return $this->$key;
        }
        
        public function __set ($key, $value) {
            $this->$key = $value;
        }

        public function ler () {

            $sql = "SELECT * FROM " . $this->table;

            $base = mysqli_query($this->bd->conn, $sql);

            $retorno = [];
            
            while ($reg = mysqli_fetch_assoc($base)) {

                $filhos = $this->lerFilho($reg['id']);

                array_push($retorno, [
                    "nome" => $reg['nome'],
                    "filhos" => $filhos
                ]);                
            }

            return $retorno;
        }

        public function lerFilho ($id) {

            $sql = "SELECT nome FROM filho WHERE pessoa_id = " . $id;

            $base = mysqli_query($this->bd->conn, $sql);

            $retorno = [];
            
            while ($reg = mysqli_fetch_assoc($base)) {

                array_push($retorno, $reg['nome']);                
            }

            return $retorno;
        }

        public function gravar ($thing) {

            $this->resetBase();

            $stuffs = json_decode($thing);

            foreach ($stuffs->pessoas as $key => $s) {

                $sql = "INSERT INTO " . $this->table . " (nome) VALUES ('" . $s->nome . "');";

                mysqli_query($this->bd->conn, $sql);

                $inserted_id = $this->bd->conn->insert_id;

                foreach ($s->filhos as $f) {
                    
                    $sql2 = "INSERT INTO filho (pessoa_id, nome) VALUES (" . $inserted_id . ", '" . $f . "');";

                    mysqli_query($this->bd->conn, $sql2);
                }
            }
        }

        public function resetBase () {

            $sql2 = "DELETE FROM filho;";

            mysqli_query($this->bd->conn, $sql2);

            $sql = "DELETE FROM " . $this->table;

            mysqli_query($this->bd->conn, $sql);
        }
    }