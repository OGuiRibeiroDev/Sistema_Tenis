<?php

require "conexao.php";

        $array2 = array();

        
        $sql = "SELECT * from modelo";
        $query = mysqli_query($conexao, $sql);
    
        while($array = mysqli_fetch_array($query)){


            $id = $array['id'];
            $modelo = $array['modelo'];

            array_push($array2, "$modelo");
        }

        file_put_contents("teste.txt", json_encode($array2));

        echo json_encode($array2);

// echo json_encode(array(
//     "Nike SB",
//     "Court Vision",
//     "Jordan"
// ));

?>