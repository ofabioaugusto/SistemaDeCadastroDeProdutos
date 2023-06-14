<?php require_once ('head.php'); ?>
<a href="index.php" class="w3-display-topleft ">
<i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topmiddle">
<h1 class="w3-center w3-indigo w3-round-large w3-margin">Cadastro de Produtos</h1>
<form action="cadastroAction.php" class="w3-container" method='post'>
<label class="w3-text-indigo" style="fontweight:bold;">Código</label>
<input name="txtID" class="w3-input w3-grey w3-border" disabled><br>
<label class="w3-text-indigo" style="fontweight:bold;">Nome</label>
<input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-indigo" style="fontweight:bold;">Preço</label>
<input name="txtPreco" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-indigo" style="fontweight:bold;">Quantidade</label>
<input name="txtQtd" class="w3-input w3-light-grey w3-border"><br>
<button name="btnAdd" class="w3-button w3-indigo w3-cell w3-roundlarge w3-right w3-margin-right">
<i class="w3-xxlarge fa fa-plus-square"></i><br>Adicionar</button>
</form>
</div>
<?php require_once ('footer.php'); ?>