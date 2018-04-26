<?php

include '../../common/connectFoodie.php';

$shop_id = isset($_GET['shop_id'])? $_GET['shop_id'] : '';

if($shop_id == '')
{
    return 'shop_id error';
}


if (isset($shop_id)) {
    $sql = "SELECT * FROM `shop` WHERE `shop_id` = '$shop_id' LIMIT 0,1";
    
    $shop = $pdo->query($sql);
    // $array = [];

    if ($shop->rowCount() != 0) {
        while ($prod = $shop->fetch(PDO::FETCH_ASSOC)) {
            $array[] = $prod;
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>

<table>
    <tr>
        <th>標題</th>
        <th>資料</th>
    </tr>
    <?php

    $title_array = ['名稱'=>'shop_name','地址'=>'address','開店時間'=>'open_time','關店時間'=>'close_time','電話'=>'phone','公布訊息'=>'announcement','介紹'=>'introduction','菜單'=>'menu'];
    foreach ($title_array as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$array[0][$value]."</td>";
        echo "</tr>";
    }

    ?>

</table>

</body>
</html>

