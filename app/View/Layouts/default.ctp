<?php
/**
 *
 * PHP 5
 *
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery-1.9.1');

		
	?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
 		<div class="navbar-inner">
 			<div class="container">
 				<a class="brand" href="#">Fabrica</a>
 				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="#">Kids for Kids</a></li>
						<li><a href="#">Events/Occasions</a></li>
						<li><a href="#">Educational Models</a></li>
						<li><a href="#">Corporate Gifts</a></li>
					</ul>
					<ul class="nav pull-right">
					<li><a href="login.php">Register/Login</a></li>
					</ul>
				</div>
 			</div>
 		</div>
 	</div>
	
</body>
</html>
