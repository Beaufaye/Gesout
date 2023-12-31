@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('etudiant.create')}}"><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES ETUDIANTS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
        <thead>
         <tr>
             <th>ID</th>
             <th>Nom</th>
             <th>Prenom</th>
             <th>Sexe</th>
             <th>Filière</th>
             <th>Contact</th>
             <th>Mod/Sup</th>
         </tr>
        </thead>

        <tbody>
          @foreach($etudiant as $etudiant)
        <tr>
            <th>{{ $etudiant->id}}</th>
            <td>{{ $etudiant->nom}}</td>
            <td>{{ $etudiant->prenom}}</td>
            <td>{{ $etudiant->sexe}}</td>
            <td>{{ $etudiant->filiere}}</td>
            <td>{{ $etudiant->contact}}</td>
            
            <td>
                <a href="{{route('etudiant.edit', $etudiant->id )}}" class="btn btn-dark">Modifier</a>
                <a href="{{url('supprim-etudiant/' .$etudiant->id)}}" class="btn btn-danger">Supprimer</a>
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