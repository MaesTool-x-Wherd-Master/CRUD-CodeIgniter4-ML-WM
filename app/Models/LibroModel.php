<?php

namespace App\Models;

use CodeIgniter\Model;

class LibroModel extends Model
{
  protected $table      = 'tbl_books';
  // Uncomment below if you want add primary key
  protected $primaryKey = 'id_book';
  protected $allowedFields = ['isbn', 'title', 'review', 'image'];
}
