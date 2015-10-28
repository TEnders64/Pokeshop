<?php $this->load->view('partials/admin_header'); ?>

	<div class="container">
		<div class="row">
		<div class="col-md-3 col-md-offset-2">
			<h2>Edit Pokemon: <?=$pokemon['id']?></h2>
			<h1><?=$pokemon['name']?></h1>
                <img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/<?= sprintf("%03d", $pokemon['id']) ?>.png" alt="<?=$pokemon['name']?> picture" >
            </div>

        <div class="col-md-2">
            <form class="form-horizontal" action="/admins/update/<?= $pokemon['id'] ?>" method="post">  
	       		<div class="form-group">
	    				<label for="description" class="col-sm-2 control-label">Description</label>
					<textarea  class="form-control col-sm-offset-2" name="description" rows="4"><?=$pokemon['description']?></textarea>
	    		</div> 
	    		<div class="form-group">
	    			<label for="height" class="col-sm-2 control-label">Height</label>
	    			<div class="col-sm-8 col-sm-offset-2">
						<input type="number" name="height" value="<?=$pokemon['height']?>">
	      			</div>
	    		</div> 
				<div class="form-group">
	    			<label for="weight" class="col-sm-2 control-label">Weight</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="weight" value="<?=$pokemon['weight']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="speed" class="col-sm-2 control-label">Speed</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="speed" value="<?=$pokemon['speed']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="exp" class="col-sm-2 control-label">Exp.</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="exp" value="<?=$pokemon['exp']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="attack" class="col-sm-2 control-label">Attack</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="attack" value="<?=$pokemon['attack']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="defense" class="col-sm-2 control-label">Defense</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="defense" value="<?=$pokemon['defense']?>">
	    			</div>
	    		</div>	
				<div class="form-group">
	    			<label for="abilities" class="col-sm-2 control-label">Abilities</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="text" name="abilities" value="<?=$pokemon['abilities']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="types" class="col-sm-2 control-label">Type(s)</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="text" name="types" value="<?=$pokemon['types']?>">
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="price" class="col-sm-2 control-label">Price</label>
	    			<div class="col-sm-8 col-sm-offset-2">
	    				<input type="number" name="price" value="<?=$pokemon['price']?>">
	    			</div>
	    		</div>
				<input type="submit" value="SAVE FOREVER">
			</form>
		</div>
</div> <!-- end container -->

</body><!-- end body -->
</html>
