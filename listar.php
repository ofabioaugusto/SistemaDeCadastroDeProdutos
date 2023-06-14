<?php require_once ('head.php'); ?>
<a href="index.php" class="w3-display-topleft">
<i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>
</a>
<?php require_once ('config.php'); ?>
<?php
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $username, $password);
$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '
<div class="w3-container w3-paddingw3-content w3-half w3-margin w3-display-topmiddle">
<h1 class="w3-center w3-indigo w3-round-large w3-margin">Lista de Produtos</h1>
<table class="w3-table-all w3-centered w3-text-black">
<thead>
<tr class="w3-center w3-indigo">
<th>Código</th>
<th>Nome</th>
<th>Preço</th>
<th>Quantidade</th>
<th>Excluir</th>
<th>Atualizar</th>
</tr>
<thead>
';
$sql = "SELECT * FROM produto" ;
$resultado = $conecta->query($sql);
if($resultado != null)
foreach($resultado as $linha) {
echo '<tr>';
echo '<td>'.$linha['idproduto'].'</td>';
echo '<td>'.$linha['nome'].'</td>';
echo '<td>'.$linha['preco'].'</td>';
echo '<td>'.$linha['quantidade'].'</td>';
echo '<td><a href="excluir.php?id='.$linha['idproduto'].'& nome='.$linha['nome'].'&preco='.$linha['preco'].'&quantidade='.$linha['quantidade'].'"><i class="fa fa-user-times w3-large w3-text-indigo"></i> </a></td>';
echo '<td><a href="atualizar.php?id='.$linha['idproduto'].'&nome='.$linha['nome'].'&preco='.$linha['preco'].'&quantidade='.$linha['quantidade'].'"><i class="fa fa-refresh w3-large w3-text-indigo"></i> </a></td>';
echo '</tr>';
}
echo '
</table>
</div>';
}catch(PDOException $e){
echo "falha ao conectar: ". $e->getMessage();
}
?>
</div>
<?php require_once ('footer.php'); ?>