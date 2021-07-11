<?php 
    function getAllCategories($conexao){
        $result = mysqli_query($conexao, "select * from categorias");
        $categorias = [];
        while($data = mysqli_fetch_assoc($result)){
            array_push($categorias, $data);
        }

        return $categorias;
    }
    function getCatById($conexao, $id){
        $data = mysqli_query($conexao, "select tipo from categorias where id = '$id'");
        $result = mysqli_fetch_assoc($data);
        return $result;
    }
?>