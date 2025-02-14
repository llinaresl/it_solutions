<!--aside open-->
<aside class="app-sidebar">
	<div class="app-sidebar__logo">
		<a class="header-brand" href="/">
			<img src="{{ asset('images/logoExtendido.png') }}" class="header-brand-img dark-logo" alt="Banquetes Cristy">
            <img src="{{ asset('images/logo.png') }}" class="header-brand-img mobile-logo" alt="Banquetes Cristy">
		</a>
	</div>
	<div class="app-sidebar3">

		<ul class="side-menu">
			<li class="slide">
				<a class="side-menu__item {{ Request::is('/') ? 'active' : '' }}" data-toggle="slide" href="/" id="/">
					<i class="fa-solid fa-gauge mr-2"></i>
					<span class="side-menu__label">Dashboard</span>
				</a>
			</li>

             <li class="slide">
				<a class="side-menu__item {{ Request::is('anuncios') ? 'active' : '' }}" data-toggle="slide" href="/anuncios" id="anuncios">
					<i class="fa-brands fa-adversal mr-2"></i>
					<span class="side-menu__label">Anuncios</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item  {{ Request::is('bd') ? 'active' : '' }}" data-toggle="slide" href="/bd" id="bd">
					<i class="fa-solid fa-database mr-2"></i>
					<span class="side-menu__label">Bases de datos</span>
				</a>
			</li>


            <li class="slide">
				<a class="side-menu__item {{ Request::is('comentarios') ? 'active' : ''}}" data-toggle="slide" href="/comentarios" id="comentarios">
					<i class="fa-solid fa-comment mr-2"></i>
					<span class="side-menu__label">Comentarios</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('contactos') ? 'active' : ''}}" data-toggle="slide" href="/contactos" id="contactos">
					<i class="fa-solid fa-address-book mr-2"></i>
					<span class="side-menu__label">Contactos</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('contratos') ? 'active' : ''}}" data-toggle="slide" href="/contratos" id="contratos">
					<i class="fa-solid fa-file-contract mr-2"></i>
					<span class="side-menu__label">Contratos</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('departamentos') ? 'active' : '' }}" data-toggle="slide" href="/departamentos" id="departamentos">
					<i class="fa-solid fa-address-card mr-2"></i>
					<span class="side-menu__label">Departamentos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('eventos') ? 'active' : '' }}" data-toggle="slide" href="/eventos" id="eventos">
					<i class="fa-solid fa-calendar-day mr-2"></i>
					<span class="side-menu__label">Eventos</span>
				</a>
			</li>
			
			<li class="slide">
				<a class="side-menu__item {{ Request::is('empleados') ? 'active' : '' }}" data-toggle="slide" href="/empleados" id="empleados">
					<i class="fa-solid fa-user mr-2"></i>
					<span class="side-menu__label">Empleados</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('modelos') ? 'active' : '' }}" data-toggle="slide" href="/modelos" id="modelos">
					<i class="fa-solid fa-folder mr-2"></i>
					<span class="side-menu__label">Modelos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('preguntas') ? 'active' : '' }}" data-toggle="slide" href="/preguntas" id="preguntas">
					<i class="fa-solid fa-circle-question mr-2"></i>
					<span class="side-menu__label">Preguntas</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('proyectos') ? 'active' : '' }}" data-toggle="slide" href="/proyectos" id="proyectos">
					<i class="fa-solid fa-list-check mr-2"></i>
					<span class="side-menu__label">Proyectos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('riesgos') ? 'active' : '' }}" data-toggle="slide" href="/riesgos" id="riesgos">
					<i class="fa-solid fa-triangle-exclamation mr-2"></i>
					<span class="side-menu__label">Riesgos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('configuracion') ? 'active' : '' }}" data-toggle="slide" href="/configuracion" id="configuraciones">
					<i class="fa-solid fa-user-gear mr-2"></i>
					<span class="side-menu__label">Configuraciones</span>
				</a>
			</li>
		</ul>
	</div>
</aside>