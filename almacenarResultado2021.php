<?php

if(isset($_POST['guardar'])){
require 'conexion.php';
$identificador = $_POST['identificador'];
$resultadoObtenido1 = $_POST['resultadoObtenido1'];
$resultadoObtenido2 = $_POST['resultadoObtenido2'];
$resultadoObtenido3 = $_POST['resultadoObtenido3'];
$resultadoObtenido4 = $_POST['resultadoObtenido4'];
$resultadoObtenido5 = $_POST['resultadoObtenido5'];
$resultadoObtenido6 = $_POST['resultadoObtenido6'];
$comentarioOperativo = $_POST['comentarioOperativo'];

$evidencia1 ="evidencia1";
$evidencia2 ="evidencia2";
$evidencia3 ="evidencia3";

$evidencia4 ="evidencia4";
$evidencia5 ="evidencia5";
$evidencia6 ="evidencia6";

$evidencia7 ="evidencia7";
$evidencia8 ="evidencia8";
$evidencia9 ="evidencia9";

$evidencia10 ="evidencia10";
$evidencia11 ="evidencia11";
$evidencia12 ="evidencia12";

$evidencia13 ="evidencia13";
$evidencia14 ="evidencia14";
$evidencia15 ="evidencia15";

$evidencia16 ="evidencia16";
$evidencia17 ="evidencia17";
$evidencia18 ="evidencia18";

$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido = '$resultadoObtenido1' where id_empleado = '$identificador'");

$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido2 = '$resultadoObtenido2' where id_empleado = '$identificador'");
$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido3 = '$resultadoObtenido3' where id_empleado = '$identificador'");
$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido4 = '$resultadoObtenido4' where id_empleado = '$identificador'");
$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido5 = '$resultadoObtenido5' where id_empleado = '$identificador'");
$query = $conexion2->query("UPDATE descripcionesmetas2022 set resultadobtenido6 = '$resultadoObtenido6' where id_empleado = '$identificador'");
$query = $conexion2->query("UPDATE descripcionesmetas2022 set comentario = '$comentarioOperativo' where id_empleado = '$identificador'");

}

