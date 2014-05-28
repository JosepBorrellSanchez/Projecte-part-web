
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	 <?php include("capçalera.php"); ?>
   <title>Login</title>
 </head>
 <body>
   <h3>Has d'entrar amb el teu usuari i contrasenya</h3>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Nom d'usuari:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Contrasenya:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login" class="btn btn-success"/>
   </form>
 </body>
</html>

