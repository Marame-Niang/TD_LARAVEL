<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
  public function add()
  {
    return view('entreprise.add');
  }

  public function getAll()
  {
    return view('entreprise.liste');
  }

  public function edit($id)
  {
    return view('entreprise.edit');
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
