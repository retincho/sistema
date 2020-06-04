<?php 

class usuarios {
    
    public function registroUsuario($dato){
        
        $c=new conectar();
        $conexion=$c->conexion();
       
        $sql="INSERT into usuarios (apellido,
                                   nombre,
                                   usuario,
                                   password)
                     values ('$dato[0]',
                            '$dato[1]',
                            '$dato[2]',
                            '$dato[3]')";
     
        
        return mysqli_query($conexion,$sql);                    
        
        
    }
    
    public function loginUser($datos){
        
        $c=new conectar();
        $conexion=$c->conexion();
        $pass=sha1($datos[1]);
        
          $_SESSION['usuario']=$datos[0];
          $_SESSION['iduser']=self::traeId($datos);
        
        $sql = "Select * from usuarios where usuario='$datos[0]' and password='$pass'";
        
        $result= mysqli_query($conexion, $sql);
        
        if(mysqli_num_rows($result)==1){
            return 1;}
       else{
            return 0;}
        
     }
     
     public function traeId($datos){
         $c=new conectar();
         $conexion=$c->conexion();
         $pass=sha1($datos[1]);
         $sql="Select id_usuarios from usuarios where usuario='$datos[0]' and password='$pass'";
         $result= mysqli_query($conexion, $sql);
         
         return mysqli_fetch_row($result)[0];
         
     }
    
    
}
?>