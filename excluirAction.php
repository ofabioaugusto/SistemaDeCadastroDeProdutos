<?php require_once ('head.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php require_once ('config.php'); ?>
<?php
try{
$sql = $conecta-
>prepare("DELETE FROM produto WHERE idproduto = ?;");
$sql->bindParam(1,$_POST['txtID']);
$sql->execute();
echo '
<a href="listar.php">
<h1 class="w3-button w3-indigo">Produto Excluido com sucesso! </h1>
</a>
';
}catch(PDOException $e){
echo '
<a href="listar.php">
<h1 class="w3-button w3-indigo">ERRO! </h1>
</a>
';
}
?>
</div>
<?php require_once ('footer.php'); ?>