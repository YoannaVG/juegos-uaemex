<?php
// ==========================================================================
// ARCHIVO: php/servidor.php
// Backend en PHP para validación del crucigrama (UAEMéx)
// Estricto apego a requisitos: Procesamiento lineal y directo, sin funciones ni clases personalizadas
// ==========================================================================

header('Content-Type: text/html; charset=utf-8');

// Lectura y saneamiento del parámetro temática
$tematica = '';
if (isset($_POST['tematica'])) {
    $tematica = htmlspecialchars(trim($_POST['tematica']));
}

$aciertos = 0;
$totalPalabras = 4;
$nombreTematica = '';
$retroalimentacion = '';

// Procesamiento directo y lineal según la temática elegida
if ($tematica === 'frutas') {
    $nombreTematica = 'Frutas y Verduras';

    // Lectura y saneamiento de palabras
    $p1 = '';
    if (isset($_POST['f_p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['f_p1'])));
    } elseif (isset($_POST['p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['p1'])));
    }

    $p2 = '';
    if (isset($_POST['f_p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['f_p2'])));
    } elseif (isset($_POST['p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['p2'])));
    }

    $p3 = '';
    if (isset($_POST['f_p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['f_p3'])));
    } elseif (isset($_POST['p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['p3'])));
    }

    $p4 = '';
    if (isset($_POST['f_p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['f_p4'])));
    } elseif (isset($_POST['p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['p4'])));
    }

    // Validación de Palabra 1: MANZANA
    if ($p1 === 'MANZANA') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 1. Horizontal: <strong>' . $p1 . '</strong> (¡Correcto! Excelente deducción)</p>';
    } else {
        $valorMostrado = ($p1 !== '') ? $p1 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 1. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es MANZANA)</p>';
    }

    // Validación de Palabra 2: ZANAHORIA
    if ($p2 === 'ZANAHORIA') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 2. Horizontal: <strong>' . $p2 . '</strong> (¡Correcto! Muy bien)</p>';
    } else {
        $valorMostrado = ($p2 !== '') ? $p2 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 2. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es ZANAHORIA)</p>';
    }

    // Validación de Palabra 3: MANGO
    if ($p3 === 'MANGO') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 3. Vertical: <strong>' . $p3 . '</strong> (¡Correcto! Acertaste)</p>';
    } else {
        $valorMostrado = ($p3 !== '') ? $p3 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 3. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es MANGO)</p>';
    }

    // Validación de Palabra 4: AGUACATE
    if ($p4 === 'AGUACATE') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 4. Vertical: <strong>' . $p4 . '</strong> (¡Correcto! Orgullo mexicano)</p>';
    } else {
        $valorMostrado = ($p4 !== '') ? $p4 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 4. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es AGUACATE)</p>';
    }

} elseif ($tematica === 'valores') {
    $nombreTematica = 'Valores y Sentimientos';

    // Lectura y saneamiento de palabras
    $p1 = '';
    if (isset($_POST['v_p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['v_p1'])));
    } elseif (isset($_POST['p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['p1'])));
    }

    $p2 = '';
    if (isset($_POST['v_p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['v_p2'])));
    } elseif (isset($_POST['p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['p2'])));
    }

    $p3 = '';
    if (isset($_POST['v_p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['v_p3'])));
    } elseif (isset($_POST['p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['p3'])));
    }

    $p4 = '';
    if (isset($_POST['v_p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['v_p4'])));
    } elseif (isset($_POST['p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['p4'])));
    }

    // Validación de Palabra 1: RESPETO
    if ($p1 === 'RESPETO') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 1. Horizontal: <strong>' . $p1 . '</strong> (¡Correcto! Valor fundamental UAEMéx)</p>';
    } else {
        $valorMostrado = ($p1 !== '') ? $p1 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 1. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es RESPETO)</p>';
    }

    // Validación de Palabra 2: EMPATIA
    if ($p2 === 'EMPATIA' || $p2 === 'EMPATÍA') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 2. Horizontal: <strong>' . $p2 . '</strong> (¡Correcto! Excelente empatía)</p>';
    } else {
        $valorMostrado = ($p2 !== '') ? $p2 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 2. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es EMPATIA)</p>';
    }

    // Validación de Palabra 3: LEALTAD
    if ($p3 === 'LEALTAD') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 3. Vertical: <strong>' . $p3 . '</strong> (¡Correcto! Gran valor universitario)</p>';
    } else {
        $valorMostrado = ($p3 !== '') ? $p3 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 3. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es LEALTAD)</p>';
    }

    // Validación de Palabra 4: AMOR
    if ($p4 === 'AMOR') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 4. Vertical: <strong>' . $p4 . '</strong> (¡Correcto! Afecto universal)</p>';
    } else {
        $valorMostrado = ($p4 !== '') ? $p4 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 4. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es AMOR)</p>';
    }

} elseif ($tematica === 'personajes') {
    $nombreTematica = 'Personajes Históricos y Películas';

    // Lectura y saneamiento de palabras
    $p1 = '';
    if (isset($_POST['h_p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['h_p1'])));
    } elseif (isset($_POST['p1'])) {
        $p1 = strtoupper(htmlspecialchars(trim($_POST['p1'])));
    }

    $p2 = '';
    if (isset($_POST['h_p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['h_p2'])));
    } elseif (isset($_POST['p2'])) {
        $p2 = strtoupper(htmlspecialchars(trim($_POST['p2'])));
    }

    $p3 = '';
    if (isset($_POST['h_p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['h_p3'])));
    } elseif (isset($_POST['p3'])) {
        $p3 = strtoupper(htmlspecialchars(trim($_POST['p3'])));
    }

    $p4 = '';
    if (isset($_POST['h_p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['h_p4'])));
    } elseif (isset($_POST['p4'])) {
        $p4 = strtoupper(htmlspecialchars(trim($_POST['p4'])));
    }

    // Validación de Palabra 1: ZAPATA
    if ($p1 === 'ZAPATA') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 1. Horizontal: <strong>' . $p1 . '</strong> (¡Correcto! Emiliano Zapata)</p>';
    } else {
        $valorMostrado = ($p1 !== '') ? $p1 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 1. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es ZAPATA)</p>';
    }

    // Validación de Palabra 2: COCO
    if ($p2 === 'COCO') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 2. Horizontal: <strong>' . $p2 . '</strong> (¡Correcto! Película de Día de Muertos)</p>';
    } else {
        $valorMostrado = ($p2 !== '') ? $p2 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 2. Horizontal: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es COCO)</p>';
    }

    // Validación de Palabra 3: HIDALGO
    if ($p3 === 'HIDALGO') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 3. Vertical: <strong>' . $p3 . '</strong> (¡Correcto! Don Miguel Hidalgo y Costilla)</p>';
    } else {
        $valorMostrado = ($p3 !== '') ? $p3 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 3. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es HIDALGO)</p>';
    }

    // Validación de Palabra 4: NEMO
    if ($p4 === 'NEMO') {
        $aciertos = $aciertos + 1;
        $retroalimentacion .= '<p class="resultado-item correcto">✅ 4. Vertical: <strong>' . $p4 . '</strong> (¡Correcto! Buscando a Nemo)</p>';
    } else {
        $valorMostrado = ($p4 !== '') ? $p4 : 'Sin responder';
        $retroalimentacion .= '<p class="resultado-item incorrecto">❌ 4. Vertical: <em>' . $valorMostrado . '</em> (Incorrecto - La respuesta correcta es NEMO)</p>';
    }

} else {
    $nombreTematica = 'No especificada';
    $retroalimentacion = '<p class="resultado-item incorrecto">⚠️ Selecciona una temática válida para evaluar el crucigrama.</p>';
}

// Cálculo del puntaje sobre base 10 para alumnos de preparatoria
$calificacion = ($aciertos / $totalPalabras) * 10;

// Mensaje institucional de retroalimentación
$mensajeEvaluacion = '';
if ($aciertos === $totalPalabras) {
    $mensajeEvaluacion = '<div class="mensaje-exito">🌟 ¡Felicidades! Lograste una calificación perfecta de ' . $calificacion . '/10. ¡Excelente dominio de conceptos!</div>';
} elseif ($aciertos >= 2) {
    $mensajeEvaluacion = '<div class="mensaje-parcial">👍 ¡Buen esfuerzo! Tu calificación es de ' . $calificacion . '/10. Revisa las definiciones marcadas e inténtalo de nuevo.</div>';
} else {
    $mensajeEvaluacion = '<div class="mensaje-fallo">📖 Tu calificación es de ' . $calificacion . '/10. ¡No te desanimes! Lee con atención las pistas e inténtalo nuevamente.</div>';
}

// Emisión directa con echo
echo '<div class="caja-resultado">';
echo '<h3>Resultados de la Evaluación - UAEMéx</h3>';
echo '<p class="resumen-puntaje">Temática evaluada: <strong>' . $nombreTematica . '</strong></p>';
echo '<p class="resumen-puntaje">Aciertos conseguidos: <strong>' . $aciertos . '</strong> de <strong>' . $totalPalabras . '</strong> palabras.</p>';
echo $mensajeEvaluacion;
echo '<div class="lista-detalles">';
echo $retroalimentacion;
echo '</div>';
echo '</div>';
?>
