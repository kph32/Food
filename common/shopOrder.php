<meta charset="UTF-8" />
<?php
ob_start();
session_start();
try{
require_once("connectFoodie.php");
$shop_id = $_SESSION["memId"];
$sql="select * from order_info
	  where shop_id='$shop_id'";
$order = $pdo->prepare($sql);
$order->execute();
if($order->rowCount()==0){
	echo"查無訂單";
}else{
	echo'
	<table border="1" cellspacing="0">
        <tr>
            <th>訂單編號</th>
            <th>消費者</th>
            <th>下單日期</th>
            <th>取貨時間</th>
            <th>品項</th>
            <th>付款方式</th>
        </tr>'; 
	while($orderRow=$order->fetch(PDO::FETCH_ASSOC)){

		
		$str='<tr>';
		$str.='<td>'.$orderRow["order_id"].'</td>';
		$str.='<td>'.$orderRow["pickup_name"].'</td>';
		$str.='<td>'.$orderRow["order_date"].'</td>';
		$str.='<td>'.$orderRow["pickup_date"].'</td>';	
		$str.='<td>'.$orderRow["pickup_addr"].'</td>';
		$str.='<td>'.$orderRow["pay_method"].'</td>';
		$str.='</tr>';
		
		echo $str;														

	};
	echo'</table>';
};
}catch(PDOException $e){
	echo"錯誤原因：",$e->getMessage(),"<br>";
	echo"行號：",$e->getLine(),"<br>";
}	  

?>