<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;
    public function combustivel() {
        return $_GET['combustivel'];
    }
    public function calcular() {
        $valorcombustivel = $_GET['valor'];
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $consumoCombustivel = round(($distancia / $autonomia ) * $valorcombustivel, 2);

        return $consumoCombustivel;
    }
}
