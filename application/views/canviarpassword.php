<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	 <?php include("capçalera.php"); ?>
   <title>Login</title>
   <style>
			body {
				background-image:url("../imatges/fondo.jpg");
				}
				form
				{
					margin-left: 30%;
					}
		</style>
 </head>
 <body>
   <?php echo validation_errors(); ?>
   <?php echo form_open('canviarpassword'); ?>
   <h3>Per seguritat, tens que introduir les teves dades</h3>
     <label for="username">Nom d'usuari:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Paraula de pas:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <label for="password">Paraula de pas nova:</label>
     <input type="password" size="20" id="passowrdnova" name="passwordnova"/>
     <br/>
     <input type="submit" value="Fer el canvi" class="btn btn-success"/>
   </form>
 </body>
</html>

