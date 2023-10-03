@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UNE DEMANDE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('demande.store')}}" method="POST" class="form-group">
        @csrf
        
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom de l'étudiant</label>
            <div class="col-sm-10">
                <select name="nom_etudiant" class="form-select" required>
                    <option>Choisissez l'étudiant</option>
                    @foreach ($etudiant as $etud)
                    <option value="{{ $etud->nom }} {{ $etud->prenom }}">{{ $etud->nom }} {{ $etud->prenom }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Période</label>
            <div class="col-sm-10">
                <select name="periode" class="form-select" required>
                    <option>Sélectionnez la période</option>
                    <option>Décembre</option>
                    <option>Janvier</option>
                    <option>Mars</option>
                    <option>Juin</option>
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            
            <div class="col-sm-10">
                <select name="statut" class="form-select" hidden>
                    <option value="En attente"></option>
                </select>
            </div>
          </div>
          <button type="submit" class="btn btn-danger">ENREGISTRER</button>
          <a href="{{route('demande.index')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES DEMANDES</button></a>
      </form>



    </div>
  </section>

</main><!-- End #main -->

<br>
<br>
<br>
<br>
<br>
@include('resources.footer')