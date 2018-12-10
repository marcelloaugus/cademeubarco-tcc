@extends('layout.site')

@section('content')
<div class="py-0 ml-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h1 class="mb-0 mt-0 display-4 text-light text-right" contenteditable="true">Cadê meu Barco</h1>
          <p class="mb-0 text-light text-right"><b>Informações sobre a sua viagem.</b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 my-0 ml-4 mt-0 mb-5 p-4 pb-2" style="">
    <form class="section-light bg-light p-4 text-capitalize rounded rounded-left rounded-right rounded-top" method="post" action="https://formspree.io/YOUREMAILHERE" style="text-shadow: 0px 0px 4px black;">
      <h4 class="mb-3 text-center">Pesquise</h4>
      <div class="form-group">
        <label>Pra Onde?</label>
        <input class="form-control" placeholder="Type here">
      </div>
      <div class="form-group">
        <label>Data</label>
        <input type="date" class="form-control" placeholder="13">
      </div>
      <div class="form-group">
        <label>Pessoas</label>
        <input type="number" class="form-control" placeholder="">
      </div>
      <a class="btn btn-secondary px-5 text-left" href="file:///C:/xampp/htdocs/cademeubarco.com.br/TELA%20PRINCIPAL.html" style="">Buscar </a><b></b><b>
      </b>
    </form>
  </div>
  <div class="py-0 text-right" style="">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  <div class="col-lg-7 align-self-center text-lg-left text-center" style="">
    <div class="col-lg-7 align-self-center text-lg-left text-center text-light">
    </div>
  </div>
  <!-- Cover -->
  <!-- Intro -->
  <!-- Gallery -->
  <!-- Menu -->
  <!-- Carousel reviews -->
  <!-- Carousel venue -->
  <!-- Events -->
  <!-- Book section -->
  <!-- Footer -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" style=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" style=""></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js" style=""></script>
  
</body>
@endsection