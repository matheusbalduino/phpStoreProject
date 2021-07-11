<?php
@require('head.php');
@include('conexao.php');
@include('ProdutoController.php');
@include('CategoriasController.php');
?>
<body>
<?php @include('nav.php'); ?>
    <?php @include('nav.php'); ?>
    <?php 
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $tipoId = $_POST['categoria'];
    ?>

    <div class="container">
    <?php 
    if($_POST['update'] != "update"){
    ?>
        <h1 class="text-center">
            Produtos
        </h1>

        <?php

            if(addProduto($conexao, $name, $desc, $price, $tipoId))
            {
        ?>
        <!-- exibe tabela -->
        <table class="table table-light" style="margin-top:20px">
            <thead>
            <tr>
                <th>
                    <td><strong>Nome</strong></td>
                    <td><strong>Descrição</strong></td>
                    <td><strong>Preço</strong></td>  
                    <td><strong>Tipo</strong></td>  
                </th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                    <td><?=$name?></td>
                    <td><?=$desc?></td>
                    <td><?=$price?></td>
                    <td><?php echo getCatById($conexao, $tipoId)['tipo'] ?> </td>
                    </th>
                </tr>
            </tbody>
        </table>
        <!-- fim do if addProduto -->
        <?php 
        } else {
        ?>
        <!-- exibe recado  -->
            <h3 style="margin-top:20px" class="text text-center text-danger">Produto Não adicionado a lista</h3>
        <?php 
        }
        ?>
        <!-- fim do else  -->
    <?php
    }else{
    ?>
        <h1 class="text-center">
            Produtos
        </h1>
        <?php
        $id = $_GET['id'];
        if(updateProduto($conexao,$id, $name, $desc, $price))
        {
        ?>
        <!-- exibe tabela -->
        <table class="table table-light" style="margin-top:20px">
        <thead>
        <tr>
            <th>
                <td><strong>Nome</strong></td>
                <td><strong>Descrição</strong></td>
                <td><strong>Preço</strong></td>    
            </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                <td><?=$name?></td>
                <td><?=$desc?></td>
                <td><?=$price?></td>
                </th>
            </tr>
        </tbody>
        </table>
        <!-- fim do if addProduto -->
        <?php 
        } else {
        ?>
        <!-- exibe recado  -->
        <h3 style="margin-top:20px" class="text text-center text-danger">Produto Não Atualizado</h3>
        <?php 
        }
        ?>
        <!-- fim do else  -->
    <?php
    }
    ?>
    </div>

</body>
</html>