<?php
    function addProduto($conexao, $name, $desc, $price, $tipoId){
        
        if(!$name || !$desc || !$price || !$tipoId) return;

        $query = "insert into produtos (nom_prod, ds_prod, num_price, tipoId) values ('$name','$desc', '$price', '$tipoId')";
        $adicionado = mysqli_query($conexao, $query);
        return $adicionado;
        
    }

    function updateProduto($conexao, $id, $name, $desc, $price){
        $query = "update produtos 
                  set nom_prod = '$name', 
                  ds_prod='$desc', 
                  num_price='$price'
                  where cd_prod = '$id'";
        $updated = mysqli_query($conexao, $query);
        return $updated;
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where cd_prod = '$id'";
        $removed = mysqli_query($conexao, $query);
        return $removed;
    }

    function findById($conexao, $id){
        $query = "select * from produtos where cd_prod = '$id'";
        $search = mysqli_query($conexao, $query);
        $produto = mysqli_fetch_assoc($search);
        return $produto;
    }

    function buscaProduto($conexao){
        $results = mysqli_query($conexao, "select p.*, c.tipo
                                           from produtos p
                                           inner join categorias c on c.id = p.tipoId");
        $produtos = []; 
        while($data = mysqli_fetch_assoc($results)){
            array_push($produtos, $data);
        }
        return $produtos;
    }
?>