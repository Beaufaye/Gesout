@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">MODIFIER UN ETUDIANT</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('etudiant.update', [$etudiant->id])}}" method="POST" class="form-group">
       @method('PATCH')
        @csrf
        
        <input type="text" name="id" style="display: none;" value="{{ $etudiant->id }}">

        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
              <input type="text" name="nom" class="form-control" value="{{ $etudiant->nom }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
              <input type="text" name="prenom" class="form-control" value="{{ $etudiant->prenom }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Sexe</label>
            <div class="col-sm-10">
                <select class="form-select" name="sexe" aria-label="Default select example" value="{{ $etudiant->sexe }}" required>
                    <option selected>Quel est votre sexe</option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="telephone" class="col-sm-2 col-form-label">Filière</label>
            <div class="col-sm-10">
              <input type="text" name="filiere" class="form-control" value="{{ $etudiant->filiere }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="sexe" class="col-sm-2 col-form-label">Contact</label>
            <div class="col-sm-10">
                <input type="number" name="contact" class="form-control" value="{{ $etudiant->contact }}" required>
              </div>
          </div>
          <button type="submit" class="btn btn-danger">MODIFIER</button>
          <a href="{{route('etudiant.index')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES ETUDIANTS</button></a>
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