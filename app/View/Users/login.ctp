<style type="text/css">
    .users{
        position: absolute;
        top: 50%; 
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .form{
        padding: 5%;
    }
</style>
<div class="users form well bs-component">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Inicio de sesion'); ?>
        </legend>
        <div class="form-group">
        	<?php echo $this->Form->input('username', array('type'=>'text','class'=>'form-control', 'label'=>'Usuario')); ?>
    	</div>
        
        <div class="form-group">
		    <?php
		    	echo $this->Form->input('password', array('type'=>'password',  'label'=>'Clave' , 'class'=>'form-control'));
			?>
    	</div>
        <?php $msg = $this->Session->flash();
            if(!empty($msg)){  ?>                
                <div class="alert alert-warning" role="alert"><?php echo $msg; ?></div>                    
        <?php } ?>
    	<div class="form-group">
		    <div class="col-lg-10 col-lg-offset-3">
		    	<button type="submit" class="btn btn-primary">Entrar</button>
		    </div>
    	</div>
    </fieldset>
</form>    
</div>