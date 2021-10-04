<?php
    class sesion_code 
    {
        public function ShowImage($bd){
            include "../admin/conexion.php";

            $consulta = "SELECT * FROM $bd WHERE id_modelo=1";
            $ejecutar = mysqli_query($conn,$consulta);
            // $array = mysqli_fetch_assoc($ejecutar);

            $contar = "SELECT count(*) total FROM $bd WHERE id_modelo=1" ;
            $query = mysqli_query($conn,$contar);
            $numero = mysqli_fetch_assoc($query);
            
            ?>
                <div class="contenedor_fotos_index">

            <?php

  
            while ($row = mysqli_fetch_assoc($ejecutar)) {
                ?>
                 <div class="fotos_index">
                    <img src="<?php echo $row['url']; ?>" alt="aa" class="todas_imagenes">
                </div> 
                <?php
            }  
            ?>
                </div>
            <?php      
        }

        public function ShowImageIndex($bd, $titulo, $enlace){
 
        include "admin/conexion.php";
        $consulta = "SELECT * FROM $bd  ORDER BY  id_sesion DESC limit 5" ;
        $query = mysqli_query($conn,$consulta);
        
        ?>      <section class='pictures_index'> 
                
                    <h1><?php echo $titulo; ?></h1>
                        <?php               
                            while ($row = mysqli_fetch_assoc($query)){                  
                        ?>  
                            <div class='pictures_section'>   
                                <img src="<?php echo $row['url']; ?>" alt="aa">
                                <p><?php echo $row['nombre']; ?></p>
                                
                            </div>
                    <?php } ?>  
                    <!-- <li><a href="<?php //echo $enlace ?>">Ver Todo</a></li>  -->
                    <a href="<?php echo $enlace ?>">Ver Todo <i class="fas fa-eye"></i></a>   
                </section> 
        <?php    
        }
}
        ?>