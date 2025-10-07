<?php
$inscripcion = 1200;  
$taller = 45.5;       

$total = $inscripcion + $taller;

// Formato de precios con 2 decimales, coma decimal y punto miles
function formatoPrecio($valor) {
    return number_format($valor, 2, ",", ".") . " €";
}
?>

    <div class="ticket">
        <h1>🎟️ Evento Profesional</h1>
        <div class="linea">
            <span>Inscripción</span>
            <span><?php echo formatoPrecio($inscripcion); ?></span>
        </div>
        <div class="linea">
            <span>Taller adicional</span>
            <span><?php echo formatoPrecio($taller); ?></span>
        </div>
        <hr>
        <div class="linea total">
            <span>Total</span>
            <span><?php echo formatoPrecio($total); ?></span>
        </div>
    </div>