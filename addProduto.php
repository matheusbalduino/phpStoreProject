<?php
@require('head.php');
@include('CategoriasController.php');
@include("conexao.php");

?>
<body>
    <div class="container">
    <?php @include('nav.php'); ?>
        <div class="text text-center">
            <h1>Adicionar Produto</h1>
        </div>
        <?php
                $nome= "conectado";
                $sobrenome = "conectou";
        ?>
        <form action="adicionaProduto.php" method="post" >
            <input type="hidden" name="update" value="adiciona"/>
            <div class="row" style="margin-top:50px">
                <div class="col-md-2" >
                    <label for="pnome">Nome</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" id="pnome" class="form-control"/>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-2">
                    <label for="pnome">Descrição</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="desc" id="pnome" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="pnome">Valor</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="price" id="pnome" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="pnome">Tipo Produto</label>
                </div>
                <div class="col-md-6">
                    <select name="categoria" class="form-control">
                        <option value=""></option>
                        <?php
                        $categorias = getAllCategories($conexao);
                        foreach($categorias as $categoria){
                        ?>
                            <option value="<?=$categoria['id']?>"><?=$categoria['tipo']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <button class="btn btn-primary" style="margin-top:20px; width:300px;">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    
        
    
</body>
</html>