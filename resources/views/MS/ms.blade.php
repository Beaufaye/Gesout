@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('ms.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES MAITRES DE STAGES</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Nom</th>
             <th>Prenom</th>
             <th>Sexe</th>
             <th>Contact</th>
             <th>Mod/Sup</th>
         </tr>
        </thead>

        <tbody>
          @foreach($ms as $ms)
        <tr>
            <th>{{ $ms->id}} </th>
            <td>{{ $ms->nom}} </td>
            <td>{{ $ms->prenom}} </td>
            <td>{{ $ms->sexe}} </td>
            <td>{{ $ms->contact}} </td>
            
            <td>
                <a href="{{route('ms.edit', $ms->id )}}" class="btn btn-dark">Modifier</a>
                <a href="{{url('supprim-ms/' .$ms->id)}}" class="btn btn-danger">Supprimer</a>
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