<?php
    class MODELOCONSULTARCOMENTARIO
    {


        public function CONSULTARCOMENTARIO($mysql){
            $sql = "SELECT * FROM registrositio ORDER BY id DESC LIMIT 3;";
            $comentarios = $mysql->query($sql);

            return $comentarios;

        }
    }
?>