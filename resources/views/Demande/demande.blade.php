@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('demande.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES DEMANDES</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Nom de l'Etudiant</th>
             <th>Période</th>
             <th>Statut de la demande</th>
             <th>Mod/Sup</th>
         </tr>
        </thead>

        <tbody>
          @foreach($demande as $demande)
        <tr>
            <th>{{ $demande->id}} </th>
            <td>{{ $demande->nom_etudiant}} </td>
            <td>{{ $demande->periode}} </td>
            <td>{{ $demande->statut}} </td>
            
            <td>
                @can('edit', $post)
                <a href="{{route('demande.edit', $demande->id )}}" class="btn btn-dark">Modifier</a>
                @endcan
               
                @can('delete', $post)
                <a href="{{url('supprim-demande/' .$demande->id)}}" class="btn btn-danger">Supprimer</a>
                @endcan
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