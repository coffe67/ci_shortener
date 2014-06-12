<section id="who">
   <h1>URL Shortener Codeigniter</h1>
  <?php echo validation_errors(); ?>
   <?php echo form_open('verifyurl',array('class'=>'form-horizontal')); ?>
    <fieldset>
    	 <div class="form-group">
     		<label for="inputUrl" class="col-lg-2 control-label">Escribe URL: </label>
      		<div class="col-lg-5">
       		 <input type="text" class="form-control" id="urllong" name="urllong" placeholder="URL">
      		</div>
    	</div>
    	<div class="form-group">
      		<div class="col-lg-10 col-lg-offset-2">
        		
        		<button type="submit" class="btn btn-primary">Convertir</button>
      		</div>
    	</div>
   	</fieldset>
   </form>
</section>

  



