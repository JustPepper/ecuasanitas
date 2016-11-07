@extends('layout')

@section('title', 'Nosotros')

@section('content')
	
	<div class="page-banner">
		<img src="{{ asset('images/about.jpg') }}" alt="">
		<div class="page-banner-icon">
			<span><svg><use xlink:href="#user" /></svg></span>
		</div>
	</div>

	<section class="section section-about">
		<div class="section-about-content">
			<h1 class="section-title">CUATRO PILARES FUNDAMENTALES AFIRMAN NUESTRO ESFUERZO, OBJETIVO Y DESTINO</h1>
			<p class="section-text">Somos la empresa pionera en el sistema de Medicina Prepagada en el país, creada para brindar atención médica de calidad. Contamos con más de 1.400 doctores a nivel nacional; así como múltiples centros médicos equipados con la más moderna tecnología en las ciudades de Quito y Guayaquil.</p>
		</div>
		<div class="flex-container vision">
			<div class="grid">
				<div class="col">
					<h2 class="section-small-title">MISIÓN</h2>
					<p class="section-text">Otorgar y garantizar atención médica de calidad a nuestros clientes.</p>
				</div>
				<div class="col">
					<h2 class="section-small-title">VISIÓN</h2>
					<p class="section-text">Mantener el liderazgo a través del compromiso de su gente y la excelencia en el servicio.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section-commitment">
		<h2 class="section-title">NUESTRO COMPROMISO EN <b>ECUASANITAS</b></h2>
		<section class="section-news">
			<div class="grid">
				<div class="col news-image"><img src="{{ asset('images/maxresdefault.jpg') }}" alt=""></div>
				<div class="col news-text">
					<div>
						<h2 class="section-small-title">Polìtica de <b>Seguridad</b></h2>
						<p class="section-text">Nuestro compromiso en Ecuasanitas es ofrecer un sistema de medicina prepagada y atención médica, que garantice el cumplimiento de los servicios contratados por nuestros afiliados y clientes; sustentados en la honestidad, experiencia, trabajo en equipo y personal calificado, a través del mejoramiento continuo e innovación de la infraestructura, tecnología, proceso y productos.</p>
						<h2 class="section-small-title">Ambiente de <b>Seguridad y bienestar</b></h2>
						<p class="section-text">Ecuasanitas impulsará un ambiente de seguridad y bienestar a nuestros colaboradores y personal externo por medio de la prevención de riesgos en la empresa, cumpliendo con la normativa legal vigente.</p>
					</div>
				</div>
			</div>
		</section>
		<div class="card">
			<div class="flex-container">
				<div class="grid">
					<div class="col">
						<h3 class="section-small-title">OBJETIVOS DE <b>CALIDAD</b></h3>
						<ul>
							<li>Garantizar el cumplimiento de los servicios contratados de los afiliados y clientes.</li>
							<li>Mantener personal calificado</li>
							<li>Mejorar continuamente los procesos e infraestructura.</li>
							<li>Mantener la confianza en los usuarios para lograr su fidelidad.</li>
						</ul>
					</div>
					<div class="col">
						<img src="{{ asset('images/card.JPG') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-responsibility">
		<h2 class="section-title">RESPONSABILIDAD <b>SOCIAL</b></h2>
		<section class="section-news">
			<div class="grid">
				<div class="col news-image"><img src="{{ asset('images/family.jpg') }}" alt=""></div>
				<div class="col news-text">
					<div>
						<h2 class="section-small-title">Dr. Marcial Gòmez - <b>Sequeira</b></h2>
						<p class="section-text">Ideólogo y promotor de la primera empresa de medicina en el Ecuador y su esposa D. María Teresa de Gómez-Sequeira, personas con un profundo compromiso de responsabilidad social, preocupadas por las niñas y niños menores de 12 años quienes viven en condiciones de extrema pobreza, desamparo, abandono y desnutrición en el Ecuador otorgan cobertura médica, estructuración de albergues e incentivo deportivo.</p>
						<a href="#" class="btn btn--blue">CONOZCA NUESTROS PROYECTOS</a>
					</div>
				</div>
			</div>
		</section>
	</section>	

	<section class="section section-contact-info section-check-plans">
		<span class="with-pattern"></span>
		<div class="flex-container">
			<div class="info">
				<h2 class="section-big-title"><b>¿AÚN NO ERES CLIENTES DE ECUASANITAS?</b></h2>
				<h2 class="section-text">Conoce todos nuestros planes, los mejores del país.</h2>
				<a href="" class="btn btn--cian">REVISAR PLANES</a>
			</div>
		</div>
	</section>

@endsection