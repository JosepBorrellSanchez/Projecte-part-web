<? echo form_open_multipart('Productes/DoUpload');?>
<p> 
<label for="file"> Selecciona un fitxer</label>
 <p>
	  <input type="file" name="cipote" value="Envia" size="50" /></p>
	  <p><button type="submit" class="btn btn-success" name="foto">Acceptar</button></p>
	  <?php echo form_close();?> <?php if($this->session->flashdata('success_upload'));?>
	  <div> <?php echo $this->session->flashdata('success_upload');?> </div>
