<div class="titulo">Boolean PHP</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';

var_dump(false);
echo '<br>';
var_dump(TRUE);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(true);

// fazer as regras de conversão

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas zero é false
echo '<br>' . var_dump((bool) 20); //apenas zero é false
echo '<br>' . var_dump(""); //apenas zero é false string tbm

