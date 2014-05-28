<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>LLista</title>
		<?php include("capçalera.php"); ?>
		
		<!-- table tools -->		
<script type="text/javascript">
	$(document).ready( function () {
		var oTable = $('#25').dataTable( {
					"sScrollY": "300px",
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"bPaginate": true,
					"sDom":'TCRlfrtip',
					"oTableTools": {
            "sSwfPath": "<?php echo base_url('assets/media/swf/copy_csv_xls_pdf.swf');?>"
        }
} );
new FixedColumns( oTable );
});
</script>

			<!-- DataTables-->
			<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<!--Table Tools-->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/media/js/ZeroClipboard.js')?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/media/js/TableTools.js')?>"></script>
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url('assets/media/css/TableTools.css');?>";
			@import "<?php echo base_url('assets/media/css/TableTools_JUI.css');?>";
		</style>


<!-- colreorder-->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/ColReorder.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/css/ColReorder.css"></script>

<!-- fixed header -->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/FixedHeader.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/FixedHeader.min.js"></script>


<!-- colvis -->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/ColVis.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/ColVis.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>/assets/media/css/ColVis.css"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>/assets/media/css/ColVisAlt.css"></script>

<!-- fixed columns-->
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/FixedColumns.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>assets/media/js/FixedColumns.min.js"></script> 



<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	 <script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#25').dataTable();
		} );
	</script>
	

	</head>
	<body>
		<p>Aquesta es la taula de categories</p>
		<a href="crear"><button class="btn btn-success" type="button">Crear categoria</button></a>
		<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
		<thead>
		<tr>
			
				<th width="6%"><b>ID</b></th>
				<th width="25%"><b>Nom</b></th>
				<th width="25%"><b>Descripcio</b></th>
				<th width="10%"><b>Productes</b></th>
				<th width="14%"><b>Link</b></th>
				<th width="20%"><b>Accions</b></th>
				
		</tr>
		</thead>
		<tbody>
 <?php foreach($query->result() as $index) {?> 
			<td> <?php echo $index -> term_id; ?></td>
			<td> <?php echo $index -> name; ?></td>
			<td> <?php echo $index -> description; ?></td>
			<td> <?php echo $index -> count; ?></td>
			<td> <a href='http://josepborrellweb.esy.es/wordpress/product-category/<?php echo $index -> slug; ?>'>Link a la categoria</td>
			<td>
				<a href='modificar/<?php echo $index->term_id;?>'><button class="btn btn-primary" type="button">Modificar</button></a>
				<a href='borrar/<?php echo $index->term_id; ?>'><button class="btn btn-danger" type="button">Eliminar</button></a></td>
			<?php echo "</tr>"; } ?> 
			
		</tbody>
</table>
</body>
</html>



<?php  ?>
