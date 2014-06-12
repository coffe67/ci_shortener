<section  class="jumbotron">
	<h2>URL Procesada</h2>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">Long URL</h3>
	  </div>
	  <div class="panel-body">
	   <?= $long_url; ?>
	  </div>
	</div>

	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Short URL</h3>
	  </div>
	  <div class="panel-body">
	    <?= base_url()."".$alias_url; ?>
	  </div>
	</div>
</section>
