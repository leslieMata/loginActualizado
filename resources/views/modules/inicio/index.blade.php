@extends('../../layouts/main')

@section('contenido')
   

<div class="container">
  <h2>Total de pagos y gastos</h2>
  <div class="row">
    <div class="col">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Tus ingresos o pagos</h4>
        <p>Esta cantidad demuestra lo mucho que te has esforzado por trabajar y como ha sido recompenzado tu esfuerzo</p>
        <hr>
        <p class="mb-0">La cantidad es  <h2><span class="badge bg-secondary">${{ $pagos }}</span></h2></p>
      </div>  
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Tus egresos o gastos</h4>
        <p>Esta cantidad representa todo aquello que has comprado, pagos de servicios y cualquier cosa divertida que hayas hecho</p>
        <hr>
        <p class="mb-0">La cantidad es <h2><span class="badge bg-secondary">${{ $gastos }}</span></h2></p>
      </div>
    </div>
  </div>
</div>
  

@endsection
