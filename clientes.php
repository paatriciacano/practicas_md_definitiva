<!DOCTYPE html>
<html lang="es-ES">

<head>
<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/practicas/conexion.php' );

?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo.adminkit.io/pages-blank.html" />
	<link rel="canonical" href="https://demo.adminkit.io/ui-buttons.html" />

	<title>Blank Page | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="css/rms.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- BEGIN SETTINGS -->
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar: left (default), right
-->

<body data-theme="default" data-layout="fluid" data-sidebar="left">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="index.html">Analytics</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-ecommerce.html">E-Commerce <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-crypto.html">Crypto <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>

					<li class="sidebar-item active">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link">
							<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Projects <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-invoice.html">
							<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-tasks.html">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>
							<span class="sidebar-badge badge bg-primary">Pro</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="calendar.html">
							<i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>
							<span class="sidebar-badge badge bg-primary">Pro</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
						</a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
							<span class="sidebar-badge badge bg-light">1.500+</span>
						</a>
						<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
						</a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
						</a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Form Plugins</span>
						</a>
						<ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-inputs.html">Advanced Inputs <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">DataTables</span>
						</a>
						<ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.html">Responsive Table <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.html">Table with Buttons <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-column-search.html">Column Search <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-ajax.html">Ajax Sourced Data <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
						</a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="notifications.html">
							<i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>
							<span class="sidebar-badge badge bg-primary">Pro</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
						</a>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps <span
										class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Multi Level</span>
						</a>
						<ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
							<li class="sidebar-item">
								<a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed">Two Levels</a>
								<ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
									<li class="sidebar-item">
										<a class="sidebar-link" href="#">Item 1</a>
										<a class="sidebar-link" href="#">Item 2</a>
									</li>
								</ul>
							</li>
							<li class="sidebar-item">
								<a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link collapsed">Three Levels</a>
								<ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
									<li class="sidebar-item">
										<a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Item 1</a>
										<ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
											<li class="sidebar-item">
												<a class="sidebar-link" href="#">Item 1</a>
												<a class="sidebar-link" href="#">Item 2</a>
											</li>
										</ul>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link" href="#">Item 2</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Weekly Sales Report</strong>
						<div class="mb-3 text-sm">
							Your weekly sales report is ready for download!
						</div>

						<div class="d-grid">
							<a href="https://adminkit.io/" class="btn btn-outline-primary" target="_blank">Download</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
								<img src="img/flags/us.png" alt="English" />
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
								<a class="dropdown-item" href="#">
									<img src="img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
									<span class="align-middle">English</span>
								</a>
								<a class="dropdown-item" href="#">
									<img src="img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />
									<span class="align-middle">Spanish</span>
								</a>
								<a class="dropdown-item" href="#">
									<img src="img/flags/ru.png" alt="Russian" width="20" class="align-middle me-1" />
									<span class="align-middle">Russian</span>
								</a>
								<a class="dropdown-item" href="#">
									<img src="img/flags/de.png" alt="German" width="20" class="align-middle me-1" />
									<span class="align-middle">German</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles
									Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
									Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Blank Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">listado clientes</h5>
								</div>
								
								<?php 
									require_once( $_SERVER['DOCUMENT_ROOT'] . '/practicas/conexion.php' );
									$datos = $dbh->prepare("SELECT * FROM clientes");
									$datos->execute();
								?>

								<div class="row">
									
									<div class="col-sm-12 ">
										<input type="search" class="form-control input-sm" id="searchbox" placeholder="Buscar">
									</div>
									
								</div>

								<div class="card-body pt-0">
									<div class="row">
										<table id="clientes" class="table table-striped display " cellspacing="0" width="100%">
									<thead>
																<tr>
																	<th></th>
																	<th>Nombre</th>
																	<th>Apellidos</th>
																	<th>Telefono</th>
																	<th>Email</th>
																	<th>Observaciones</th>
																	<th>Entidad</th>
																	<th>Tipo</th>
																</tr>
															</thead>

															<tbody>
								<?php 
								while($row=$datos->fetch()){
								/*$notas =  $row['notas'];*/
								?>
									<tr>
									<td>
										<a href="#deleteC_<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
										<a href="#editC_<?php echo $row['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal"><i class="fas fa-edit"></i></a>

																	</td>
										<td><?php echo $row['nombre'] ?></td>
										<td><?php echo $row['apellido'] ?></td>
										<td><?php echo $row['telefono'] ?></td>
										<td><?php echo $row['correo'] ?></td>
										<td><?php echo $row['observaciones'] ?></td>
										<td><?php echo $row['entidad'] ?></td>
										<td><?php echo $row['tipo'] ?></td>

										</tr>
								<?php
									/*include('delete-modal-contacto-empleado.php');*/
									include('modal_editar.php');	
								} 
								?>
										</tbody>
										</table>
				                  </div>
				                </div>


							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
    <script src="js/datatables.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
  $(function () {
     $('#clientes').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'scrollY'   : true,


      'language'    : {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
                
    },

    "dom": "rtip",
	"order": [[ 1, "asc" ]]

    })
  })
</script>

<script>
$(document).ready(function() {
    var dataTable = $('#clientes').dataTable();
    $("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
});
</script>


</body>

</html>




