@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('salle.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES SALLES</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard m-5 mt-5 col-11">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Nom</th>
         </tr>
        </thead>

        <tbody>
          @foreach($salle as $salle)
        <tr>
            <th>{{ $salle->id}} </th>
            <td>{{ $salle->nom}} </td>
        </tr>
        @endforeach
      </tbody>
     </table>



    </div>
  </section>

</main><!-- End #main -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>

@include('resources.footer')