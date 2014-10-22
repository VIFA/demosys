<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sistema Demografico');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->script('jquery-1.11.1.js');
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('bootstrap.min.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar navbar-inverse">
 				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="#">DemoSys</a>
				  </div>
				  <div class="navbar-collapse collapse navbar-responsive-collapse">
				    <ul class="nav navbar-nav">
				      <li><a href="#">Barrios</a></li>
				      <li><a href="#">Manzanas</a></li>
				      <li><a href="#">Grupos</a></li>
				    </ul>
				    <form class="navbar-form navbar-left">
				      <input type="text" class="form-control col-lg-8" placeholder="Buscar">
				    </form>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#">Perfil</a></li>
				      <li><a href="#">Salir</a></li>
				    </ul>
				</div>
			</div>
		</div>
		<div id="content">
			<div class='col-xs-12 col-md-9'>
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<div class='col-xs-12 col-md-3'>

				---
				----

				----



				----

				----
			</div>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>
