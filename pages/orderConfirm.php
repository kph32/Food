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
session_start();
include '../common/connectFoodie.php';
include '../views/header.php';

?>

<div class="col-xs-12">
    <div class="orderwrapper">
        <div class="orderinfo">
            <div class="form-style-2">


                <form method="post" action="orderInsert.php">
                    <table border="1" align="center">
                        <img src="../assets/images/orderfood.png">

                        <caption>取貨資料</caption>
                        <tr>
                            <th>取貨人名稱</th>
                            <td><input placeholder="取貨人名稱" type="text" name="pickup_name"></td>
                        </tr>
                        <tr>
                            <th>取貨日期</th>
                            <td><input placeholder="取貨日期" type="date" name="pickup_date"></td>
                        </tr>
                        <tr>
                            <th>取貨時間</th>
                            <td><input placeholder="取貨時間" type="time" name="pickup_time"></td>
                        </tr>
                        <tr>
                            <th>電話號碼</th>
                            <td><input placeholder="電話號碼" type="text" name="pickup_phone"></td>
                        </tr>
                        <tr>
                            <th>付款方式</th>
                            <td>
                                ATM <input type="radio" class="ordercheck" name="pay_method" value="ATM">
                                cash <input type="radio" class="ordercheck" name="pay_method" value="cash">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="sub">
                                <input type="submit" name="submit">
                            </td>
                        </tr>
                    </table>
                </form>


                <!--                        <div class="ShopOrder-Totle">-->
                <!---->
                <!--                            <div class="ShopOrder-TotleItem">-->
                <!--                                <div class="ShopOrder-TotleTitle">-->
                <!--                                    取貨日期：-->
                <!--                                </div>-->
                <!--                                <div class="ShopOrder-TotleTime">-->
                <!--                                    <input name="pickup_date" type="date"/>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="ShopOrder-TotleItem">-->
                <!--                                <div class="ShopOrder-TotleTitle">-->
                <!--                                    取貨時間：-->
                <!--                                </div>-->
                <!--                                <div class="ShopOrder-TotleTime">-->
                <!--                                    <input name="pickup _time" type="time"/>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="ShopOrder-TotleItem">-->
                <!--                                <div class="ShopOrder-TotleTitle">-->
                <!--                                    付款方式：-->
                <!--                                </div>-->
                <!--                                <div id="checkboxGroup" class="ShopOrder-TotleTime">-->
                <!--                                    <li><input name="pay_method" type="checkbox" class="checkbox" value="cash"/>現金-->
                <!--                                    </li>-->
                <!---->
                <!--                                    <li><input name="pay_method" type="checkbox" class="checkbox" value="ATM"/>ATM-->
                <!--                                    </li>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            -->
                <!--                        </div>-->
            </div>
        </div>

    </div>

    <div class="clearfix"></div>
</div>
<?php
include '../views/footer.php';
?>