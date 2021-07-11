<?php
@require('head.php');
@include('conexao.php');
@include('ProdutoController.php');
?>
<body>
    <div class="container">
        <div class="navbar">
            <h1>Adicionar Produto</h1>
        </div>
        <?php
                $produto = findById($conexao, $_GET['id']);
                
        ?>
        <form action="adicionaProduto.php?id=<?=$produto['cd_prod']?>" method="post" >
            <input type="hidden" name="update" value="update"/>
            <div class="row">
                <div class="col-md-2" >
                    <label for="pnome">Nome</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" value="<?=$produto['nom_prod']?>" id="pnome" class="form-control">
                </div>
            </div>
            <div class="row" >
                <div class="col-md-2">
                    <label for="pnome">Descrição</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="desc" value="<?=$produto['ds_prod']?>" id="pnome" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="pnome">Valor</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="price" value="<?=$produto['num_price']?>" id="pnome" class="form-control">
                </div>
            </div>
            <button class="btn btn-primary" style="margin-top:20px">Enviar</button>
        </form>
    </div>
    
        
    
</body>
</html>