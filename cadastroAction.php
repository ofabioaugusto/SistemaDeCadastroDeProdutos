<?php require_once ('head.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php require_once ('config.php'); ?>
<?php
$sql = "INSERT INTO produto (nome, preco, quantidade)
VALUES ('".$_POST['txtNome']."', '".$_POST['txtPreco']."', '".$_POST['txtQtd']."')";
try{
$resultado = $conecta->query($sql);
echo '
<a href="index.php">
<h1 class="w3-button w3-indigo">Produto Salvo com sucesso! </h1>
</a>
';
}catch(PDOException $e){
echo '
<a href="index.php">
<h1 class="w3-button w3-indigo">ERRO! </h1>
</a>
';
}
?>
</div>
<?php require_once ('footer.php'); ?>