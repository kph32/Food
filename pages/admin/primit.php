<?php include 'header.php'; ?>

<?php
include '../../common/connectFoodie.php';


//action to permit or cancel

if (isset($_POST['passed'])) {
    $sql = "UPDATE `shop` SET `permitted` = '1' WHERE `shop_id` = '".$_POST['shop_id']."'";
    $pdo->prepare($sql)->execute();
}

if (isset($_POST['cancel'])) {
    $sql = "UPDATE `shop` SET `permitted` = '0' WHERE `shop_id` = '".$_POST['shop_id']."'";
    $pdo->prepare($sql)->execute();
}


$sql = "select * from shop";
$shop = $pdo->query($sql);
// $array = [];


if ($shop->rowCount() != 0) {
    while ($prod = $shop->fetch(PDO::FETCH_ASSOC)) {
        $array[] = $prod;
    }
}


?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">店家審核</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>店家名稱</th>
                            <th>地址</th>
                            <th>電話</th>
                            <th>審核狀態</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form action="" method="post">
                        <?php
                        foreach ($array as $key => $value) {


                            echo "<tr>";
                            echo "<td>" . $key . "</td>";
                            echo "<td><a href='' onclick='PopupCenter(\"shopInfo.php?shop_id=".$array[$key]["shop_id"]."\",\"xtf\",\"900\",\"500\")'>" . $array[$key]["shop_name"] . "</a></td>";
                            echo "<td>" . $array[$key]["address"] . "</td>";
                            echo "<td>" . $array[$key]["phone"] . "</td>";
                            if ($array[$key]['permitted'] == '1') {
                                echo "<td>通過</td>";
                            } else {
                                echo "<td>未審核</td>";
                            }

                            if ($array[$key]['permitted'] == '0') {
                                echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["shop_id"]."\",\"passed\")' class='btn btn-primary' >通過</button>
                                    </td>";
                            } else {
                                echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["shop_id"]."\",\"cancel\")' class='btn btn-danger'>取消</button>
                                    </td>";
                            }
                        }
                        echo "</tr>";
                        ?>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function send(shop_id, status) {
        var url = 'primit.php';
        var form = $('' +
            '<form action="' + url + '" method="post" style="display:none;">' +
            '<input type="text" name="shop_id" value="' + shop_id + '" />' +
            '<input type="hidden" name="'+status+'" />' +
            '<input type="hidden" name="'+status+'" />' +
            '</form>');
        $('body').append(form);
        form.submit();

    }

    function PopupCenter(url, title, w, h) {
        // Fixes dual-screen position                         Most browsers      Firefox
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }
</script>

<?php include 'footer.php'; ?>
