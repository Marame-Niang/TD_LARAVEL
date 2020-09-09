<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteBloqueController extends Controller
{
  public function add()
  {
    return view('compteBloque.add');
  }

  public function getAll()
  {
    return view('compteBloque.liste');
  }

  public function edit($id)
  {
    return view('compteBloque.edit');
  }

  public function update()
  {
    return $this->getAll();
  }

  public function delete($id)
  {
    return $this->getAll();
  }
}
