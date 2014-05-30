<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head>
		<title>Modificar productes</title>
		<?php include("capçalera.php"); ?>
		<style>
				form
				{
					margin-left: 30%;
					}
		</style>
	</head>
	<body>

<form class="form-horizontal" method="post">

<!-- Form Name -->
<legend><h1>Modificar el producte</h1></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fullname">Nom del producte</label>
  <div class="controls">
    <input id="fullname" name="fullname" placeholder="Ex : napolitana" required="" class="input-xlarge">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descripcio">Descripció</label>
  <div class="controls">                     
    <textarea id="descripcio" name="descripcio" required="" class="input-xlarge"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="price">Preu</label>
  <div class="controls">
	<input id="price" name="price" placeholder="Ex : 5.5" required=""  min=1 class="input-xlarge">
	<span class="alert alert-warning">Compte, només numeros</span>
  </div>
</div>



<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="categoria">Categoria del producte</label>
  <div class="controls">
    <select id="categoria" name="categoria" class="input-xlarge">
      <?php foreach($query->result() as $index) {?> 
				<option value="<?php echo $index -> term_taxonomy_id; ?>"name="categoria"><?php echo $index -> name; ?></option>
			<?php  } ?>
    </select>
  </div>
</div>


<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success" type="Submit">Actualitzar</button>
    <button id="button2id" name="button2id" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</form>

</body>
</html>

