<?php require_once ('head.php'); ?>
<a href="index.php" class="w3-display-topmiddle w3-padding" style="text-decoration:none; ">
<button class="w3-button w3-red w3-border w3-border-red w3-round-large">CANCELAR EXCLUSÃO</button>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-indigo w3-round-large w3-margin">EXLUIR - ID: <?php echo " ".$_GET['id']?> </h1>
<form action="excluirAction.php" class="w3-container w" method='post'>
<input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
<br>
<label class="w3-text-indigo" style="font-weight: bold;">Nome</label>
<input name="txtNome" class="w3-input w3-grey w3-border" disabled value="<?php echo $_GET['nome']?>">
<br>
<label class="w3-text-indigo" style="font-weight: bold;">Preco</label>
<input name="txtPreco" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['preco']?>">
<br>
<label class="w3-text-indigo" style="fontweight:bold;">Quantidade</label>
<input name="txtQtd" class="w3-input w3-gray w3-border"disabled value="<?php echo $_GET['quantidade']?>">
<br>
<button name="btnExcuir" class="w3-button w3-indigo w3-cell w3-roundlarge w3-right">
<i class="w3-xxlarge fa fa-check"></i><br>Confirmar Exclusão</button>
</form>
</div>
<?php require_once ('footer.php'); ?>