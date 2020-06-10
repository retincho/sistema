<?php 

class Persona {

public function registroPersona($dato){
        
        $c=new conectar();
        $conexion=$c->conexion();
        
        $sql="INSERT into persona (apellido,
                                   nombres,
                                   tipoDoc,
                                   nroDoc)
                     values ('$dato[3]',
                            '$dato[2]',
                            '$dato[0]',
                            '$dato[1]')";
     
        
    return mysqli_query($conexion,$sql);                    
        
        
    }
}
?>	