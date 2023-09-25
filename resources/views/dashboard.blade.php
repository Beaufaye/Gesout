<!DOCTYPE html>
<html lang="en">

<head>
  @include('resources.head');
</head>

<body>

  @include('resources.header')

  @include('resources.nav')

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <img src="assets/img/etu.png" style="width: 990px">
              <h2 class="text-center text-danger">"Se former, c'est avancer!"</h2>
            </div><!-- End Sales Card -->

      </div>
        </div>
    </section>

  </main><!-- End #main -->

  @include('resources.footer')

  @include('resources.js')
</body>

</html>