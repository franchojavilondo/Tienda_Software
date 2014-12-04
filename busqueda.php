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
                        <table>
                        <?php
                        foreach($resultados as $post):
                                ?>
                                <tr>
                                        <td>
                                                <?php echo $post['Nombre'].": "; ?>
                                        </td>
                                        <td>
                                                <?php echo $post['Precio']." Euros"; ?>
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