<?php
    function calcularMedia($numeros){
        if(count($numeros) !== 5){ //Verifica que el arreglo contenga 5 números
            return "Debes ingresar 5 números"; //mensaje el usuario
        }

        $suma = 0;
        foreach ($numeros as $n) {
            if (!is_numeric($n) || $n <= 0){ //Se valida que el dato ingresado sea valido
                return "Todos los valores deben ser números"; //mensaje al usuario
            }
            $suma += $n; //Acumula la suma de los números ingresados
        }

        $media = $suma / 5; //se calcula la media de los 5 números ingresados
        return "La media es: " . number_format($media, 2); //Mensaje al usuario y formatea a salida a 2 decimales
    }

    function calcularSuma(){
        $suma = 0; //Se inicializa el acumulador
        for($i = 1; $i <= 1000; $i++){ //Se repite hasta llegar a 1000
            $suma += $i; //Acumula la suma de los primeros 1000 números
        }
        return "La suma de los números de 1 hasta 100 es: " . number_format($suma); //Salida el usuario formateda
    }

    function calcularSuma10Pares() {
        $suma = 0; //Se inicializa el acumulador en 0
        $numero = 2; // Se inicializa el contador en 2
        for ($i = 1; $i <= 10; $i++) { //se recorre los numeros de 1 al 10
            $suma += $numero; //se acumula la suma de los numeros pares
            $numero += 2; //se suma 2 para los numeros pares
        }
        return "La suma de los 10 primeros números pares es: $suma"; //mensaje el usuario con el resultado
    }

    function sumaParesEImpares() {
        $sumaPares = 0; //se inicializa la variable en 0
        $sumaImpares = 0; //se inicializa la variable en 0
    
        for ($i = 1; $i <= 200; $i++) {
            if ($i % 2 == 0) { // si la condicion se cumple entra al bloque de instrucciones
                $sumaPares += $i; //se suman los numeros pares
            } else { //sino se cumple
                $sumaImpares += $i; //se suman los numeros impares
            }
        }
    
        return [ //se retorna un arreglo asociativo
            'pares' => $sumaPares,
            'impares' => $sumaImpares
        ];
    }

    function clasificarEdad($edades){
        $resultados = []; //se inicializa un arreglo vacio
        
        foreach($edades as $edad){
            if (!is_numeric($edad) || $edad < 0) { // se verifica que los datos sean validos
                $resultados[] = "Edad inválida";
            } elseif ($edad <= 12) { //si la edad es menor o igual a 12
                $resultados[] = "Niño"; // se clasifica como niño dentro del arreglo
            } elseif ($edad <= 17) { //si la edad es menor o igual a 17
                $resultados[] = "Adolescente"; // se clasifica como adolescente
            } elseif ($edad <= 64) { // si al edad es menor o igual a 64
                $resultados[] = "Adulto"; //se clasifica como adulto
            } else {
                $resultados[] = "Adulto Mayor"; // de otro modo se clasifica como adulto mayor
            }
        }
        return $resultados; //se retorna los resultados
    }

    function dividirPresupuesto($presupuesto){
        $departamentos = [
            'Ginecologia' => 0.40,
            'Traumatologia' => 0.35,
            'Pediatria' => 0.25,
            
        ];

        $resultado = [];

        foreach ($departamentos as $departamento => $porcentaje) {
            $resultado[$departamento] = $presupuesto * $porcentaje; //se calcula el presupuesto de cada departamento
        }

        return $resultado; //se retorna el resultado



    }

    function estacionAno(){




    }


    function Imprimir15Potencias(){
        
    }


    
    function imprimirMultiplosDe4($n) {
        for ($i = 1; $i <= $n; $i++) {
        $resultado = 4 * $i;
        echo "4 * $i = $resultado<br>";
        }
    }


    function calcularEstadisticas($notas) {
        $cantidad = count($notas);
        $suma = array_sum($notas);
        $promedio = $suma / $cantidad;
    
        $sumaCuadrados = 0;
        foreach ($notas as $nota) {
            $sumaCuadrados += pow($nota - $promedio, 2);
        }
        $desviacion = sqrt($sumaCuadrados / $cantidad);
    
        $min = min($notas);
        $max = max($notas);
    
        echo '<div class="contenedor">';
        echo "<h3>Resultados Estadísticos</h3>";
        echo "<span>Promedio: " . round($promedio, 2) . "</span>";
        echo "<span>Desviación Estándar: " . round($desviacion, 2) . "</span>";
        echo "<span>Nota mínima: $min</span>";
        echo "<span>Nota máxima: $max</span>";
        echo '</div>';
    }
?>
