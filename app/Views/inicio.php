<?php include('template/cabecera.php') ?>
<main class="container-sm p-5 text-center">
  <div class="bg-light rounded-3">
    <div class="container-lg">
      <h1 class="display-2 fw-bold">CRUD de Libros</h1>
      <p class="col fs-4">Bienvenido al sistema CRUD de libros hecho con el framework CodeIgniter 4.</p>
      <a href="<?= base_url('Libros') ?>">
        <button class="btn btn-primary btn-lg" type="button">Ver lista de Libros</button>
      </a>
    </div>
  </div>
</main>

<!-- CDN Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>