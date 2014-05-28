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
<legend><h1>Insertar una categoria de productes</h1></legend>

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

<!-- Text input
<div class="control-group">
  <label class="control-label" for="slug">Slug</label>
  <!--<div class="controls">
    <input id="slug" name="slug" placeholder="Ex : una-mica-de-tot" class="input-medium" type="text">
    <p class="help-block">L'slug es la versió amigable de la URL de nom. Sol estar en minúscules i conte només lletres, números i guions.</p>
  </div>
</div>-->

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success" type="Submit">Insertar</button>
    <button id="button2id" name="button2id" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>

