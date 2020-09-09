<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSalarieController extends Controller
{
  public function add()
  {
    return view('clientSalarie.add');
  }

  public function getAll()
  {
    return view('clientSalarie.liste');
  }

  public function edit($id)
  {
    return view('clientSalarie.edit');
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
