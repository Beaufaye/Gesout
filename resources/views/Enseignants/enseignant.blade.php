@include('resources.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href=""><button type="button" class="btn btn-danger">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES ENSEIGNANTS</h1>
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
             <th>Filière</th>
             <th>Contact</th>
         </tr>
        </thead>

        <tbody>
         
        <tr>
            <th></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td>
                <a href="" class="btn btn-dark">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
       
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