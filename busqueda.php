<?php
        $dbhost = "localhost";
    $dbuser = "pma";
    $dbpass = "pmapass";
        $mysqli = new mysqli($dbhost,$dbuser,$dbpass,"Tienda_Software");
        $result;
        if(isset($_POST['parametro']))
        {
                $parametro=trim($_POST['parametro']);
                if($parametro!="")
                {
                        $result = $mysqli->query("SELECT * FROM productos WHERE Nombre LIKE '%$parametro%' or Id_Producto LIKE '%$parametro%';");
                        $resultados = array();
                        while ($row_errs = $result->fetch_array()) 
                        { 
                                $resultados[]= $row_errs; 
                        }
                        ?>
						
						
						
                        <table class="barrabusqueda" >
                        <?php
                        foreach($resultados as $post):
                                ?>
								
                                <tr>
										<td>
										<a href="./producto/product_info.php?id=<?php echo $post['Id_Producto']?>"><img <?php echo 'src=".'.$post["Caratula"].'"' ?> width="30" height="30"></a>

										</td>
                                        <td>
                                                <a href="./producto/product_info.php?id=<?php echo $post['Id_Producto']?>" style="background: transparent;"><?php echo $post['Nombre']." "; ?></a>
                                        </td>
                                        <td>
                                                <div style="background: transparent;"><?php echo $post['Precio']." Euros"; ?></div>
                                        </td>
                                </tr>
								
                                <?php
                        endforeach;
                        ?>
                        </table>
						
						
                        <?php
                }
        }
?>