

<?php

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


    $bebidas = [
        "cerveza",
        "ron",
        "cazalla",
        "cafe",
        "agua",
        "cremaet",
        "barrejat",
        "aguardiente",
        "zumo",
        "vino",
        "dr.pepper",
        "monster"
    ];

    //$length = sizeof($bebidas);

    // for($i = 0; $i < sizeof($bebidas); $i++){
    //     echo 'Juanma bebe '.$bebidas[$i].PHP_EOL;
        
    // };

    // $bebidas[] = "Agua potable";

    // var_dump($bebidas);

    // unset($bebidas[4]);

    // var_dump($bebidas);

    $array = [
        "tartar",
        "cebiche",
        "bocadillo",
        "tortilla"
    ];

    // foreach ($array as $valor) {
    //     echo $valor.PHP_EOL;
    // };


    foreach ($array as $key => $valor){
        
        if($key === 0){
            continue;
        }
        echo $key.'  '.$valor.PHP_EOL;
    };


?>