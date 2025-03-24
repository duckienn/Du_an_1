<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO category(ten_danh_muc) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "DELETE FROM category WHERE id=" .$id;
              pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM category ORDER BY id DESC";
            $listdanhmuc =  pdo_query($sql);
            return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql = "SELECT * FROM category WHERE id=".$id;
    $dm =  pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai){
    $sql = "UPDATE category SET ten_danh_muc='".$tenloai."' WHERE id=" .$id;
    pdo_execute($sql);
}
?>