<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Popust extends Model
{
    private $tabela = "popust";

    public $idPopust;
    public $idUslugaSenzor;
    public $idUsluga;
    public $pocetakGodina;
    public $krajGodina;
    public $pocetakMesec;
    public $krajMesec;
    public $popustNaSenzore;
    public $popustNaApp;
    public $popustNaUslugu;

}
