<table>
    <tr>
    <th>Tempo</th>
    <th>Montante</th>
    <th>Juro</th>
    </tr>
    <?php
    $i = 0;
    $Capital = $_GET['Capital'];
    $Taxa = $_GET['Taxa'];
    $Tempo = $_GET['Tempo'];
    $Juro = $Capital * ($Taxa / 100);
    $Juro2 = 0;
    while ($i <= $Tempo){
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $Capital ?></td>
            <td><?= $Juro2 ?></td>
        </tr>
        <?php
        $i++;
        $Juro2+=$Juro;
        $Capital += $Juro;
        }
    ?>
</table>