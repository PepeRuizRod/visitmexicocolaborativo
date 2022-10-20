<?php
    class MODELOREGISTROSITIO
    {
        private $nombreUsuario;
        private $email;
        private $estado;
        private $nombreSitio;
        private $comentario;

        public function __construct($nombreUsuario,$email,$estado,$nombreSitio,$comentario)
        {
            $this->nombreUsuarioBD = $nombreUsuario;
            $this->emailBD = $email;
            $this->estadoBD = $estado;
            $this->nombreSitioBD = $nombreSitio;
            $this->comentarioBD = $comentario;
        }
        public function INSERTARSITIO($mysql){
            
            $sql = "INSERT INTO registrositio (nombreUsuario,email,estado,nombreSitio,comentario) ";
            $sql.= "VALUES('".$this->nombreUsuarioBD."','".$this->emailBD."','".$this->estadoBD."'";
            $sql.= ",'".$this->nombreSitioBD."','".$this->comentarioBD."')"; echo 'Comentario enviado correctamente';
            //header('location: ../PRsitios.html');
            
            if($mysql->query($sql));
            else echo 'Error al tratar de registrar usuario';

        }
    }
?>