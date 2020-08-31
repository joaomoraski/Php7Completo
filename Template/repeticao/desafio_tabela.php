<div class="titulo">Desafio Tabela</div>

<?php
$array = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20'],
];
foreach ($array as $linha){
    foreach ($linha as $valor){
        echo "$valor ";
    }
    echo "<br>";
}

?>


<table>
    <?php
        foreach ($array as $linha){
            echo '<tr>';
            foreach ($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<hr>

<form action="#" method="post">
    <input type="text" placeholder="Número de linhas" name="linhas"/>
    <input type="text" placeholder="Número de colunas" name="colunas"/>
    <button>Fazer tabela!</button>
</form>
<table>
<?php
        $linhas = intval($_POST['linhas']);
        $colunas = intval($_POST['colunas']);

        if(!$linhas) $linhas = 10;
        if(!$colunas) $colunas = 10;

        $num = 1;
        for($i = 0; $i < $linhas; $i++) {
            echo "<tr>";
            for($j = 0; $j < $colunas; $j++) {
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }?>
</table>
<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444444;
    }
    table td {
        padding: 10px 20px;
    }

</style>