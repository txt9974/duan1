<?php
    function loadall_bl(){
        $sql = " SELECT * FROM `comment` order by id asc";
        $result =  pdo_query($sql);
        return $result;
    }

    function delete_binhluan($idbinhluan){
        $sql = "delete from comment where id=".$idbinhluan;
        pdo_execute($sql);
    }
?>