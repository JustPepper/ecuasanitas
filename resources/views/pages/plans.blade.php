@extends('layout')

@section('title', 'Planes')

@section('content')
	
	<div class="page-banner">
		<img src="{{ asset('images/about.jpg') }}" alt="">
		<div class="page-banner-icon">
			<span><svg><use xlink:href="#list" /></svg></span>
		</div>
	</div>

	<section class="section section-about">
		<div class="section-about-content">
			<h1 class="section-title">PLANES DE <b>ASISTENCIA MÉDICA</b></h1>
			<p class="section-text">Ecuasanitas cuenta con varios Planes de Asistencia Médica diseñados bajo los mejores estándares de calidad, los mismos que se adaptarán a sus requerimientos individuales, familiares, Grupales y Corporativos.</p>
			<a href="" class="btn btn--cian">COTIZAR PLANES</a>
		</div>
	</section>

	<section class="section section-plans-list">
		<div class="flex-container">
			<div class="plan-item">
				<div class="plan-item-title">
					<svg><use xlink:href="#family" /></svg>
					<h2 class="section-subtitle">INDIVIDUALES <b>Y FAMILIARES</b></h2>
				</div>
				<div class="plan-item-body">
					<h3 class="section-subtitle">Lo Mejor de <b>Ecuasanitas</b></h3>
					<p class="section-text">Cobertura médica diseñada para ti y tu familia con el respaldo de los mejores médicos del país.</p>
				</div>
				<div class="plan-item-link">
					<a href="" class="btn btn--gray">AMPLIAR</a>
				</div>
			</div>
			<div class="plan-item plan-item--active">
				<div class="plan-item-title">
					<svg><use xlink:href="#family" /></svg>
					<h2 class="section-subtitle">GRUPALES</h2>
				</div>
				<div class="plan-item-body">
					<h3 class="section-subtitle">Lo Mejor de <b>Ecuasanitas</b></h3>
					<p class="section-text">Cobertura médica diseñada para ti y tu familia con el respaldo de los mejores médicos del país.</p>
				</div>
				<div class="plan-item-link">
					<a href="" class="btn btn--gray">AMPLIAR</a>
				</div>
			</div>
			<div class="plan-item">
				<div class="plan-item-title">
					<svg><use xlink:href="#family" /></svg>
					<h2 class="section-subtitle">CORPORATIVOS</h2>
				</div>
				<div class="plan-item-body">
					<h3 class="section-subtitle">Lo Mejor de <b>Ecuasanitas</b></h3>
					<p class="section-text">
						Cobertura médica diseñada para ti y tu familia con el respaldo de los mejores médicos del país.
						<br>
						<br>
						Estos planes se arman en base al número de empleados, siniestralidad, riesgos laborales, divididos por giro de negocio, entre otros factores.
					</p>
				</div>
				<div class="plan-item-link">
					<a href="" class="btn btn--gray">AMPLIAR</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-plan-description">
		<div class="plan-description-icon" style="background-color: #ECECEC;"><svg style="fill: #669999;"><use xlink:href="#down" /></svg></div>
		<div class="grid">
			<div class="col">
				<img src="{{ asset('images/ejecutivos.png') }}" alt="">
			</div>
			<div class="col">
				<div class="max">
					<h2 class="section-title">PLAN PYMES</h2>
					<p class="section-subtitle">PLANES DISEÑADOS PARA PROTEGER EL BIENESTAR DE TUS COLABORADORES O GRUPO FAMILIAR COMPUESTO POR 5 HASTA 20 TITULARES.</p>
					<span class="plan-price">DESDE <b>$42</b></span>
					<a href="" class="btn btn--cian">COTIZAR AHORA</a>
				</div>	
			</div>
		</div>
	</section>

	<section class="section section-plan-featured">
		<div class="flex-container">
			<div class="grid">
			<div class="col">
				<div>
					<h1 class="section-title">PLAN GRUPAL</h1>
					<h2 class="section-subtitle">COBERTURA MÉDICA ANUAL</h2>
				</div>
				<p class="section-text">La mejor cobertura para tu grupo familiar o tus colaboradores.</p>
			</div>
			<div class="col">
				<h2 class="section-subtitle"><b>SELECCIONA</b> LA COBERTURA QUE DESEAS CONSULTAR:</h2>
				<ul>
					<li class="active">
						<svg><use xlink:href="#check" /></svg>
						<span>GRUPAL $7 500</span>
					</li>
					<li>
						<svg><use xlink:href="#check" /></svg>
						<span>GRUPAL $17 500</span>
					</li>
					<li>
						<svg><use xlink:href="#check" /></svg>
						<span>GRUPAL $25 500</span>
					</li>
					<li>
						<svg><use xlink:href="#check" /></svg>
						<span>GRUPAL $37 500</span>
					</li>
				</ul>
			</div>
			</div>
		</div>
	</section>

	<section class="section-plan-description">
		<div class="plan-description-icon" style="background-color: #3CAAAB;"><svg style="fill: #ffffff;"><use xlink:href="#down" /></svg></div>
		<div class="flex-container">
			<div class="grid">
				<div class="col">
					<h2 class="section-title">PLAN GRUPAL</h2>
					<p class="plan-price"><b>$7 500</b></p>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</section>

@endsection