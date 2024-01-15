<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function modalidade(){
        return view("site.modalidade.modalidade");
    }
}
