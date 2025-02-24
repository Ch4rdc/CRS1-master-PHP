<!DOCTYPE html>

<html lang="es" dir="ltr">
	<head>
		<meta charset="UTF-8"/>
		<title>Tickets Palace</title>
		<link rel="stylesheet" href="<?=base_url?>assets/css/dashboard.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<input type="checkbox" id="check"/>
		<!--header area start -->
		<header>
			<label for="check">
				<i class="fas fa-bars" id="sidebar_btn"></i>
			</label>	
			<div class="left_area">
                            <h3> Palace <span><a class="resorts" href="<?=base_url?>usuario/inicio"> Resorts </a></span> </h3>
			</div>
			<div class="right_area">
				<a href="<?=base_url?>usuario/logout" class="logout_btn">Logout</a>
			</div>
		</header>
		<!--header area end -->

		<!--<sidebar start -->
			<div class="sidebar">
				<center>
                                        <?php if(isset($_SESSION['super_admin'])) : ?>
                                        <h3> Administrador</h3>
                                        <?php elseif(isset($_SESSION['admin'])) : ?>
                                        <h3>Ingeniero</h3>
                                        <?php else :?>
                                        <h3>Usuario</h3>
                                        <?php endif;?>
					<img src="<?=base_url?>assets/img/ing.png" class="profile_image" alt="">
                                        <?php if(isset($_SESSION['identity'])):?>
					<h3><?=$_SESSION['identity']->nombre?></h3>
                                        <?php endif; ?>
				</center>
                                <?php if(isset($_SESSION['super_admin'])):?>
				<a href="<?=base_url?>usuario/dashboard"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
				<a href="<?=base_url?>ticket/gestionTicket"><i class="fas fa-cogs"></i><span>Administrar Tickets</span></a>
				<a href="<?=base_url?>usuario/registerIngeniero"><i class="fas fa-table"></i><span>Agregar Ingenieros</span></a>
                                <?php endif;?>
                                <?php if(isset($_SESSION['admin'])) :?>
                                <a href="<?=base_url?>ticket/solucionarTicket"><i class="fas fa-sliders-h"></i><span>Solucionar Ticket</span></a>
                                <?php endif;?>
                                <?php if(isset($_SESSION['user'])) :?>
                                <a href="<?=base_url?>ticket/verTicket"><i class="fas fa-table"></i><span>Mis tickets</span></a>
				<a href="<?=base_url?>ticket/generar"><i class="fas fa-th"></i><span>Generar ticket</span></a>
                                <?php endif; ?>
                               <?php #if(isset($_SESSION['identity'])) :?>
                              <!--  <a href=" <? base_url?>usuario/about"><i class="fas fa-info-circle"></i><span>acerca de</span></a> -->
                               <?php # endif; ?>
			<!--<sidebar end -->	
			</div>

			<div class="content">

