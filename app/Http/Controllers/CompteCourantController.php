<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteCourantController extends Controller
{
     public function add()
  {
    return view('compteCourant.add');
  }

    public function getAll()
  {
    return view('compteCourant.liste');
  }

  public function edit($id)
  {
    return view('compteCourant.edit');
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
