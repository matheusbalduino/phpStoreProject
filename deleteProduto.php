<?php
@include('ProdutoController.php');
@include('conexao.php');
    removeProduto($conexao, $_GET['id']);
    //header("Location: index.php");
    echo '<script>window.location.href = "index.php"</script>'
?>
