@extends('layout')

@section('title', 'Oficinas')

@section('content')

  <div class="simple-page-banner">
    <div class="simple-page-banner-pattern"></div>
    <div class="simple-page-banner-icon"><svg><use xlink:href="#stats" /></svg></div>
  </div>

  <section class="section container office">
    <h2 class="section-title">OFICINAS <b>ECUASANITAS</b></h2>
    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </section>

  <div class="blue-bar">
    <h2 class="blue-bar-text">ECUASANITAS ESTÁ SIEMPRE DONDE TU ESTÉS. <b>CONOCE NUESTRAS OFICINAS EN TODO EL PAÍS.</b></h2>
  </div>

  <div class="offices-maps container section">
    <p class="section-small-title">Para ir a la oficina de tu ciudad, haz click en el ícono que señala la ciudad.
    O búscala en el listado y haz click sobre ella.</p>
    <div class="flex-container">
      <div class="offices-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4083612.8917616713!2d-80.51646818235207!3d-1.7753125430206962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902387dda89a4bd5%3A0x9d76af04119c3702!2sEcuador!5e0!3m2!1ses-419!2sec!4v1481257284641" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="offices-list">
        <p class="section-small-title"><svg><use xlink:href="#ecuaplace" /></svg>OFICINAS</p>
        <nav>
          <li><a href="">Guayaquil</a></li>
          <li><a href="">Quito</a></li>
          <li><a href="">Cuenca</a></li>
          <li><a href="">Esmeraldas</a></li>
          <li><a href="">Ambato</a></li>
          <li><a href="">Ibarra</a></li>
        </nav>
      </div>
    </div>
  </div>

  <section class="directions container">
    <div class="directions-select">
      <select class="card-select">
        <option value="1" selected>Guayaquil</option>
        <option value="2">Quito</option>
        <option value="3">Cuenca</option>
        <option value="4">Esmeraldas</option>
        <option value="5">Ambato</option>
        <option value="6">Ibarra</option>
      </select>
    </div>
    <div class="cards-grid">
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
    </div>
  </section>

@endsection
