@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UNE SALLE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('salle.store')}}" method="POST" class="form-group">
        @csrf
        
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom de la salle</label>
            <div class="col-sm-10">
              <input type="text" name="nom" class="form-control" required>
            </div>
          </div>
          
          <button type="submit" class="btn btn-danger">ENREGISTRER</button>
          <a href="{{route('salle.index')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES SALLES</button></a>
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