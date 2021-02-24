<?php

    require_once('class/pessoa.class.php');

    class functions {

        public function incluir ($thing) {
            
            $json = json_decode($thing['objeto']);

            $include = array(
                'nome' => $thing['name'],
                'filhos' => []
            );

            array_push($json->pessoas, $include);

            $json = json_encode($json);

            return $json;
        }

        public function incluirFilho ($thing) {
            
            $json = json_decode($thing['objeto']);

            array_push($json->pessoas[$_POST['where']]->filhos, $_POST['name']);

            $json = json_encode($json);

            return $json;
        }

        public function remover ($thing) {

            $json = json_decode($thing['objeto']);

            array_splice($json->pessoas, $thing['value'], 1);

            return json_encode($json);
        }

        public function removerFilho ($thing) {

            $json = json_decode($thing['objeto']);

            array_splice($json->pessoas[$thing['i']]->filhos, $thing['value'], 1);

            return json_encode($json);
        }

        public function ler () {

            $pessoa = new Pessoa();
            
            $pessoas = [
                "pessoas" => $pessoa->ler()
            ];

            return json_encode($pessoas);
        }

        public function gravar ($thing) {

            $pessoa = new Pessoa();

            $pessoa->gravar($thing['objeto']);

            return $this->ler();
        }

    }