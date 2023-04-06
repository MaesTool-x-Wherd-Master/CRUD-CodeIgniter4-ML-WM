<?php include('template/cabecera.php') ?>

<main>
  <h2>Libros Registrados</h2>
  <table class="table table-success table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>ISBN</th>
        <th>Título</th>
        <th>Reseña</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($libros as $libro): ?>
        <tr>
          <td>
            <?= $libro['id_book'] ?>
          </td>
          <td>
            <?= $libro['isbn'] ?>
          </td>
          <td>
            <?= $libro['title'] ?>
          </td>
          <td>
            <?= $libro['review'] ?>
          </td>
          <td>
            <img width="50" src="<?= base_url('images/portadas-libros/') . $libro['image'] ?>"
              alt="<?= $libro['title'] ?>">
          </td>
          <td>
            <div class="container">
              <div class="row flex-nowrap justify-content-center align-items-center g-2">
                <div class="col">

                  <a href="<?= base_url() . 'editarLibro/' . $libro['id_book'] ?>">
                    <button type="button" class="btn btn-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path
                          d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                      </svg>
                      Editar
                    </button>
                  </a>
                </div>
                <div class="col">
                  <a href="<?= base_url() . 'eliminarLibro/' . $libro['id_book'] ?>">
                    <button type="button" class="btn btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash3" viewBox="0 0 16 16">
                        <path
                          d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                      </svg>
                      Eliminar
                    </button>
                  </a>
                </div>

              </div>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- Pagination -->
  <?php if ($pager): ?>
    <?= $pager->links() ?>
  <?php endif; ?>
</main>

<!-- CDN Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
  integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
  integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<!-- Mensajes -->
<script type="text/javascript">
  let mensaje = '<?php echo $mensaje ?>';
  if (mensaje == '1') {
    alert('El registro se realizó correctamente');
  } else if (mensaje == '0') {
    alert('No se pudo guardar el registro');
  } else if (mensaje == '2') {
    alert('El registro se actualizó correctamente');
  } else if (mensaje == '3') {
    alert('No se pudo actualizar el registro');
  } else if (mensaje == '4') {
    alert('El registro se borró exitosamente');
  } else if (mensaje == '5') {
    alert('No se pudo borrar el registro');
  } else if (mensaje == '6') {
    alert('El registro se ha actualizado correctamente');
  } else if (mensaje == '7') {
    alert('No se pudo actualizar el registro');
  }
</script>
</body>

</html>