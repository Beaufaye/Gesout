@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">ENREGISTREMENT D'UNE SOUTENANCE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('soutenance.update', [$sout->id])}}" method="POST" class="form-group">
        @method('PATCH')
        @csrf
        
        <input type="text" name="id" style="display: none;" value="{{ $sout->id }}">
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Etudiant</label>
            <div class="col-sm-10">
                <select name="etudiant" class="form-select" value="{{ $sout->etudiant }}" required>
                    <option>Choisissez l'étudiant</option>
                    @foreach ($etudiant as $etud)
                    <option value="{{ $etud->nom }} {{ $etud->prenom }}">{{ $etud->nom }} {{ $etud->prenom }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
              <input type="date" name="date" class="form-control" value="{{ $sout->date }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Jury</label>
            <div class="col-sm-10">
                <div class="col-sm-5">
                    <select name="jury" class="form-select" value="{{ $sout->jury }}" required>
                        <option>Choisissez le Jury</option>
                        @foreach ($jury as $jur)
                        <option value="{{ $jur->id }}">{{ $jur->id }}</option>
                        @endforeach
                    </select>
                </div>
                
                
            </div>
          </div>
          <div class="mb-3 row">
            <label for="telephone" class="col-sm-2 col-form-label">Salle</label>
            <div class="col-sm-10">
                <select name="salle" class="form-select" value="{{ $sout->salle }}" required>
                    <option>Choisissez la salle</option>
                    @foreach ($salle as $sal)
                    <option value="{{ $sal->nom }}">{{ $sal->nom }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          
          <button type="submit" class="btn btn-danger">ENREGISTRER</button>
          <a href="{{route('soutenance.index')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES SOUTENANCES</button></a>
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