<?php

error_reporting(1);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

session_start();
ob_start();


include '../common/connectFoodie.php';

include '../views/header.php';
include '../common/Navbar.php';
include '../common/Searchbox.php';

//die($_POST["product_id"]);
//$shop_id = isset($_GET['shop_id']) ? $_GET['shop_id'] : "";

$shop_id = isset($_GET['shop_id']) ? $_GET['shop_id'] : "";

$action = isset($_POST['action']) ? $_POST['action'] : '';
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
$alert = "";



switch ($action) {
    case 'add':

        if (checkIsDuplicate($product_id)) {
            $alert = 'alert("商品重複!")';
        } else {
            addItemToCart($product_id, $pdo);
        }
        break;

    case 'delete':
        deleteItemFromCart($product_id);
        break;

    case 'order_item':
        order_item($product_id,$alert);
        break;


}

function deleteItemFromCart($product_id)
{
    $cart = $_SESSION['cart_item'];

    foreach ($cart as $key => $value) {
        if ($item['product_id'] = $product_id) {
            unset($_SESSION['cart_item'][$key]);
            return;
        }
    }
}


function addItemToCart($product_id, $pdo)
{
    $item = array(

        'product_id' => $_POST['product_id'],
        'name' => $_POST['name'],
        'spec' => $_POST['spec'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
    );


    $_SESSION['cart_item'][] = $item;

}

function checkIsDuplicate($product_id)
{
    $cart = $_SESSION['cart_item'];
    foreach ($cart as $key => $value) {

        if ($cart[$key]['product_id'] == $product_id) {
            return true;
        }
    }

    return false;
}


function order_item($product_id,$alert)
{

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $order_amount = $_POST['order_amount'];


    // $conn = new mysqli('localhost', 'root', 'josh', 'foodie');
    $conn = new mysqli('localhost', 'ad105g2', 'ad105g2', 'ad105g2');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($product_id != "" && $_SESSION['mem']['name'] != "") {

        $stmt = $conn->query("INSERT INTO `order_item` (`product_id`,quantity,price,order_amount)
 VALUES ('$product_id','$quantity','$price','$order_amount')");
        echo "yeee";
        header("Location: orderConfirm.php");
        exit;
    } else {
        $alert = 'alert("請先登入")';
        return;
    }


}


//function updateToDb($product_id)
//{
//    $order_id = uniqid().time();
//    $pickup_name = $_POST['pickup_name'];
//    $pickup_date = $_POST['pickup_date'];
//    $pickup_phone = $_POST ['pickup_phone'];
//    $order_date = date("Y-m-d H:i:s");
//    $pickup_time = $_POST['pickup_time'];
//    $pay_method = $_POST['pay_method'];
//    $pickup_addr = 0;
//    $FK_order_mem = 1;
//    $FK_order_shop = 1;
//
//
//
//
//    $conn = new mysqli('localhost', 'root', 'fzwV9d4G', 'foodie_react');
//// Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//    $stmt = $conn->query("INSERT INTO `order_info` (`order_id`,`pickup_name`,pickup_date,pickup_time,pickup_phone,order_date,pay_method,pickup_addr,is_delete,FK_order_mem,FK_order_shop)
// VALUES ('$order_id','$pickup_name','$pickup_date','$pickup_time','$pickup_phone','$order_date','$pay_method','$pickup_addr','0','$FK_order_mem','$FK_order_shop')");
//}

?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script>
        <?php echo $alert;?>
    </script>
    <div class="orderHead">
        <div class="order-container">
            <span class="center title">線上預訂餐點</span>
            <div class="col-xs-12 col-sm-12">
                <!--                <img class="orderlogo" src="../assets/images/Navbar-logo.png" alt="">-->

                <!--                <div class="clearfix"></div>-->
            </div>
            <?php


            $sql = "select shop_id,shop_name,open_time,close_time,address,shop_image from shop WHERE shop_id = '$shop_id'";
            $shop = $pdo->query($sql);

            //        var_dump($sql);
            //        die();

            if ($shop->rowCount() != 0) {
                while ($prod = $shop->fetch(PDO::FETCH_ASSOC)) {


                    ?>
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="shopOrder-info">
                            <img src="../assets/images/shopresult/<?php echo $prod["shop_image"]; ?>" alt="小照片1"/>

                            <!--                    <div style="text-align:right">-->
                            <!--                        <a href="cartShow.php">檢視購物車</a>-->
                            <!--                    </div>-->

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 ">
                        <div class="ShopResult-title"><?php echo $prod["shop_name"]; ?></div>
                        <div class="ShopResult-time">營業時間：<?php echo $prod["open_time"]; ?>
                            ~<?php echo $prod["close_time"]; ?></div>
                        <div class="ShopResult-add">地點：<?php echo $prod["address"]; ?></div>
                    </div>

                    <?php
                }

            }

            ?>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="order">
        <div class="order-container">
            <div class="col-xs-12 col-sm-12">
                <table class="col">

                    <tr>
                        <th>商品ID</th>
                        <th>商品圖片</th>
                        <th>商品名稱</th>
                        <th>商品規格</th>
                        <th>單價</th>
                        <th>數量</th>

                        <th>送出</th>
                    </tr>

                    <?php
                    try {

                        $sql = "select * from product WHERE shop_id = '$shop_id'";
                        $products = $pdo->query($sql);

                        $array = array();

                        while ($prodRow = $products->fetch(PDO::FETCH_ASSOC)) {
                            $array[] = $prodRow;

                        }


                    } catch (PDOException $ex) {
                        echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                        echo "錯誤行號 : ", $ex->getLine(), "<br>";
                    }


                    foreach ($array as $key => $value) {


                        echo "<form id='ordersubmit_" . $key . "' method='post' action=''>";

                        echo "<tr id='item_" . $key . "'>";
                        echo "<td class='product_id' data-th='商品ID'>" . $array[$key]['product_id'] . "</td>";
                        echo "<td data-th='商品圖片'><img src='../assets/images/" . $array[$key]['img'] . ".jpg'></td>";
                        echo "<td class='name' data-th='商品名稱'>" . $array[$key]['name'] . "</td>";
                        echo "<td class='spec' data-th='商品規格'>" . $array[$key]['spec'] . "</td>";
                        echo "<td class='price' data-th='單價'>$" . $array[$key]['price'] . "</td>";
                        //echo "<td data-th='數量'><input type='text' name='quantity' value='".$array[$key]['.quantity.']."' size='2' /></td>";
                        echo "<td data-th='數量'><input type='number' placeholder='1' class='quantity' name='quantity' value='0' size='2' /></td>";


                        echo "<td>";
                        echo "<input type='hidden' value='add' name='action' class='btnAddAction' />";
                        echo "<input type='hidden' value='" . $array[$key]['product_id'] . "' name='product_id' class='btnAddAction' />";
//
                        echo "<input type='hidden' name='name' value='" . $array[$key]['name'] . "'>";
                        echo "<input type='hidden' name='spec' value='" . $array[$key]['spec'] . "'>";
                        echo "<input type='hidden' name='price' value='" . $array[$key]['price'] . "'>";
//                        echo "<input type='hidden' name='quantity' value='".$quantity."'>";
//                        echo "<input type='submit' value='Add' class='btnAddAction'/>";
                        echo "<button  type='button' class='item orderchoose' onclick='add_item(" . $key . ")'>加入</button>";


                        echo "</td>";
                        echo "</form>";
                        echo "</tr>";


                    }


                    ?>

                </table>
                <button class="orderchoose orderplace2" id="showform">查看購買清單</button>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="session">
            <div class="order-container2">
                <div class="ordermargin col-xs-12 col-sm-12">
                    <table class="sessionTable" cellpadding="10" cellspacing="1">

                        <h2 class="orderSubtitle">選擇購買以下商品</h2>
                        <div id="orderbar"><img class="orderbar" src="../assets/images/order-close.png" alt=""></div>
                        <tbody>
                        <tr>
                            <th style="text-align:left;"><strong>商品ID</strong></th>
                            <th style="text-align:left;"><strong>商品名稱</strong></th>
                            <th style="text-align:left;"><strong>商品規格</strong></th>
                            <th style="text-align:right;"><strong>商品單價</strong></th>
                            <th style="text-align:right;"><strong>購買數量</strong></th>
                            <th style="text-align:center;"><strong>刪除</strong></th>
                        </tr>
                        <?php

                        foreach ($_SESSION["cart_item"] as $item) {


                            ?>


                            <tr>

                                <td id="sessionItem" name="product_id"
                                    style="text-align:left;border-bottom:#F0F0F0 1px solid;">
                                    <?php echo $item["product_id"]; ?></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["name"]; ?></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["spec"]; ?></td>
                                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$" . $item["price"]; ?></td>

                                <td name="quantity"
                                    style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>


                                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;">


                                    <form style="text-align: center" action="" method="post">
                                        <input type="hidden" name="product_id"
                                               value="<?php echo $item["product_id"]; ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <button class="orderchoose" type="submit">刪除</button>
                                    </form>

                                </td>
                            </tr>

                            <?php
                            $item_total += ($item["price"] * $item["quantity"]);
                        }
                        ?>

                        <tr>
                            <td name="order_amount" colspan="5" align=right>總價:<?php echo "$" . $item_total; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <form class="orderform" action="" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $item["product_id"]; ?>">
                        <input type="hidden" name="quantity" value="<?php echo $item["quantity"]; ?>">
                        <input type="hidden" name="price" value="<?php echo $item["price"]; ?>">
                        <input type="hidden" name="order_amount" value="<?php echo $item_total; ?>">
                        <input type="hidden" name="action" value="order_item">

                        <button class="orderchoose orderplace" id="orderConfirm" type="submit">購買商品</button>
                    </form>

                </div>


            </div>

        </div>


        <!--    <div class="col-xs-12">-->
        <!--        <div class="order-container">-->
        <!--            <button id="showform" class="ordersubmit" value="">確認送出</button>-->
        <!--        </div>-->
        <!---->
        <!--    </div>-->


        <script>


            function add_item(num) {

                var item = $('#item_' + num);
                //check quantity bigger then 0
                if (item.find('.quantity').val() <= 0) {
                    alert('至少購買一個');
                    return;
                } else {
                    document.getElementById("ordersubmit_" + num).submit();
                }
            }


            $('#checkboxGroup li input').click(function () {
                if ($(this).prop('checked')) {
                    $('#checkboxGroup li input:checkbox').prop('checked', false);
                    $(this).prop('checked', true);
                }
            });


            $('#showform').click(function () {

                $('.session').css('display', 'block');
            });
            $('#orderbar').click(function () {
                $('.session').css('display', 'none');
            });
        </script>

<?php
include '../views/footer.php';
?>