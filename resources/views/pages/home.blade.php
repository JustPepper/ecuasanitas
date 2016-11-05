@extends('layout')

@section('title', 'Home')

@section('content')

	<div class="slider-wrapper">
	    <div class="slider cycle-slideshow"
		data-cycle-fx="scrollHorz" 
    	data-cycle-timeout="4000"
    	data-cycle-log=false
    	data-cycle-slides="> div"
	   	>
	        <div class="slider-item">
	            <img src="{{ asset('images/slider-1.jpg') }}" alt="">
	            <span class="with-pattern"></span>
	            <div class="flex-container">
	                <div class="slider-item-content">
	                    <h1 class="section-big-title">PIONEROS EN BRINDARTE EL SERVICIO MÉDICO MÁS COMPLETO</h1>
	                    <a href="#" class="btn btn--blue">Conoce nuestros servicios</a>
	                </div>
	            </div>
	        </div>
	        <div class="slider-item">
	            <img src="{{ asset('images/contact.jpg') }}" alt="">
	            <span class="with-pattern"></span>
	            <div class="flex-container">
	                <div class="slider-item-content">
	                    <h1 class="section-big-title">PIONEROS EN BRINDARTE EL SERVICIO MÉDICO MÁS COMPLETO</h1>
	                    <a href="#" class="btn btn--blue">Conoce nuestros servicios</a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="slider-footer">
	        <a href="#" class="slider-footer-item">
	            <svg><use xlink:href="#hospital" /></svg>
	            <p>DIRECTORIO DE CENTROS AFILIADOS</p>
	        </a>
	        <a href="#" class="slider-footer-item">
	            <svg><use xlink:href="#doctor" /></svg>
	            <p>DIRECTORIO DE MÉDICOS AFILIADOS</p>
	        </a>
	        <a href="#" class="slider-footer-item">
	            <svg><use xlink:href="#iso" /></svg>
	            <p>QUIERO AFILIARME</p>
	        </a>
	    </div>
	</div>

	<section class="section section-affiliates">
	    <div class="flex-container ">
	        <div class="grid">
	            <div class="col">
	                <h1 class="section-big-title">CON MÁS DE 100.000 AFILIADOS Y PRESENCIA A NIVEL NACIONAL</h1>
	                <h3 class="section-subtitle">ORIENTADOS HACIA LA <b>EXPERIENCIA</b></h3>
	                
	                <h3 class="section-small-title">Compromiso <b>Ecuasanitas</b></h3>
	                <p class="section-text">Nuestro compromiso en Ecuasanitas es ofrecer un sistema de medicina prepagada y atención médica, que garantice el cumplimiento de los servicios contratados por nuestros afiliados y clientes</p>
	            </div>
	            <div class="col">
	                <h3 class="section-small-title"><b>Beneficios</b> Ecuasanitas</h3>
	                <ul>
	                    <li>Tarjeta de descuento Ecuasanitas-Pharmacy´s</li>
	                    <li>Descuento de hasta el 30% en productos de consumo masivo</li>
	                    <li>50% de descuento en atención en el punto de salud Inclusión en el programa de medicación continua CONTROLMED</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</section>

	<section class="download-app">
	    <div class="flex-container">
	        <div class="grid">
	            <div class="col">
	                <h1 class="section-big-title">CUIDAMOS DE TU SALUD Y CAMINAMOS JUNTOS PARA CAMBIAR EL ESTILO DE VIDA DE LAS PERSONAS</h1>
	                <hr class="line">
	                <h3 class="section-subtitle">DESCARGA <b>NUESTRA APP</b> PARA TENER TU FICHA CLÍNICA A TUS MANOS</h3>
	                <a href="#" class="btn btn--border">DESCARGAR APP</a>
	            </div>
	            <div class="col">
	                <img src="{{ asset('images/app-preview.png') }}" alt="">
	            </div>
	        </div>
	    </div>
	    <div class="download-app-footer">
	    	<div class="flex-container">
	    		<svg><use xlink:href="#check" /></svg>
	    		<p class="section-subtitle">PARA MEJOR FUNCIONAMIENTO CREA <b>TU CUENTA ECUASANITAS</b></p>
	    	</div>
	    </div>
	</section>

	<section class="section section-plans">
		<div class="grid">
			<div class="col">
				<img src="{{ asset('images/padres.png') }}" alt="">
			</div>
			<div class="col">
				<h1 class="section-big-title">CONTAMOS CON LOS MEJORES PLANES</h1>
				<p class="section-text">Ecuasanitas cuenta con varios Planes de Asistencia Médica diseñados bajo los mejores estándares de calidad.</p>
				<a href="#" class="btn btn--cian">REVISAR PLANES</a>
				<ul class="plans-list">
					<li>
						<svg><use xlink:href="#family" /></svg>
						<p>INDIVIDUALES Y FAMILIARES</p>
					</li>
					<li>
						<svg><use xlink:href="#person" /></svg>
						<p>CORPORATIVOS</p>
					</li>
					<li>
						<svg><use xlink:href="#group" /></svg>
						<p>GRUPALES</p>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="section-news">
		<div class="grid">
			<div class="col news-image"><img src="{{ asset('images/news1.jpg') }}" alt=""></div>
			<div class="col news-text">
				<div>
					<h2 class="section-subtitle"><b>Ecuasanitas</b> te regala bienestar para tu familia, afíliate ahora!</h2>
					<p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					<a href="" class="read-more">Leer más</a>
				</div>
			</div>
		</div>
		<div class="grid">
			<div class="col news-image"><img src="{{ asset('images/news2.jpg') }}" alt=""></div>
			<div class="col news-text">
				<div>
					<h2 class="section-subtitle"><b>13 de Octubre</b> Día mundial de la visión!</h2>
					<p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					<a href="" class="read-more">Leer más</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-contact-info">
		<span class="with-pattern"></span>
		<div class="contact-info">
			<h2 class="section-big-title"><b>CONTÁCTANOS EN:</b></h2>
			<h3 class="section-big-title">
				<b>QUITO</b> (02) 3956 280
				<b>GUAYAQUIL</b> (04) 2 590 770
			</h2>
		</div>
	</section>

@endsection