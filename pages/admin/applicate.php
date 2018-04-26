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
$sql = "select * from report";
$report = $pdo->query($sql);
// $array = [];


if ($report->rowCount() != 0) {
    while ($prod = $report->fetch(PDO::FETCH_ASSOC)) {
        $array[] = $prod;
    }
}
?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">檢舉審核</h1>
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
                                <th>店家Id</th>
                                <th>會員</th>
                                <th>訊息</th>
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
                                    echo "<td>". $array[$key]["shop_id"] ."</td>";
                                    echo "<td>" . $array[$key]["member_id"] . "</td>";
                                    echo "<td>" . $array[$key]["content"] . "</td>";
                                    if ($array[$key]['is_delete'] == '1') {
                                        echo "<td>刪除</td>";
                                    } else {
                                        echo "<td>未審核</td>";
                                    }

                                    if ($array[$key]['permitted'] == '0') {
                                        echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["shop_id"]."\",\"passed\")' class='btn btn-primary' >待審</button>
                                    </td>";
                                    } else {
                                        echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["shop_id"]."\",\"cancel\")' class='btn btn-danger'>刪除</button>
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

<?php include 'footer.php'; ?>