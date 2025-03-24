<?php
function insert_taikhoan($user,$email,$pass){
    $sql = "INSERT INTO tai_khoan(user,email,pass) VALUES ('$user','$email','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "SELECT * FROM tai_khoan WHERE user='".$user."' AND pass='".$pass."'";
    $sp =  pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql = "SELECT * FROM tai_khoan WHERE email='".$email."'";
    $sp =  pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql = "UPDATE tai_khoan SET  user='".$user."', pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' WHERE id=" .$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql = "SELECT * FROM tai_khoan ORDER BY id DESC";
            $listtaikhoan =  pdo_query($sql);
            return $listtaikhoan;
}
function loadone_taikhoan($id) {
    $sql = "SELECT * FROM tai_khoan WHERE id = $id";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function delete_taikhoan($id) {
    $sql = "DELETE FROM tai_khoan WHERE id = $id";
    pdo_execute($sql);
}
?>
?>