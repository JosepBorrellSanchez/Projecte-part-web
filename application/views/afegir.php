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
<legend><h1>Inserta un nou producte</h1></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fullname">Nom del producte</label>
  <div class="controls">
    <input id="fullname" name="fullname" placeholder="Ex : napolitana" class="input-xlarge" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descripcio">Descripció</label>
  <div class="controls">                     
    <textarea id="descripcio" name="descripcio" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="price">Preu</label>
  <div class="controls">
	<input type="number" id="price" name="price" placeholder="Ex : 5.5" required="">
   
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

<!-- File Button 
<div class="control-group">
  <label class="control-label" for="foto">Imatge</label>
  <div class="controls">
    <input id="foto" name="foto" class="input-file" type="file">
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

