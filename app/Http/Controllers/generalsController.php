<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\usuarios;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class generalsController extends Controller
{
    //========================================================================================
        // GERAR SENHA ALFANUMERICA DE 8 DIGITOS

            public static function getRandomCode()
            {
                $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!?#$%";
                $valor = '';
                for($m=0; $m<8; $m++)
                {
                    $index = rand(0, strlen($an));
                    $valor.= substr($an,$index,1);
                }

                return $valor;

            }

    //========================================================================================
        // RETIRAR PARENTESES E TRAÇOS DO TELEFONE

            public static function phoneWithoutPoints($num)
            {
                $num = str_replace("(" , "" , $num); // Primeiro tira os parenteses
                $num = str_replace(")" , "" , $num); // Primeiro tira os parenteses
                $num = str_replace(" " , "" , $num); // Primeiro tira os parenteses
                $num = str_replace("-" , "" , $num); // Primeiro tira os traços

                return $num;
            }
    //========================================================================================
        // RETIRAR PONTOS DO NÚMERO

            public static function numberWithoutPoints($number)
            {
                $valor = str_replace("." , "" , $number); // Primeiro tira os pontos
                $valor = str_replace("," , "." , $valor); // Primeiro tira os pontos

                return $valor;

            }

    //========================================================================================
    // RETIRAR BARRAS DA DATA

            public static function dateWithoutslash($date)
            {
                $valor = str_replace("/" , "" , $date); // Retirar as barras
                return $valor;
            }

    //========================================================================================
    // SUBSTITUIR BARRAS POR TRAÇOS NA DATA

            public static function dateSubstituteslash($date)
            {
                return implode("-",array_reverse(explode("/",$date)));
            }

            public static function dateBrazilian($date)
            {
                return implode("/",array_reverse(explode("-",$date)));
            }




}
