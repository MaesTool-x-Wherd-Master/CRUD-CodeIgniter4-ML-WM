<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LibroModel;

class LibroController extends Controller
{
  public function obtenerLibros()
  {
    $libro = new LibroModel();
    $mensaje = session('mensaje');
    $datosLibro = [
      'mensaje' => $mensaje,
      'libros' => $libro->paginate(10),
      'pager' => $libro->pager
    ];

    return view('libros', $datosLibro);
  }

  public function darAltaLibro()
  {
    $imagen = $this->request->getFile('image');
    $nuevoNombre = $imagen->getRandomName();
    $imagen->move('images/portadas-libros/', $nuevoNombre);

    $datosForm = [
      'isbn' => $this->request->getVar('isbn'),
      'title' => $this->request->getVar('title'),
      'review' => $this->request->getVar('review'),
      'image' => $nuevoNombre
    ];

    $libro = new LibroModel();
    $libro->save($datosForm);

    if ($libro > 0) {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '1');
    } else {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '0');
    }
  }

  public function obtenerLibro($idLibro)
  {
    $libro = new LibroModel();
    $datosLibro['libro'] = $libro->find($idLibro);
    return view('editar', $datosLibro);
  }

  public function actualizarLibro($idLibro)
  {
    $libro = new LibroModel();
    $libroBD = $libro->find($idLibro);

    $viejo_nombre_imagen = $libroBD['image'];

    $imagen = $this->request->getFile('image');

    if ($imagen->isValid() && !$imagen->hasMoved()) {

      if (file_exists('images/portadas-libros/' . $viejo_nombre_imagen)) {
        unlink('images/portadas-libros/' . $viejo_nombre_imagen);
      }

      $nuevoNombre = $imagen->getRandomName();
      $imagen->move('images/portadas-libros/', $nuevoNombre);

    } else {
      $nuevoNombre = $viejo_nombre_imagen;
    }

    $datosForm = [
      'isbn' => $this->request->getVar('isbn'),
      'title' => $this->request->getVar('title'),
      'review' => $this->request->getVar('review'),
      'image' => $nuevoNombre
    ];

    $libro->update($idLibro, $datosForm);

    if ($libro) {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '6');
    } else {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '7');
    }

  }

  public function eliminarLibro($idLibro)
  {
    $libro = new LibroModel();
    $datos = $libro->find($idLibro);
    $imagenFile = $datos['image'];
    if (file_exists('images/portadas-libros/' . $imagenFile)) {
      unlink('images/portadas-libros/' . $imagenFile);
    }

    $libro->delete($idLibro);

    if ($libro) {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '4');
    } else {
      return redirect()->to(base_url() . 'Libros')->with('mensaje', '5');
    }
  }
}