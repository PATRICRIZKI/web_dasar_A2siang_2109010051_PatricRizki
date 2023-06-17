<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $mobil = array ("Xenia","Alphard","BMW");
 $jumlah_mobil =count($mobil);
    ?>
    
    <table border="1" style="border-collapse: collapse"> 
        <tr>
            <th>No </th>
            <th>Nama Mobil</th>
        </tr>
        <?php for ($i=0; $i < $jumlah_mobil; $i++) {?>
            <tr>
            <td><?= $i+1 ?></td>
            <td> <?= $mobil[$i] ?> </td>
            </tr>
    
        <?php } ?>
        


    </table>
    
</body>
</html>