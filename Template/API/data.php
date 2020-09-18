<div class="titulo">Data API</div>

<?php
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

//adicionar dia
$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) .' <br>';

//adicionar semana sei la
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) .' <br>';

//criar datas
$dataFixa = mktime(15,30,50,1,25,1975);
echo strftime('%A, %d de %B de %Y - %H:%H:%S', $dataFixa);