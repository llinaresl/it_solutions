<!--app header-->
<div class="app-header header">
	<div class="container-fluid">
		<div class="d-flex">
			<a class="header-brand" href="index ">
				<img src="{{ asset('images/logo.png') }}" class="header-brand-img dark-logo" alt="it solutions">
			</a>
			<div class="app-sidebar__toggle" data-toggle="sidebar">
				<a class="open-toggle" href="#">
					<i class="fa-solid fa-xmark"></i>
				</a>
				<a class="close-toggle" href="#">
					<i class="fa-solid fa-bars"></i>
				</a>
			</div>
			<div class="d-flex order-lg-2 my-auto ml-auto">
				<div class="dropdown profile-dropdown">
					<a href="#" class="nav-link pr-1 pl-0 leading-none" data-bs-toggle="dropdown">
						<span>
							<img src="{{ asset('images/usuario.png') }}" alt="img" class="avatar avatar-md bradius">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
						<div class="p-3 text-center border-bottom">
							<a href="#" class="text-center user pb-0 font-weight-bold">Nombre usuario</a>
							<p class="text-center user-semi-title">Departamento</p>
						</div>
						<a class="dropdown-item d-flex" href="/configuracion">
							<i class="fa-solid fa-user mr-3 fs-16 my-auto"></i>
							<div class="mt-1">Perfil</div>
						</a>
						<a class="dropdown-item d-flex" href="/configuracion">
							<i class="fa-solid fa-gear mr-3 fs-16 my-auto"></i>
							<div class="mt-1">Configuración</div>
						</a>
						<a class="dropdown-item d-flex" href="#">
							<i class="fa-solid fa-pen mr-3 fs-16 my-auto"></i>
							<div class="mt-1">Cambiar contraseña</div>
						</a>
						<a href="{{ route('logout') }}" class="dropdown-item d-flex text-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							   <i class="fa-solid fa-power-off mr-3 fs-16 my-auto"></i>
							   <div class="mt-1">Cerrar sesión</div>
                		</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/app header-->