@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('soutenance.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LES SOUTENANCES PROGRAMMEES</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>N°</th>
             <th>Etudiants</th>
             <th>Date</th>
             <th>Jury</th>
             <th>Salle</th>
             <th>Mod/Sup</th>
         </tr>
        </thead>

        <tbody>
          @foreach($sout as $sout)
        <tr>
            <th>{{ $sout->id}} </th>
            <td>{{ $sout->etudiant}} </td>
            <td>{{ $sout->date}} </td>
            <td>{{ $sout->jury}} </td>
            <td>{{ $sout->id_salle}} </td>
            
            <td>
                <a href="{{route('soutenance.edit', $sout->id )}}" class="btn btn-dark">Modifier</a>
                <a href="{{url('supprim-sout/' .$sout->id)}}" class="btn btn-danger">Supprimer</a>
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