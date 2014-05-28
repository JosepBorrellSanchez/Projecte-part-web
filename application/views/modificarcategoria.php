<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head>
		<title>Agregar productes</title>
		<?php include("capçalera.php"); ?>
	</head>
	<body>

<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend><h1>Modificar una categoria de productes</h1></legend>
<h3>Indica el nom nou i descripcio</h3>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Nom de la categoria</label>
  <div class="controls">
    <input id="name" name="name" placeholder="Ex : Cerveses" class="input-xlarge" required="" type="text">
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descripcio">Descripció</label>
  <div class="controls">                     
    <textarea id="descripcio" name="descripcio"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success" type="Submit">Modificar</button>
    <button id="button2id" name="button2id" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>

