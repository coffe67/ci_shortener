<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh sorry</strong> 
  <br><br>
  <?=  "Lo sentimos pero la direccion: ".$error." no ha sido encontrada en la web";?>
	<br><br>
	<a href="<?= base_url();?>">
		<button type="button" class="btn btn-primary">Inicio</button>		
	</a>
  	<a href="<?= base_url();?>/urlslist/index_list">
		<button type="button" class="btn btn-success">Lista de URLs</button>  		
  	</a>
</div>