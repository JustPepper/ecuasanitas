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
			<div class="plan-item" data-index="0">
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
			<div class="plan-item plan-item--active" data-index="1">
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
			<div class="plan-item" data-index="2">
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
	
	<div data-plan="0" class="data-plan data-plan--active">
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

		<section class="section section-plan-featured" style="animation-delay: 500ms;">
			<div class="flex-container">
				<div class="grid">
				<div class="col">
					<div>
						<h1 class="section-title">PLAN INDIVIDUAL</h1>
						<h2 class="section-subtitle">COBERTURA MÉDICA ANUAL</h2>
					</div>
					<p class="section-text">La mejor cobertura para tu grupo familiar o tus colaboradores.</p>
				</div>
				<div class="col">
					<h2 class="section-subtitle"><b>SELECCIONA</b> LA COBERTURA QUE DESEAS CONSULTAR:</h2>
					<ul class="data-plan-price-list">
						<li class="active" data-plan-price="0">
							<svg><use xlink:href="#check" /></svg>
							<span>GRUPAL $7 500</span>
						</li>
						<li data-plan-price="1">
							<svg><use xlink:href="#check" /></svg>
							<span>GRUPAL $17 500</span>
						</li>
						<li data-plan-price="2">
							<svg><use xlink:href="#check" /></svg>
							<span>GRUPAL $25 500</span>
						</li>
						<li data-plan-price="3">
							<svg><use xlink:href="#check" /></svg>
							<span>GRUPAL $37 500</span>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</section>

		<section id="plan-item-wrapper" class="section-plan-description" style="animation-delay: 1s;">
			<div class="plan-description-icon" style="background-color: #3CAAAB;"><svg style="fill: #ffffff;"><use xlink:href="#down" /></svg></div>
			<div class="description-wrapper">
				<div data-plan-description="0" class="plan-description-item plan-description-item--active">
					<div class="flex-container">
						<div class="grid">
							<div class="col">
								<h2 class="plan-description-title">PLAN GRUPAL</h2>
								<h3 class="plan-description-price">$7500</h3>
								<p class="plan-description-text">Tu <b>tranquilidad</b> es tu mejor inversión</p>
								<ul class="plan-description-list">
									<li>Cobertura por enfermedad o accidente $7500</li>
									<li>Deducible anual por persona $70</li>
								</ul>
							</div>
							<div class="col">
								<ul class="plan-description-list plan-description-list--border">
									<li>Ambulancia aérea nacional (titular) hasta $1500</li>
									<li>
										Cobertura cuadrado cerrado al 100% de arancel
										<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
									</li>
									<li>
										Cobertura de maternidad titular o cónyuge hasta $1728
										<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
									</li>
									<li>Enfermedades congénitas y/o preexistentes por usuario y por año hasta $700</li>
									<li>Libre elección de médicos al 80% de arancel</li>
									<li>Incluye cobertura por muerte accidental hasta $15000, así como gastos médicos, incapacidad total o permanente, asistencia exequial y ambulancia</li>
									<li>Entre otras coberturas</li>
								</ul>
								<a href="" class="btn btn--cian">Desde $42</a>
							</div>
						</div>
					</div>
				</div>
				<div data-plan-description="1" class="plan-description-item">
					<div class="flex-container">
						<div class="grid">
							<div class="col">
								<h2 class="plan-description-title">PLAN GRUPAL</h2>
								<h3 class="plan-description-price">$17 500</h3>
								<p class="plan-description-text">Tu <b>tranquilidad</b> es tu mejor inversión</p>
								<ul class="plan-description-list">
									<li>Cobertura por enfermedad o accidente $7500</li>
									<li>Deducible anual por persona $70</li>
								</ul>
							</div>
							<div class="col">
								<ul class="plan-description-list plan-description-list--border">
									<li>Ambulancia aérea nacional (titular) hasta $1500</li>
									<li>
										Cobertura cuadrado cerrado al 100% de arancel
										<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
									</li>
									<li>
										Cobertura de maternidad titular o cónyuge hasta $1728
										<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
									</li>
									<li>Enfermedades congénitas y/o preexistentes por usuario y por año hasta $700</li>
									<li>Libre elección de médicos al 80% de arancel</li>
									<li>Incluye cobertura por muerte accidental hasta $15000, así como gastos médicos, incapacidad total o permanente, asistencia exequial y ambulancia</li>
									<li>Entre otras coberturas</li>
								</ul>
								<a href="" class="btn btn--cian">Desde $42</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div data-plan="1" class="data-plan" >
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

		<section class="section section-plan-featured" style="animation-delay: 500ms;">
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

		<section id="plan-item-wrapper" class="section-plan-description" style="animation-delay: 1s;">
			<div class="plan-description-icon" style="background-color: #3CAAAB;"><svg style="fill: #ffffff;"><use xlink:href="#down" /></svg></div>
			<div class="plan-description-item">
				<div class="flex-container">
					<div class="grid">
						<div class="col">
							<h2 class="plan-description-title">PLAN GRUPAL</h2>
							<h3 class="plan-description-price">$7500</h3>
							<p class="plan-description-text">Tu <b>tranquilidad</b> es tu mejor inversión</p>
							<ul class="plan-description-list">
								<li>Cobertura por enfermedad o accidente $7500</li>
								<li>Deducible anual por persona $70</li>
							</ul>
						</div>
						<div class="col">
							<ul class="plan-description-list plan-description-list--border">
								<li>Ambulancia aérea nacional (titular) hasta $1500</li>
								<li>
									Cobertura cuadrado cerrado al 100% de arancel
									<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
								</li>
								<li>
									Cobertura de maternidad titular o cónyuge hasta $1728
									<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
								</li>
								<li>Enfermedades congénitas y/o preexistentes por usuario y por año hasta $700</li>
								<li>Libre elección de médicos al 80% de arancel</li>
								<li>Incluye cobertura por muerte accidental hasta $15000, así como gastos médicos, incapacidad total o permanente, asistencia exequial y ambulancia</li>
								<li>Entre otras coberturas</li>
							</ul>
							<a href="" class="btn btn--cian">Desde $42</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div data-plan="2" class="data-plan">
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

		<section class="section section-plan-featured" style="animation-delay: 500ms;">
			<div class="flex-container">
				<div class="grid">
				<div class="col">
					<div>
						<h1 class="section-title">PLAN CORPORATIVO</h1>
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

		<section id="plan-item-wrapper" class="section-plan-description" style="animation-delay: 1s;">
			<div class="plan-description-icon" style="background-color: #3CAAAB;"><svg style="fill: #ffffff;"><use xlink:href="#down" /></svg></div>
			<div class="plan-description-item">
				<div class="flex-container">
					<div class="grid">
						<div class="col">
							<h2 class="plan-description-title">PLAN GRUPAL</h2>
							<h3 class="plan-description-price">$7500</h3>
							<p class="plan-description-text">Tu <b>tranquilidad</b> es tu mejor inversión</p>
							<ul class="plan-description-list">
								<li>Cobertura por enfermedad o accidente $7500</li>
								<li>Deducible anual por persona $70</li>
							</ul>
						</div>
						<div class="col">
							<ul class="plan-description-list plan-description-list--border">
								<li>Ambulancia aérea nacional (titular) hasta $1500</li>
								<li>
									Cobertura cuadrado cerrado al 100% de arancel
									<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
								</li>
								<li>
									Cobertura de maternidad titular o cónyuge hasta $1728
									<div class="tool-tip" data-tooltip="(i) Cobertura de libre elección al 80% del arancel"><i>(i)</i></div>
								</li>
								<li>Enfermedades congénitas y/o preexistentes por usuario y por año hasta $700</li>
								<li>Libre elección de médicos al 80% de arancel</li>
								<li>Incluye cobertura por muerte accidental hasta $15000, así como gastos médicos, incapacidad total o permanente, asistencia exequial y ambulancia</li>
								<li>Entre otras coberturas</li>
							</ul>
							<a href="" class="btn btn--cian">Desde $42</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="section section-help">
		<h2 class="section-subtitle">
			Tu <b>tranquilidad</b> es tu mejor inversión <br>
			¿Estás listo para confiar en este plan de cobertura médica grupal?
		</h2>
		<a href="" class="btn btn--border-cian">COTIZAR AHORA</a>
	</section>

@endsection