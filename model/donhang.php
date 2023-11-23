<?php
    function loadall_donhang(){
        $sql="select * from oders order by id asc";
        $listloaisach=pdo_query($sql);
        return  $listloaisach;
    }
?>