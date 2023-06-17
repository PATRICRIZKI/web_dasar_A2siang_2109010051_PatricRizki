<?php 
$umur = array ( "Anhar" => "17", "budi" => "21", "tiago" => "37");
$no =1;
echo "umur si anhar sekarang adalah".$umur["Anhar"]. "<br>";

?>
<table border="1" style="border-collapse: collapse"> 
        <tr>
            <th>No </th>
            <th>Nama </th>
            <th>Umur </th>
        </tr>

<?php foreach($umur as $u =>$u_value): ?>

<tr>
<td>  <?= $no++ ?> </td>
<td><?= $u ?> </td>
<td> <?= $u_value ?> </td>
</tr>

<?php endforeach; ?>
</table>