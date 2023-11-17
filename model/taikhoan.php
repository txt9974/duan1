<?php
    function update_taikhoan($id,$username,$password,$email,$address,$tel,$role){
        $sql=  "UPDATE `accounts` SET `username` = '{$username}', `password` = '{$password}', `email` = '{$email}', `address` = '{$address}', `tel` = '{$tel}', `role` = '{$role}' WHERE `accounts`.`id` = $id";
        pdo_execute($sql);
    }
    
    function loadall_taikhoan(){
        $sql="select * from accounts order by id asc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }

    function loadone_taikhoan($idtaikhoan){
        $sql = "select * from accounts where id = $idtaikhoan";
        $tk = pdo_query_one($sql);
        return $tk;
    }

    function delete_taikhoan($idtaikhoan){
        $sql = "delete from accounts where id=".$idtaikhoan;
        pdo_execute($sql);
    }
    function insert_taikhoan($username, $email, $password, $address, $tel){
        $sql = "insert into accounts(username, email, password, address, tel) values('$username', '$email', '$password', '$address', '$tel')";
        pdo_execute($sql);
    }
    function checkuser($username, $password){
        $sql = "select * from accounts where username='".$username."' AND password='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql = "select * from accounts where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
?>