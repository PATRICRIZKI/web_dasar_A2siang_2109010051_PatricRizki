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
    //var_dump($mobil);

    //menampilkan array berdasarkan nilai arraynya
    echo $mobil[0]; 
    
    //menghitung jumlah array
    echo count($mobil);
    ?>

    <table border="1" style="border-collapse: collapse"> 
        <tr>
            <th>No </th>
            <th>Nama Mobil</th>
        </tr>
        <tr>
            <td>1</td>
            <td> <?=$mobil[0] ?> </td>
        </tr>
        <tr>
            <td>2</td>
            <td> <?=$mobil[1] ?> </td>
        </tr>
        <tr>
            <td>3</td>
            <td> <?=$mobil[2] ?> </td>
        </tr>


    </table>

    <p> saya suka mobil <?=$mobil[0] ?> dan mobil  <?=$mobil[1] ?>, tetapi saya tidak sukak mobil <?=$mobil[2] ?> </p>

</body>
</html>