<?php

namespace App\Services;

use App\Models\Book;

class BookService {
    public function getAllBook()
    {
        return Book::all(); // Retorna la colección de libros
    }

}
