<?php
@require('head.php');
@include('ProdutoController.php');
@include('conexao.php');
@include('CategoriasController.php');
?>
<body>
    <div class="container">
    <?php @include('nav.php'); ?>
        <h1 class="text text-center">Produtos</h1>
        <table class="table table-hover" style="margin-top:20px;">
            <thead class="text text-center">
                <tr>
                    <th></th>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Preço</td>
                    <td>Categoria</td>
                    <td>Opções</td>

                </tr>
            </thead>
            <tbody class="text text-center">
                <?php 
                $produtos = buscaProduto($conexao);
                foreach ($produtos as $produto){
                ?>
                 <tr>
                    <th></th>
                    <td><?= $produto['nom_prod'] ?></td>
                    <td><?= $produto['ds_prod'] ?></td>
                    <td><?= $produto['num_price'] ?></td>
                    <td><?= $produto['tipo'] ?></td>
                    <td class="text text-center" >
                        <a class="btn btn-success" href="editar.php?id=<?=$produto['cd_prod']?> ">Editar</a>
                        <a class="btn btn-danger" href="deleteProduto.php?id=<?=$produto['cd_prod']?>">Apagar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
       
    </div>
</body>
<?php
@include('footer.php');
?>
</html>