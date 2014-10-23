<script type="text/javascript">
  $('document').ready(function(){
    $('.text-danger').hide();
    $('.second-pass, .first-pass').blur(function(){
      var first = $('.first-pass').val();
      var second = $('.second-pass').val();
      if(first!='' && second!='' && first!=second){
        $('.text-danger').show();
        $('.first-pass').parent().parent().addClass('hass-error');
        $('.second-pass').parent().parent().addClass('hass-error');
      }else{
        $('.text-danger').hide();
        $('.first-pass').parent().parent().removeClass('hass-error');
        $('.second-pass').parent().parent().removeClass('hass-error');
      }
    });
  });
</script>
<div class="users form well bs-component">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Crear Usuario'); ?>
        </legend>
        <h4>Datos Personales</h4>
        <div class="row">
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('name', array('type'=>'text','class'=>'form-control', 'label'=>'Nombre')); ?>
          </div>
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('last_name', array('type'=>'text','class'=>'form-control', 'label'=>'Apellido')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('phone', array('type'=>'text','class'=>'form-control', 'label'=>'Telefono')); ?>
          </div>
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('email', array('type'=>'text','class'=>'form-control', 'label'=>'E-mail')); ?>
          </div>
        </div>
        <h4>Datos de Usuario</h4>
        <div class="row">
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('username', array('type'=>'text','class'=>'form-control', 'label'=>'Usuario')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('password', array('type'=>'password','class'=>'form-control first-pass', 'label'=>'Clave', 'after'=>'<small class="text-danger">Las claves no coinciden</small>')); ?>
          </div>
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('password', array('type'=>'password','class'=>'form-control second-pass', 'label'=>'Confirmar clave')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group">
            <?php echo $this->Form->input('role', array('type'=>'select','class'=>'form-control', 'label'=>'Rol', 'options'=>$roles, 'default'=>null)); ?>
          </div>
        </div>
        <div style="clear:both;"></div>
        <button type="submit" class="btn btn-primary">Regitrar</button>
    </fieldset>
</form>    
</div>