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
        // VALORES MONETÁRIOS NO PADRÃO SQL

            public static function numberWithoutPoints($number)
            {
                $valor = str_replace("." , "" , $number); // Primeiro tira os pontos
                $valor = str_replace("," , "." , $valor); // Agora tira as virgulas

                return $valor;

            }

    //========================================================================================
    // VALORES MONETÁRIOS NO PADRÃO BRASILEIRO
            public static function numberBrazilianModel($num)
            {
                return number_format($num, 2, ',', '.'); // retorna R$100.000,50
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

    //========================================================================================
    // FUNÇÃO PARA CRIAR MASCARAS

            public static function mask($val, $mask)
            {
                $maskared = '';
                $k = 0;
                for($i = 0; $i<=strlen($mask)-1; $i++)
                {
                    if($mask[$i] == '#')
                    {
                        if(isset($val[$k])) {
                            $maskared .= $val[$k++];
                        }
                    }
                    else
                    {
                        if(isset($mask[$i])) {
                            $maskared .= $mask[$i];
                        }
                    }
                }
                return $maskared;
            }





}
