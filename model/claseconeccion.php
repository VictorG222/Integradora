<?php
class Conection{

    public $driver;
    public $host;
    public $user;
    public $paswword;
    public $database;
    public $conn;


    public function __construct(){

        $this->driver = "mysql";
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "master_clinician";
        
        
        $this->get_conection();

    }

    public function get_conection(){
        $this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database,$this->user,$this->password);


        if (!$this->conn){

            echo "Error al conectar";
        }
        else{
            //echo "conexion establecida";
            
        }
    } 

    public function insertPaciente($nombre_completo, $fecha_de_nacimiento, $genero, $tipo_de_sangre, $peso, $estatura, $direccion, $correo_electronico, $contraseña, $telefono_de_casa, $telefono_movil, $enfermedades, $alergias, $cirugias_y_accidentes){

        $sql = "CALL web_sp_insertpaciente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$nombre_completo);
        $statement->bindParam(2,$fecha_de_nacimiento);
        $statement->bindParam(3,$genero);
        $statement->bindParam(4,$tipo_de_sangre);
        $statement->bindParam(5,$peso);
        $statement->bindParam(6,$estatura);
        $statement->bindParam(7,$direccion);
        $statement->bindParam(8,$correo_electronico);
        $statement->bindParam(9,$contraseña);
        $statement->bindParam(10,$telefono_de_casa);
        $statement->bindParam(11,$telefono_movil);
        $statement->bindParam(12,$enfermedades);
        $statement->bindParam(13,$alergias);
        $statement->bindParam(14,$cirugias_y_accidentes);

        if($statement->execute()){
            return "Perfil creado";
        }
        else{
            return "Perfil no creado";
        }
    }
    

    public function updatePaciente($nombre_completo, $fecha_de_nacimiento, $genero, $tipo_de_sangre, $peso, $estatura, $direccion, $correo_electronico, $contraseña, $telefono_de_casa, $telefono_movil, $enfermedades, $alergias, $cirugias_y_accidentes){

        $sql = "CALL web_sp_updatepaciente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$nombre_completo);
        $statement->bindParam(2,$fecha_de_nacimiento);
        $statement->bindParam(3,$genero);
        $statement->bindParam(4,$tipo_de_sangre);
        $statement->bindParam(5,$peso);
        $statement->bindParam(6,$estatura);
        $statement->bindParam(7,$direccion);
        $statement->bindParam(8,$correo_electronico);
        $statement->bindParam(9,$contraseña);
        $statement->bindParam(10,$telefono_de_casa);
        $statement->bindParam(11,$telefono_movil);
        $statement->bindParam(12,$enfermedades);
        $statement->bindParam(13,$enfermedades);
        $statement->bindParam(14,$cirugias_y_accidentes);

        if($statement->execute()){
            return "Datos actualizados";
        }
        else{
            return "DATOS NO ACTUALIZADOS";
        }

    }

    function login($correo_electronico,$contraseña){

        $sql = "CALL web_sp_login(?,?)";
        $statement = $this->conn->prepare($sql);

        $statement->bindParam(1,$correo_electronico);
        $statement->bindParam(2,$contraseña);

        
        if($statement->execute()){

            $count=$statement->rowCount();

            if($count){
                $cookie_name = "sesion";
                $cookie_value = "token";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                return true;
            }
            else{
                return false;
                
            }
        }
        
    }

    public function listarcitas(){
        $sql = "CALL web_sp_citaslist(?)";
        $statement = $this->conn->prepare($sql);

        $statement->bindParam(1,$correo_electronico);
        
        if($statement->execute()){

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        }
    }


    function delete(){

        $sql = "CALL web_sp_delete(?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$email);

        if($statement->execute()){

            $count=$statement->rowCount();
            if($count){
                return "ELIMINADO";
            }else{
                return "ELIMINADO";
            }
        }

    }

}