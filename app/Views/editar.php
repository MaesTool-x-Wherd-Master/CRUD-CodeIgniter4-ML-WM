<?php
// $id = $datos[0]['id_book'];
// $isbn = $datos[0]['isbn'];
// $titulo = $datos[0]['title'];
// $resena = $datos[0]['review'];

// $imagen = $datos[0]['image'];
// echo '<pre>';
// print_r($imagen);
// echo '</pre>';
?>

<?php include('template/cabecera.php') ?>
<main class="d-flex justify-content-center mt-5">

  <form class="row w-75 g-3" action="<?= base_url('ActualizarLibro/' . $libro['id_book']) ?>" method="post"
    enctype="multipart/form-data">
    <div>
      <h2>Editar Libro</h2>
    </div>
    <div>
      <input class="form-control" type="hidden" name="id" value="<?= $libro['id_book'] ?>">
    </div>
    <div class="col-lg-4 col-sm-12">
      <label for="isbn">
        ISBN:
      </label>
      <input class="form-control" type="text" id="isbn" name="isbn" value="<?= $libro['isbn'] ?>">
    </div>

    <div class="col-lg-6 col-sm-12">
      <label for="title">
        Título del libro:
      </label>
      <input class="form-control" type="text" id="title" name="title" value="<?= $libro['title'] ?>">
    </div>

    <div class="col-lg-4">
      <label for="review">
        Reseña del libro:
      </label><br>
      <textarea class="form-control" name="review" id="review" cols="30" rows="10"><?= $libro['review'] ?></textarea>
    </div>

    <div class="col-lg-6">
      <label for="image">
        Portada o imagen del libro:
      </label><br>
      <img class="img-thumbnail" src="<?= base_url('images/portadas-libros/') . $libro['image'] ?>" alt="" width="100">
      <input class="form-control" type="file" id="image" name="image">
    </div>

    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-warning mb-3">Guardar</button>
    </div>


  </form>

</main>

<!-- CDN Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
  integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
  integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>