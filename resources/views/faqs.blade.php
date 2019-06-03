@extends('layouts.main')

@section('content')

  <div class="container-fluid">
  <section class="row justify-content-center pregfrec">

    <div class="col-md-7 accordion" id="accordionExample">

      <div class="card mb-3">
        <div class="text-white bg-dark" id="preguntasf">
          <h1 class="mb-0">
            PREGUNTAS FRECUENTES
          </h1>
          <!-- LA ULTIMA "PREGUNTA" QUE SELECCIONAMOS QUEDA SUBRAYADA, POR QUE? -->
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Cuáles son los medios de pago disponibles?
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            El pago se puede efectuar por:<br>
              -Mercado Pago: con los bancos adheridos podes abonar hasta en 12 cuotas sin interés.<br>
              -Pago Fácil<br>
              -Rapi Pago<br>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              ¿Puedo retirar mi compra en un local?
            </button>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse rta" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            No, por el momento enviamos los productos al domicilio que nos indiques.
          </div>
        </div>
      </div>


      <div class="card mb-3">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              ¿Cuáles son los métodos de envío disponibles?
            </button>
          </h5>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Contamos con dos opciones para que recibas tu producto:<br>
              -Envíos a domicilio (envíos a todos el país)<br>
              -Retiros en Sucursal de Correo.<br>
          </div>
        </div>
      </div>


      <div class="card mb-3">
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              ¿Cuál es el costo de envió?
            </button>
          </h5>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            El envío depende de los productos que compres y la dirección de entrega.
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              ¿Puedo cambiar o devolver el producto una vez que lo compré?
            </button>
          </h5>
        </div>

        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            Sí. Tenés 10 días para devolver y 30 días para cambiar un producto desde la fecha de recepción.
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
              ¿Cómo se puede efectuar el cambio?
            </button>
          </h5>
        </div>

        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            Solicita el cambio a través de Atención al Cliente o mail de contacto.
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header" id="headingSeven">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
              ¿Cuál es el tiempo estimado de entrega?
            </button>
          </h5>
        </div>

        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            El tiempo estimado de entrega es de 2 a 10 días hábiles.
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header" id="headingEight">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
              ¿Puede recibir mi pedido otra persona?
            </button>
          </h5>
        </div>

        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
          <div class="card-body">
            Si, siempre y cuando la persona que reciba el pedido presente D.N.I
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header" id="headingNine">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
              ¿Puedo comprar varios productos a la vez?
            </button>
          </h5>
        </div>

        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
          <div class="card-body">
            Sí, podés comprar tantos artículos como desees y pagar el costo de envío por todos los productos (y no por cada uno).
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header" id="headingTen">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
              ATENCIÓN AL CLIENTE
            </button>
          </h5>
        </div>

        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
          <div class="card-body">
            Ante cualquier duda o consulta podes contactarte en el horario de 8:00 a 18:00 hs.
          </div>
        </div>
      </div>

    </div>

  </section>
</div>

@endsection
