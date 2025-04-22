<?php
    function calcularMedia($numeros){
        if(count($numeros) !== 5){ //Verifica que el arreglo contenga 5 números
            return "Debes ingresar 5 números";
        }

        $suma = 0;
        foreach ($numeros as $n) {
            if (!is_numeric($n) || $n <= 0){ //Se valida que el dato ingresado sea valido
                return "Todos los valores deben ser números";
            }
            $suma += $n; //Acumula la suma de los números ingresados
        }

        $media = $suma / 5; //se calcula la media de los 5 números ingresados
        return "La media es: " . number_format($media, 2); //Mensaje al usuario y formatea a salida a 2 decimales
    }

    function calcularSuma(){
        $suma = 0;
        for($i = 1; $i <= 1000; $i++){
            $suma += $i;
        }
        return "La suma de los números de 1 hasta 100 es: " . number_format($suma);
    }

?>