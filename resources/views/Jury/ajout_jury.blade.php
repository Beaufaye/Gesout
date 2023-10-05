@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UN JURY</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('jury.store')}}" method="POST" class="form-group">
        @csrf
        
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Président du Jury</label>
            <div class="col-sm-10">
              <input type="text" name="president_jury" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Directeur de Mémoire</label>
            <div class="col-sm-10">
                <select name="nom_dm" class="form-select" required>
                    <option>Choisissez le directeur de mémoire</option>
                    @foreach ($dm as $d)
                    <option value="{{ $d->nom }} {{ $d->prenom }}">{{ $d->nom }} {{ $d->prenom }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Maitre de Stage</label>
            <div class="col-sm-10">
                <select name="nom_ms" class="form-select" required>
                    <option>Choisissez le maitre de stage</option>
                    @foreach ($ms as $m)
                    <option value="{{ $m->nom }} {{ $m->prenom }}">{{ $m->nom }} {{ $m->prenom }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          
          <button type="submit" class="btn btn-danger">ENREGISTRER</button>
          <a href="{{route('jury.index')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES JURYS</button></a>
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