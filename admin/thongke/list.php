<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Categories ID</th>
            <th scope="col">Categories Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Max Price</th>
            <th scope="col">Min Price</th>
            <th scope="col">AVG Price</th>
        </tr>
    </thead>
            <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                    <th scope="col">'.$madm.'</th>
                    <th scope="col">'.$tendm.'</th>
                    <th scope="col">'.$countsp.'</th>
                    <th scope="col">'.$maxprice.'</th>
                    <th scope="col">'.$minprice.'</th>
                    <th scope="col">'.$avgprice.'</th>
                </tr>';
                }
            ?>
    </table>
        <a href="index.php?act=bieudo"><button type="button" class="btn btn-primary">Biểu đồ thống kê</button></a>
    </div>
</div>