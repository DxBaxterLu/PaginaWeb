<?php
    class MySQL extends Conexion {
        private $conexion;
        private $strquery;
        private $arrValues;

        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        //Inserta un Registro
        public function insert(string $query, array $arrValues) {
            $this->strquery = $query;
            $this->arrVAlues = $arrValues;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrVAlues);

            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsert();
            }else {
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        //Busca un Registro
        public function select(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //Devolver todos los Registros
        public function select_all(string $query) {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        //Actualizar Registros
        public function update(string $query, array $arrValues) {
            $this->strquery = $query;
            $this->arrVAlues = $arrValues;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrVAlues);
            return $resExecute;
        }

        //Eliminar un Registro
        public function delete(string $query) {
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $del = $result->execute();
            return $del;
        }
    }
?>