/*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
    VALUES ('".$_FILES['fichero1']['type']."','".$_FILES['fichero1']['size']."', '$identificador')";
    mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
 
        if($_FILES["fichero1"]["error"]>0){
         	
         } else {
         
         $permitidos = array("application/pdf");
         
      
     
         
         if(in_array($_FILES["fichero1"]["type"], $permitidos) && $_FILES["fichero1"]["size"]){
             
             $ruta = 'archivos2022/'.$evidencia1.$identificador.'/';
             $archivo = $ruta.$_FILES["fichero1"]["name"] = "evidencia 1.pdf";
          
             
             if(!file_exists($ruta)){
                 mkdir($ruta);
             }
             
             if(!file_exists($archivo)){
                 
                 $resultado = @move_uploaded_file($_FILES["fichero1"]["tmp_name"], $archivo);
                 
                 if($resultado){
                   
                     } else {
                     
                 }
                 
                 }
             
             } 
         
     }
    /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['fichero1']['type']."', size = '".$_FILES['fichero1']['size']."' WHERE identificador = '$identificador' limit 1";
     mysqli_query($conexion2, $update);*/
     if($_FILES["fichero1"]["error"]>0){
       
       } else {
       
       $permitidos = array("application/pdf");
     
       
       if(in_array($_FILES["fichero1"]["type"], $permitidos) && $_FILES["fichero1"]["size"]){
           
           $ruta = 'archivos2022/'.$evidencia1.$identificador.'/';
           $archivo = $ruta.$_FILES["fichero1"]["name"]= "evidencia 1.pdf";
      
           
           if(!file_exists($ruta)){
               mkdir($ruta);
           }
           
           if(file_exists($archivo)){
               
               $resultado = @move_uploaded_file($_FILES["fichero1"]["tmp_name"], $archivo);
               
               if($resultado){
                
                   } else {
                  
               }
               
               }
            
            elseif(!file_exists($archivo)){
            
                $resultado = @move_uploaded_file($_FILES["fichero1"]["tmp_name"], $archivo);
                
                if($resultado){
                  
                    } else {
                  
                }
                
                } 
          
          } 
}
    /* $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
    VALUES ('".$_FILES['fichero2']['type']."','".$_FILES['fichero2']['size']."', '$identificador')";
    mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
 
        if($_FILES["fichero2"]["error"]>0){
         	
         } else {
         
         $permitidos = array("application/pdf");
     
         
         if(in_array($_FILES["fichero2"]["type"], $permitidos) && $_FILES["fichero2"]["size"]){
             
             $ruta = 'archivos2022/'.$evidencia2.$identificador.'/';
             $archivo = $ruta.$_FILES["fichero2"]["name"] = "evidencia 2.pdf";
             
             if(!file_exists($ruta)){
                 mkdir($ruta);
             }
             
             if(!file_exists($archivo)){
                 
                 $resultado = @move_uploaded_file($_FILES["fichero2"]["tmp_name"], $archivo);
                 
                 if($resultado){
                   
                     } else {
                     
                 }
                 
                 }
             
             } 
         
     }
    /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['fichero2']['type']."', size = '".$_FILES['fichero2']['size']."' WHERE identificador = '$identificador' limit 1";
     mysqli_query($conexion2, $update);*/
     if($_FILES["fichero2"]["error"]>0){
       
       } else {
       
       $permitidos = array("application/pdf");
     
       
       if(in_array($_FILES["fichero2"]["type"], $permitidos) && $_FILES["fichero2"]["size"]){
           
           $ruta = 'archivos2022/'.$evidencia2.$identificador.'/';
           $archivo = $ruta.$_FILES["fichero2"]["name"]= "evidencia 2.pdf";
           
           if(!file_exists($ruta)){
               mkdir($ruta);
           }
           
           if(file_exists($archivo)){
               
               $resultado = @move_uploaded_file($_FILES["fichero2"]["tmp_name"], $archivo);
               
               if($resultado){
                
                   } else {
                  
               }
               
               }
            
            elseif(!file_exists($archivo)){
            
                $resultado = @move_uploaded_file($_FILES["fichero2"]["tmp_name"], $archivo);
                
                if($resultado){
                  
                    } else {
                  
                }
                
                } 
          
          } 
}
   /*  $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
    VALUES ('".$_FILES['fichero3']['type']."','".$_FILES['fichero3']['size']."', '$identificador')";
    mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
 
        if($_FILES["fichero3"]["error"]>0){
         	
         } else {
         
         //$permitidos = array("application/pdf");
     
         
         if(in_array($_FILES["fichero3"]["type"]) && $_FILES["fichero3"]["size"]){
             
             $ruta = 'archivos2022/'.$evidencia3.$identificador.'/';
             $archivo = $ruta.$_FILES["fichero3"]["name"] = "evidencia 3.pdf";
             
             
             if(!file_exists($ruta)){
                 mkdir($ruta);
             }
             
             if(!file_exists($archivo)){
                 
                 $resultado = @move_uploaded_file($_FILES["fichero3"]["tmp_name"], $archivo);
                 
                 if($resultado){
                   
                     } else {
                     
                 }
                 
                 }
             
             } 
         
     }
    /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['fichero3']['type']."', size = '".$_FILES['fichero3']['size']."' WHERE identificador = '$identificador' limit 1";
     mysqli_query($conexion2, $update);*/
     if($_FILES["fichero3"]["error"]>0){
       
       } else {
       
      $permitidos = array("application/pdf");
     
       
       if(in_array($_FILES["fichero3"]["type"]) && $_FILES["fichero3"]["size"]){
           
           $ruta = 'archivos2022/'.$evidencia3.$identificador.'/';
           $archivo = $ruta.$_FILES["fichero3"]["name"]= "evidencia 3.pdf";
        
           if(!file_exists($ruta)){
               mkdir($ruta);
           }
           
           if(file_exists($archivo)){
               
               $resultado = @move_uploaded_file($_FILES["fichero3"]["tmp_name"], $archivo);
               
               if($resultado){
                
                   } else {
                  
               }
               
               }
            
            elseif(!file_exists($archivo)){
            
                $resultado = @move_uploaded_file($_FILES["fichero3"]["tmp_name"], $archivo);
                
                if($resultado){
                  
                    } else {
                  
                }
                
                } 
          
          } 
}
    /* $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
     VALUES ('".$_FILES['archio4']['type']."','".$_FILES['archio4']['size']."', '$identificador')";
     mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
  
         if($_FILES["archio4"]["error"]>0){
              
          } else {
          
          $permitidos = array("application/pdf");
      
          
          if(in_array($_FILES["archio4"]["type"], $permitidos) && $_FILES["archio4"]["size"]){
              
              $ruta = 'archivos2022/'.$evidencia4.$identificador.'/';
              $archivo = $ruta.$_FILES["archio4"]["name"] = "evidencia 4.pdf";
              
              if(!file_exists($ruta)){
                  mkdir($ruta);
              }
              
              if(!file_exists($archivo)){
                  
                  $resultado = @move_uploaded_file($_FILES["archio4"]["tmp_name"], $archivo);
                  
                  if($resultado){
                    
                      } else {
                      
                  }
                  
                  }
              
              } 
          
      }
     /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio4']['type']."', size = '".$_FILES['archio4']['size']."' WHERE identificador = '$identificador' limit 1";
      mysqli_query($conexion2, $update);*/
      if($_FILES["archio4"]["error"]>0){
        
        } else {
        
        $permitidos = array("application/pdf");
      
        
        if(in_array($_FILES["archio4"]["type"], $permitidos) && $_FILES["archio4"]["size"]){
            
            $ruta = 'archivos2022/'.$evidencia4.$identificador.'/';
            $archivo = $ruta.$_FILES["archio4"]["name"]= "evidencia 4.pdf";
            
            if(!file_exists($ruta)){
                mkdir($ruta);
            }
            
            if(file_exists($archivo)){
                
                $resultado = @move_uploaded_file($_FILES["archio4"]["tmp_name"], $archivo);
                
                if($resultado){
                 
                    } else {
                   
                }
                
                }
             
             elseif(!file_exists($archivo)){
             
                 $resultado = @move_uploaded_file($_FILES["archio4"]["tmp_name"], $archivo);
                 
                 if($resultado){
                   
                     } else {
                   
                 }
                 
                 } 
           
           } 
 }
    /*  $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
      VALUES ('".$_FILES['archio5']['type']."','".$_FILES['archio5']['size']."', '$identificador')";
      mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
   
          if($_FILES["archio5"]["error"]>0){
               
           } else {
           
           $permitidos = array("application/pdf");
       
           
           if(in_array($_FILES["archio5"]["type"], $permitidos) && $_FILES["archio5"]["size"]){
               
               $ruta = 'archivos2022/'.$evidencia5.$identificador.'/';
               $archivo = $ruta.$_FILES["archio5"]["name"] = "evidencia 5.pdf";
               
               if(!file_exists($ruta)){
                   mkdir($ruta);
               }
               
               if(!file_exists($archivo)){
                   
                   $resultado = @move_uploaded_file($_FILES["archio5"]["tmp_name"], $archivo);
                   
                   if($resultado){
                     
                       } else {
                       
                   }
                   
                   }
               
               } 
           
       }
     /*  $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio5']['type']."', size = '".$_FILES['archio5']['size']."' WHERE identificador = '$identificador' limit 1";
       mysqli_query($conexion2, $update);*/
       if($_FILES["archio5"]["error"]>0){
         
         } else {
         
         $permitidos = array("application/pdf");
       
         
         if(in_array($_FILES["archio5"]["type"], $permitidos) && $_FILES["archio5"]["size"]){
             
             $ruta = 'archivos2022/'.$evidencia5.$identificador.'/';
             $archivo = $ruta.$_FILES["archio5"]["name"]= "evidencia 5.pdf";
             
             if(!file_exists($ruta)){
                 mkdir($ruta);
             }
             
             if(file_exists($archivo)){
                 
                 $resultado = @move_uploaded_file($_FILES["archio5"]["tmp_name"], $archivo);
                 
                 if($resultado){
                  
                     } else {
                    
                 }
                 
                 }
              
              elseif(!file_exists($archivo)){
              
                  $resultado = @move_uploaded_file($_FILES["archio5"]["tmp_name"], $archivo);
                  
                  if($resultado){
                    
                      } else {
                    
                  }
                  
                  } 
            
            } 
  }
      /* $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio6']['type']."','".$_FILES['archio6']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio6"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio6"]["type"], $permitidos) && $_FILES["archio6"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia6.$identificador.'/';
                $archivo = $ruta.$_FILES["archio6"]["name"] = "evidencia 6.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio6"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
           /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio6']['type']."', size = '".$_FILES['archio6']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio6"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio6"]["type"], $permitidos) && $_FILES["archio6"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia6.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio6"]["name"]= "evidencia 6.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio6"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio6"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio7']['type']."','".$_FILES['archio7']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio7"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio7"]["type"], $permitidos) && $_FILES["archio7"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia7.$identificador.'/';
                $archivo = $ruta.$_FILES["archio7"]["name"] = "evidencia 7.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio7"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio7']['type']."', size = '".$_FILES['archio7']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio7"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio7"]["type"], $permitidos) && $_FILES["archio7"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia7.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio7"]["name"]= "evidencia 7.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio7"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio7"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio8']['type']."','".$_FILES['archio8']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio8"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio8"]["type"], $permitidos) && $_FILES["archio8"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia8.$identificador.'/';
                $archivo = $ruta.$_FILES["archio8"]["name"] = "evidencia 8.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio8"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio8']['type']."', size = '".$_FILES['archio8']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio8"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio8"]["type"], $permitidos) && $_FILES["archio8"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia8.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio8"]["name"]= "evidencia 8.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio8"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio8"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio9']['type']."','".$_FILES['archio9']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio9"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio9"]["type"], $permitidos) && $_FILES["archio9"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia9.$identificador.'/';
                $archivo = $ruta.$_FILES["archio9"]["name"] = "evidencia 9.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio9"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
           /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio9']['type']."', size = '".$_FILES['archio9']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio9"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio9"]["type"], $permitidos) && $_FILES["archio9"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia9.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio9"]["name"]= "evidencia 9.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio9"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio9"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

      /* $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio10']['type']."','".$_FILES['archio10']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio10"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio10"]["type"], $permitidos) && $_FILES["archio10"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia10.$identificador.'/';
                $archivo = $ruta.$_FILES["archio10"]["name"] = "evidencia 10.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio10"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio10']['type']."', size = '".$_FILES['archio10']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio10"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio10"]["type"], $permitidos) && $_FILES["archio10"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia10.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio10"]["name"]= "evidencia 10.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio10"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio10"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }
       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio11']['type']."','".$_FILES['archio11']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio11"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio11"]["type"], $permitidos) && $_FILES["archio11"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia11.$identificador.'/';
                $archivo = $ruta.$_FILES["archio11"]["name"] = "evidencia 11.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio11"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio11']['type']."', size = '".$_FILES['archio11']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio11"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio11"]["type"], $permitidos) && $_FILES["archio11"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia11.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio11"]["name"]= "evidencia 11.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio11"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio11"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio12']['type']."','".$_FILES['archio12']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio12"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio12"]["type"], $permitidos) && $_FILES["archio12"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia12.$identificador.'/';
                $archivo = $ruta.$_FILES["archio12"]["name"] = "evidencia 12.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio12"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio12']['type']."', size = '".$_FILES['archio12']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio12"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio12"]["type"], $permitidos) && $_FILES["archio12"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia6.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio12"]["name"]= "evidencia 12.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio12"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio12"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }
       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio13']['type']."','".$_FILES['archio13']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio13"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio13"]["type"], $permitidos) && $_FILES["archio13"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia13.$identificador.'/';
                $archivo = $ruta.$_FILES["archio13"]["name"] = "evidencia 13.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio13"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio13']['type']."', size = '".$_FILES['archio13']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio13"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio13"]["type"], $permitidos) && $_FILES["archio13"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia13.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio13"]["name"]= "evidencia 13.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio13"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio13"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio14']['type']."','".$_FILES['archio14']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio14"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio14"]["type"], $permitidos) && $_FILES["archio14"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia14.$identificador.'/';
                $archivo = $ruta.$_FILES["archio14"]["name"] = "evidencia 14.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio14"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio14']['type']."', size = '".$_FILES['archio14']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio14"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio14"]["type"], $permitidos) && $_FILES["archio14"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia14.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio14"]["name"]= "evidencia 14.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio14"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio14"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }
       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio15']['type']."','".$_FILES['archio15']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio15"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio15"]["type"], $permitidos) && $_FILES["archio15"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia15.$identificador.'/';
                $archivo = $ruta.$_FILES["archio15"]["name"] = "evidencia 15.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio15"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio15']['type']."', size = '".$_FILES['archio15']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio15"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio15"]["type"], $permitidos) && $_FILES["archio15"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia15.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio15"]["name"]= "evidencia 15.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio15"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio15"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }
       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio16']['type']."','".$_FILES['archio16']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio16"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio16"]["type"], $permitidos) && $_FILES["archio16"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia16.$identificador.'/';
                $archivo = $ruta.$_FILES["archio16"]["name"] = "evidencia 16.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio16"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio16']['type']."', size = '".$_FILES['archio16']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio16"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio16"]["type"], $permitidos) && $_FILES["archio16"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia16.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio16"]["name"]= "evidencia 16.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio16"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio16"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

      /* $query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio17']['type']."','".$_FILES['archio17']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio17"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio17"]["type"], $permitidos) && $_FILES["archio17"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia17.$identificador.'/';
                $archivo = $ruta.$_FILES["archio17"]["name"] = "evidencia 17.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio17"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
           /* $update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio17']['type']."', size = '".$_FILES['archio17']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio17"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio17"]["type"], $permitidos) && $_FILES["archio17"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia17.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio17"]["name"]= "evidencia 17.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio17"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio17"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
       }

       /*$query1 = "INSERT INTO metasdocumento2022(tipo, size, identificador) 
       VALUES ('".$_FILES['archio18']['type']."','".$_FILES['archio18']['size']."', '$identificador')";
       mysqli_query($conexion2, $query1) or die ("Problemas al insertar1".mysqli_error($conexion2));*/
    
           if($_FILES["archio18"]["error"]>0){
                
            } else {
            
            $permitidos = array("application/pdf");
        
            
            if(in_array($_FILES["archio18"]["type"], $permitidos) && $_FILES["archio18"]["size"]){
                
                $ruta = 'archivos2022/'.$evidencia18.$identificador.'/';
                $archivo = $ruta.$_FILES["archio18"]["name"] = "evidencia 18.pdf";
                
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                if(!file_exists($archivo)){
                    
                    $resultado = @move_uploaded_file($_FILES["archio18"]["tmp_name"], $archivo);
                    
                    if($resultado){
                      
                        } else {
                        
                    }
                    
                    }
                
                } 
            
        
            }
            /*$update =" UPDATE metasdocumento2022 SET tipo = '".$_FILES['archio18']['type']."', size = '".$_FILES['archio18']['size']."' WHERE identificador = '$identificador' limit 1";
            mysqli_query($conexion2, $update);*/
            if($_FILES["archio18"]["error"]>0){
              
              } else {
              
              $permitidos = array("application/pdf");
            
              
              if(in_array($_FILES["archio18"]["type"], $permitidos) && $_FILES["archio18"]["size"]){
                  
                  $ruta = 'archivos2022/'.$evidencia18.$identificador.'/';
                  $archivo = $ruta.$_FILES["archio18"]["name"]= "evidencia 18.pdf";
                  
                  if(!file_exists($ruta)){
                      mkdir($ruta);
                  }
                  
                  if(file_exists($archivo)){
                      
                      $resultado = @move_uploaded_file($_FILES["archio18"]["tmp_name"], $archivo);
                      
                      if($resultado){
                       
                          } else {
                         
                      }
                      
                      }
                   
                   elseif(!file_exists($archivo)){
                   
                       $resultado = @move_uploaded_file($_FILES["archio18"]["tmp_name"], $archivo);
                       
                       if($resultado){
                         
                           } else {
                         
                       }
                       
                       } 
                 
                 } 
        }
     if($query != false){  
       echo "<script>alert('Datos Capturados.');
                    window.history.back();</script>";
}else{
    echo "<script>alert('Error inseperado, intente nuevamente');
                 window.history.back();</script>";
}

?>