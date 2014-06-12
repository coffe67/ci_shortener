<section class="jumbotron">
   <h1>URL Shortener - Datos Almacenados</h1>
  	<table class="table table-striped table-hover ">
  		<thead>
    		<tr class="active">
		      <th>URL #</th>
		      <th>Long URL (max 30)</th>
		      <th>Short URL</th>
		      <th>Visitas</th>
		      <th>Fecha de Creación</th>
    		</tr>
  		</thead>
  		<tbody>
  	<?php 
  		$cont=0;
  		foreach ($datos as $row){ 
  			if ($cont>0) {
  				if ($cont%2) {
  					$clase="info";
  				}else{
					$clase="success";
  				}
  	?>
				<tr class="<?= $clase; ?>" >
					<td class="center"><?php echo $row['id_url'];?></td>
					<td class="center">
						<a href="<?= $row['long_url']; ?>" alt="<?= $row['long_url']; ?>" >
							<?php echo substr($row['long_url'],0,35);?>
						</a>
					</td>
					<td class="center">
						<a href="<?php echo base_url()."".$row['alias_url'];?>" 
							alt="<?php echo base_url()."".$row['alias_url'];?>"
							>
							<?php echo base_url()."".$row['alias_url'];?>
						</a>
					</td>
					<td class="center"><?php echo $row['visitas_url'];?></td>
					<td class="center"><?php echo $row['creacion_url'];?></td>
				</tr>					
	<?php
			}
			$cont+=1;
		}
  	?>	
  	</table>
  	
</section>


