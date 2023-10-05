@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('jury.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">JURYS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>N°</th>
             <th>Président du Jury</th>
             <th>Directeur de Mémoire</th>
             <th>Maitre de Stage</th>
             <th>Mod/Sup</th>
         </tr>
        </thead>

        <tbody>
          @foreach($jury as $jury)
        <tr>
            <th>{{ $jury->id}} </th>
            <td>{{ $jury->president_jury}} </td>
            <td>{{ $jury->nom_dm}} </td>
            <td>{{ $jury->nom_ms}} </td>
            
            <td>
                <a href="{{route('jury.edit', $jury->id )}}" class="btn btn-dark">Modifier</a>
                <a href="{{url('supprim-sout/' .$jury->id)}}" class="btn btn-danger">Supprimer</a>
            </td>
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