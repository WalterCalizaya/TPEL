<?php 
    // Crear un manejador de cURL
    $url = "https://entacna.org/admin/curl/ofertas";
    $recurso = curl_init($url);
    curl_setopt($recurso, CURLOPT_RETURNTRANSFER, 1);

    // Ejecutar
    $return = curl_exec($recurso);
    
    // Comprobar si ocurrió un error
    if (!curl_errno($recurso)) {
        $info = curl_getinfo($recurso);
        echo $return.'<br>';
        echo 'Se tardó ', $info['total_time'], ' segundos en enviar una petición a ', $info['url'], "\n";
    }
    
    // Cerrar el manejador
    curl_close($recurso);
?>