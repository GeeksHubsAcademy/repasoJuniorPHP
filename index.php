<?php
    //declare(strict_types=1);
    

    //Pasar por valor


    // $primera = "Cerdito 1";

    // $segunda = $primera;

    // $primera = "Cerdito 2";


    // echo $primera.PHP_EOL;
    // echo $segunda;

    //Paso por referencia

    // $primera = "Cerdito 1";

    // $segunda = &$primera;

    // $primera = "Un pony";

    // echo $primera.PHP_EOL;
    // echo $segunda;



    //Array multidimensional

    // $arrayMulti = [
    //     "primerValor" => "Raquel",
    //     "segundoValor" => "Roberto",
    //     "tercerValor" => "Andreu",
    //     "segundoArray" => [
    //         "Php",
    //         "React",
    //         "Botijo",
    //         "tercerArray" => [
    //             "velocidadMax" => 60,
    //             "velocidadAlien" => 120,
    //             "cuartoArray" => [
    //                 "Dormir",
    //                 "Cafeina Free",
    //                 "Agua",
    //                 "Crazy Spice",
    //                 "Cafe de Wayco",
    //                 "Esmorçaret"
    //             ]
    //         ]
    //     ]
    // ];

    // echo $arrayMulti["segundoArray"]["tercerArray"]["cuartoArray"][5];

    // $arr = [
    //     5 => 1,
    //     12 => 2,
    //     12 => 5,
    //     "Callum",
    //     "Raquel",
    //     "Ivan",
    //     "Juan",
    //     "Rafa",
    //     "Rodrigo"
    // ];

    //var_dump(sizeof($arr));

    // $arr[] = 56; // Esto es lo mismo que $arr[13] = 56;
    
    // // en este punto de el script
    // $arr["x"] = 42; // Esto agrega un nuevo elemento a
    // // el array con la clave "x"
    // unset($arr[5]); // Esto elimina el elemento del array
    // unset($arr); // Esto elimina el array completo


    // $bebidas = [
    //     "cerveza",
    //     "ron",
    //     "cazalla",
    //     "cafe",
    //     "agua",
    //     "cremaet",
    //     "barrejat",
    //     "aguardiente",
    //     "zumo",
    //     "vino",
    //     "dr.pepper",
    //     "monster"
    // ];

    // //$length = sizeof($bebidas);

    // // for($i = 0; $i < sizeof($bebidas); $i++){
    // //     echo 'Juanma bebe '.$bebidas[$i].PHP_EOL;
        
    // // };

    // // $bebidas[] = "Agua potable";

    // // var_dump($bebidas);

    // // unset($bebidas[4]);

    // // var_dump($bebidas);

    // $array = [
    //     "tartar",
    //     "cebiche",
    //     "bocadillo",
    //     "tortilla"
    // ];

    // // foreach ($array as $valor) {
    // //     echo $valor.PHP_EOL;
    // // };


    // foreach ($array as $key => $valor){
        
    //     if($key === 0){
    //         continue;
    //     }
    //     echo $key.'  '.$valor.PHP_EOL;
    // };

    // include 'auxiliar.php';
    // //require 'auxiliar.php';

    // // echo $enemigo3;

    // // $resultado = sumar(2,5);

    // // echo $resultado;

    // echo sumar(2,5);

    // $nombre = "jose";


    // $nombre .= " vicente ....";
    // //equivale al += de js



    // echo $nombre;

    // $argumento1 = 2;
    // $argumento2 = 5;


    // function restar(int $argumento1, int $argumento2){
    //     return $argumento1 - $argumento2;
    // };

    // restar($argumento1, $argumento2);

    // function prueba(bool $param) {

    //     if(!$param){
    //         echo "Hola Callum";
    //     };

    //     return; 
    // }
    
    // prueba(true);

    // $andreu = "aprendiendo PHP en el bootcamp";

    // $roberto = &$andreu;

    // $andreu = "suspendo...";

    // echo $roberto;

    // $numero1 = 12.6;

    // $numero2 = 7.9;

    

    // function sumar(float $numero1, float $numero2){
    //     return $numero2 + $numero1;
    // };

    // function restar(float $numero3, float $numero4) : int {

    //     return $numero3 - $numero4;
    // };

    // $numero3 = 9.7;

    // $numero4 = 5.1;
    

    // $resultado = sumar($numero1, $numero2);
    // $resultado2 = restar($numero3, $numero4);

    // echo $resultado2;



    // function sum(...$arrayQueHaJuntadoTodo){

    //     $resultado_total = 0;

    //     foreach ($arrayQueHaJuntadoTodo as $valor){
    //         $resultado_total += $valor;
    //     };

    //     return $resultado_total;

    // }

    // echo(sum(4,7,13,8,666,1));

    // $arraySenseRes;

    // if(empty($arraySenseRes)){
    //     echo "noooooooooooooooooooooooooo";
    // };

    //var_dump($tiempo_libre);

    $array = [
        "primero" => "soccer",
        "segundo" => [
            "botas",
            "pantalon"
        ]
    ];

    if(isset($array["segundo"][1])){
        echo "Existe pantalón";
    }else {
        echo "Estamos sin pantalon :( ";
    };


?>