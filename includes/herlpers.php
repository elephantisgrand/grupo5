<?php



function mostrarErrores($errores, $campo){
    $alerta ='';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta="<div class='alerta alerta-error'>".$errores[$campo].'</div>';
        return $alerta;
    }else{
        return $alerta;
    }
}

function borrarErrores(){
    
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
     unset($_SESSION['errores']);
    }
   
    
    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
    }
 
    if(isset($_SESSION['completado'])){    
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
}

function consegirCategorias($conexion){
    $sql ="SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql) ;
    $result = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result = $categorias;
    }
    return $result;
}

function consegirEntrada($conexion, $id){
  $id3=(int)$id;
  $sql ="SELECT e.*, c.nombre as 'categoria', CONCAT(u.nombre,' ',u.apellido) as 'usuario' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id INNER JOIN usuarios u ON e.usuario_id = u.id WHERE e.id = $id3";
    
    
    
  $entrada = mysqli_query($conexion, $sql);

  $resul = array();




  if($entrada && mysqli_num_rows($entrada)>=1){
      $resul = mysqli_fetch_assoc($entrada);
  }
  return $resul;
}


function consegirCategoria($conexion, $id){
  $id2=(int)$id;
    $sql ="SELECT * FROM categorias WHERE id = $id2;";

    $categorias = mysqli_query($conexion, $sql);
    $result = array();
   if($categorias && mysqli_num_rows($categorias)>=1){
     $result = mysqli_fetch_assoc($categorias);
    }
    return $result;
}




 function consegirUltimasEntradas($conexion){
//    $sql =" SELECT e.*, c.* FROM entradas e " 
  //  . "INNER JOIN categorias c ON e.categoria_id = c.id"
   //. "ORDER BY e.id DESC LIMIT 4";
   $sql = <<<SQL
             SELECT categorias.nombre as 'categoria', entradas.* FROM entradas 
             INNER JOIN categorias  ON entradas.categoria_id = categorias.id 
             ORDER BY entradas.id DESC LIMIT 4  
    SQL;

    $entradas  = mysqli_query($conexion, $sql);
    $resul = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
      $resul = $entradas;
    }
    return $resul; 
}



 function consegirTodasEntradas($conexion, $limit=null, $categoria = null, $busqueda = NULL){
    $sql =" SELECT e.*, c.nombre as 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ";
  
if(!empty($categoria)){
$sql.="WHERE e.categoria_id = $categoria"; 
}

if(!empty($busqueda)){
  $sql .="WHERE e.titulo LIKE '%$busqueda%'";
} 

$sql.=" ORDER BY e.id DESC";
    if($limit){
    $sql .="LIMIT 4";
    } 
    $entradas  = mysqli_query($conexion, $sql);
    $resul = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
      $resul = $entradas;
    }
    return $resul; 
}

?>
