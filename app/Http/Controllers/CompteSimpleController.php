<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteSimpleController extends Controller
{
    public function add()
  {
    return view('compteSimple.add');
  }

    public function getAll()
  {
    return view('compteSimple.liste');
  }

  public function edit($id)
  {
    return view('compteSimple.edit');
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
