<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

// Content Security Policy
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self'; connect-src 'self'; frame-ancestors 'none';");

// X-Content-Type-Options
header("X-Content-Type-Options: nosniff");


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/1675721080.main.css">
		<link rel="stylesheet" href="assets/1675721080.bim-registro.css">
		<link rel="stylesheet" href="assets/fonts.css">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
		<script src="assets/js/main.js"></script>
		
		
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<script type="text/javascript" src="https://saas.bimstreamer.com/bim-template"></script>
		<title>BIM - Vinilit</title>
	</head>
	<body class="registro">
	<header id="bim-buttons">
		<div class="d-none d-md-block">
        <header class="header d-block container-fluid position-absolute">
				<div class="row top-bar">
					<div class="col-lg-6 col-12">
						<div class="div-logo">
							<a href="https://www.vinilit.cl/">
							<img class="logo" src="https://www.vinilit.cl/wp-content/uploads/2022/03/logo-vinilit-white.svg" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-6">
					<div class="div-items-top justify-content-end">
						<div id="bim-items">
						</div>
						</div>
					</div>
				</div>
				<div class="main-wrap">
					<div class="container pd-20">
						<nav class="navbar navbar-expand-lg  justify-content-center">
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="logo-menu">
									<a href="https://www.vinilit.cl/">
									<img  class="logo" src="https://www.vinilit.cl/wp-content/uploads/2022/03/logo-vinilit-white.svg" alt="">
									</a>
								</li>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link">
										<span class="menu-text">Quienes somos</span>
										<span class="ast-icon icon-arrow">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<ul class="dropdown-menu submenu">
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/aliaxis">Aliaxis</a></li>
										<li class="nav-item dropdown nav-item-2">
											<a class="nav-link">
												<span class="menu-text">Vinilit by aliaxis</span>
												<span class="ast-icon icon-arrow justify-content-end">
													<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
														<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
													</svg>
												</span>
											</a>
											<ul class="dropdown-menu submenu2 left_menu">
												<li><a class="nav-link" href="https://www.vinilit.cl/quienes-somos">Quiénes somos</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/valores">Valores</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/sustentabilidad">Sustentabilidad</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/certificaciones">Asociaciones</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/certificaciones">Certificaciones</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/responsabilidad-social">Responsabilidad social</a></li>
												<li><a class="nav-link" href="https://www.vinilit.cl/acciones">Acciones</a></li>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/crecimiento-con-proposito">Crecimiento con propósito</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<span class="menu-text">Segmentos</span>
										<span class="ast-icon icon-arrow">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<ul class="dropdown-menu submenu">
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/edificacion">Edificación</a></li>
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/agricultura">Agricultura</a></li>
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/infraestructura">Infraestructura</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="https://www.vinilit.cl/distribuidores" class="nav-link">
									<span class="menu-text">Distribuidores</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<span class="menu-text">Academia Vinilit</span>
										<span class="ast-icon icon-arrow">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<ul class="dropdown-menu submenu">
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/webinars">Webinars</a></li>
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/e-learnings">E-learnings</a></li>
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/articulos-tecnicos">Artículos técnicos</a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/academia-vinilit">Academia</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="https://www.vinilit.cl/contacto" class="nav-link">
										<span class="menu-text">Noticias</span>
										<span class="ast-icon icon-arrow">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<ul class="dropdown-menu submenu">
										<li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/casos-de-exito">Casos de éxito</a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://www.vinilit.cl/alianzas">Alianzas</a></li>
                                        <li class="nav-item"><a class="nav-link" href="hhttps://www.vinilit.cl/ferias-y-eventos">Ferias y eventos</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<!--  menu mobile---->
		<div class="d-block d-md-none">
			<nav class="navbar">
				<div class="container">
					<a href="https://www.vinilit.cl/" class="navbar-brand">
					<img class="logo" src="https://www.vinilit.cl/wp-content/uploads/2022/03/logo-vinilit.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<a href="https://www.vinilit.cl/" class="navbar-brand">
							<img class="logo-white" src="https://www.vinilit.cl/wp-content/uploads/2022/03/logo-vinilit-white.svg" alt="">
							</a>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="collapse" href="#collapseQuienesSomos" role="button" aria-expanded="false" aria-controls="collapseQuienesSomos">
										<span class="menu-text">Quienes somos</span>
										<span class="ast-icon icon-arrow">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<div class="collapse" id="collapseQuienesSomos">
										<ul>
											<li class="nav-item">
												<a class="nav-link" href="https://www.vinilit.cl/aliaxis">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Aliaxis
												</a>
											</li>
											<li class="nav-item nav-item-2">
												<a class="nav-link" data-bs-toggle="collapse" href="#collapseVinilit" role="button" aria-expanded="false" aria-controls="collapseVinilit">
													<span class="menu-text">
														<span class="ast-icon icon-arrow justify-content-end">
															<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
															</svg>
														</span>
														Vinilit by aliaxis
													</span>
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
												</a>
												<div class="collapse collapseHorizontal" id="collapseVinilit">
													<ul>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/quienes-somos">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Quiénes somos
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/valores">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Valores
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/sustentabilidad">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Sustentabilidad
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/certificaciones">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Asociaciones
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/certificaciones">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Certificaciones
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/responsabilidad-social">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Responsabilidad social
															</a>
														</li>
														<li>
															<a class="nav-link" href="https://www.vinilit.cl/acciones">
																<span class="ast-icon icon-arrow justify-content-end">
																	<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
																		<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
																	</svg>
																</span>
																Acciones
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="https://www.vinilit.cl/crecimiento-con-proposito">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Crecimiento con propósito
												</a>
											</li>
										</ul>
									</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="collapse" href="#collapseSegmentos" role="button" aria-expanded="false" aria-controls="collapseSegmentos">
										<span class="menu-text"> Segmentos</span>
										<span class="ast-icon icon-arrow justify-content-end">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<div class="collapse collapseHorizontal" id="collapseSegmentos">
										<ul>
											<li>
												<a class="nav-link" href="https://www.vinilit.cl/edificacion">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Edificación
												</a>
											</li>
											<li>
												<a class="nav-link" href="https://www.vinilit.cl/agricultura">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Agricultura
												</a>
											</li>
											<li>
												<a class="nav-link" href="https://www.vinilit.cl/infraestructura">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Infraestructura
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a href="https://www.vinilit.cl/distribuidores" class="nav-link">
									<span class="menu-text">Distribuidores</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="collapse" href="#collapseAcademia" role="button" aria-expanded="false" aria-controls="collapseAcademia">
										<span class="menu-text">Academia Vinilit</span>
										<span class="ast-icon icon-arrow justify-content-end">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<div class="collapse collapseHorizontal" id="collapseAcademia">
										<ul>
											<li>
												<a class="nav-link" href="https://www.vinilit.cl/webinars">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Webinars
												</a>
											</li>
                                            <li>
												<a class="nav-link" href="https://www.vinilit.cl/e-learnings">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													E-learnigns
												</a>
											</li>
                                            <li>
												<a class="nav-link" href="https://www.vinilit.cl/articulos-tecnicos">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Artículos técnicos
												</a>
											</li>
                                            <li>
												<a class="nav-link" href="https://www.vinilit.cl/academia-vinilit">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Academia
												</a>
											</li>
										</ul>
									</div>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="collapse" href="#collapseNoticias" role="button" aria-expanded="false" aria-controls="collapseNoticias">
										<span class="menu-text">Noticias</span>
										<span class="ast-icon icon-arrow justify-content-end">
											<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
												<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
											</svg>
										</span>
									</a>
									<div class="collapse collapseHorizontal" id="collapseNoticias">
										<ul>
											<li>
												<a class="nav-link" href="https://www.vinilit.cl/casos-de-exito">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Casos de éxito
												</a>
											</li>
                                            <li>
												<a class="nav-link" href="https://www.vinilit.cl/alianzas">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Alianzas
												</a>
											</li>
                                            <li>
												<a class="nav-link" href="https://www.vinilit.cl/ferias-y-eventos">
													<span class="ast-icon icon-arrow justify-content-end">
														<svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
															<path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
														</svg>
													</span>
													Ferias y eventos
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
        <div class="container-fluid p-0">
        <div class="section bg-inside">
            <figure>
                <img class="img-logo-bim" src="assets/img/bim-vinilit.png" alt="">
            </figure>
        </div>
        <div class="section-curva">
            <img class="curva" src="assets/img/curva-aliaxis-latam-white-1.svg" alt="">
        </div>
    </div>
    <div class="container py-5">
        <div class="form-register">
            <form action="" method="post">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="emailField" class="form-label">E-mail <span class="required">*</span></label>
                            <input type="email" class="form-control" id="emailField" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="firstNameField" class="form-label">First name <span class="required">*</span></label>
                            <input type="text" class="form-control" id="firstNameField" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="lastNameField" class="form-label">Last name <span class="required">*</span></label>
                            <input type="text" class="form-control" id="lastNameField" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="countries" class="form-label">Country <span class="required">*</span></label>
                            <select name="countries" id="countries" class="form-control"></select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="companyField" class="form-label">Company <span class="required">*</span></label>
                            <input type="text" class="form-control" id="companyField" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="passwordField" class="form-label">Password <span class="required">*</span></label>
                            <input type="password" class="form-control" id="passwordField" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="repeatPasswordField" class="form-label">Repeat Password <span class="required">*</span></label>
                            <input type="password" class="form-control" id="repeatPasswordField" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <div class="form-check">
                <input  type="checkbox" class="form-check-input" id="termAndConditionField" placeholder="">
                            <label for="termAndConditionField" class="form-label">By ticking this box, yo confirm that you<span class="required">*</span>
                            <ul>
                                <li>Accept the <a href="">Terms of Use</a>,</li>
                                <li>Accept the terms of the <a href="">Privacy policy</a> and</li>
                                <li>Consent the being contacted by representative of Aliaxis Group via email</li>
                            </ul>
                            </label>
                            
                </div>
                    </div>
                    <div class="col-12">
                    <div class="form-check">
                <input  type="checkbox" class="form-check-input" id="termAndConditionField" placeholder="">
                            <label for="termAndConditionField" class="form-label">Tick to opt-in and receive the latest news and updates on our products ans solutions
                            
                            </label>
                            
                </div>
                    </div>
                
                
                </div>
                <div class="row">
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-secondary" disabled>Submit</button>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
		<footer>
			<div class="container-fluid bg-blue">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 d-flex col-12">
							<div class="m-auto">
								<div class="footer-logo">
									<img src="https://www.vinilit.cl/wp-content/uploads/2022/03/logo-vinilit-white.svg" alt="">
								</div>
								<div class="social-login d-flex py-3">
									<span class="circle">
									<a class=" icon_social" href="https://www.linkedin.com/company/vinilit/">
									<i class="fab fa-linkedin-in"></i>
									</a>
									</span>
									<span class="circle">
									<a class=" icon_social" href="https://www.youtube.com/channel/UCpSx7krmdGJakAh42S23W2A">
									<i class="fab fa-youtube"></i>
									</a>
									</span>
									<span class="circle">
									<a class=" icon_social" href="https://www.instagram.com/vinilitbyaliaxis/">
									<i class="fab fa-instagram"></i>
									</a>
									</span>
									<span class="circle">
									<a class=" icon_social" href="https://www.facebook.com/Vinilitbyaliaxis/">
									<i class="fab fa-facebook-f"></i>
									</a>
									</span>
								</div>
								<div class="contact-info">
									<div class="d-block">
										<div class="py-2">
											<i class="fas fa-phone-alt white"></i>
											<span class="text-white-c">
											(+56) 2 2592 4000
											</span>
										</div>
										<div class="py-2">
											<i class="far fa-envelope white"></i>
											<span class="text-white-c">
											infovinilit@aliaxis-la.com
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-12 py-3 py-lg-0">
							<div class="inner-row row">
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">¿Quiénes somos?</h3>
									<ul class="list-group">
										<li class="nav-item"><a href="https://www.vinilit.cl/innovacion"  class="nav-link">Innovación</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/quienes-somos"   class="nav-link">Quiénes somos</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/valores"   class="nav-link">Valores</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/aliaxis"   class="nav-link">Aliaxis</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/asociaciones"   class="nav-link">Asociaciones</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/certificaciones"   class="nav-link">Certificaciones</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/crecimiento-con-proposito"  class="nav-link">Crecimiento con propósito</a></li>
									</ul>
								</div>
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">Segmentos</h3>
									<ul class="list-group">
										<li class="nav-item"><a href="https://www.vinilit.cl/edificacion"  class="nav-link">Edificación</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/agricultura"   class="nav-link">Agricultura</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/infraestructura"   class="nav-link">Infraestructura</a></li>
									</ul>
								</div>
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">Academia Vinilit</h3>
									<ul class="list-group">
                                        <li class="nav-item"><a href="https://www.vinilit.cl/webinars"   class="nav-link">Webinars</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/e-learnings"  class="nav-link">E-learning</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/articulos-tecnicos"   class="nav-link">Artículos técnicos</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/academia-vinilit"   class="nav-link">Academia</a></li>
										
									</ul>
								</div>
							</div>
							<div class="inner-row row inner-mid-footer">
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">Noticias</h3>
									<ul class="list-group">
										<li class="nav-item"><a href="https://www.vinilit.cl/casos-de-exito"  class="nav-link">Casos de éxito</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/alianzas"   class="nav-link">Alianzas</a></li>
                                        <li class="nav-item"><a href="https://www.vinilit.cl/ferias-y-eventos"   class="nav-link">Ferias y eventos</a></li>
                                        
									</ul>
								</div>
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">Links frecuentes</h3>
									<ul class="list-group">
										<li class="nav-item"><a href="https://www.vinilit.cl/contacto"  class="nav-link">Contacto</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/bim"   class="nav-link">BIM</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/distribuidores"   class="nav-link">Distribuidores</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/unete-a-nuestro-equipo"   class="nav-link">Únete a nuestro equipo</a></li>
									</ul>
								</div>
								<div class="col-lg-4 pt-3 pt-lg-0">
									<h3 class="title-footer-widget">Otros</h3>
									<ul class="list-group">
										<li class="nav-item"><a href="https://www.vinilit.cl/responsabilidad-social"  class="nav-link">Responsabilidad social</a></li>
										<li class="nav-item"><a href="https://www.vinilit.cl/sustentabilidad"   class="nav-link">Sustentabilidad</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row br-white mt-4">
						<div class="col-lg-6 text-md-start text-center">
							<span class="white copy_footer">Vinilit Todos los derechos reservados © 2022</span>
						</div>
						<div class="col-lg-6 text-md-end text-center">
							<span class="white  copy_footer">Designed by <a class="white text-decoration-none" href="https://interaction.cr/?utm_source=referred&utm_medium=click&utm_campaign=link_discover">Interaction</a></span>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>