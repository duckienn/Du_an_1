<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO product(ten_san_pham,gia_co_ban,hinh_anh,mo_ta,id) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "DELETE FROM product WHERE id=" .$id;
              pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql = "SELECT * FROM product WHERE 1  ORDER BY luotxem DESC LIMIT 0,10";
            $listsanpham =  pdo_query($sql);
            return $listsanpham;
}
function loadall_sanpham_home(){
    $sql = "SELECT * FROM product WHERE 1  ORDER BY id DESC LIMIT 0,9";
            $listsanpham =  pdo_query($sql);
            return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql = "SELECT * FROM product WHERE 1";
    if($kyw != ""){
        $sql .= " AND NAME LIKE '%".$kyw."%'";
    }
    if($iddm > 0){
        $sql .= " AND iddm ='".$iddm."'";
    }
    $sql.= " ORDER BY id DESC";
            // $listdanhmuc =  pdo_query($sql);
            // return $listdanhmuc;
            $listsanpham =  pdo_query($sql);
            return $listsanpham;
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM product WHERE id=".$id;
    $sp =  pdo_query_one($sql);
    return $sp;
}
function load_ten_danh_muc($iddm){
    if($iddm > 0){
    $sql = "SELECT * FROM danh_muc WHERE id=".$iddm;
    $dm =  pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
    
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "SELECT * FROM product WHERE iddm = ".$iddm." AND id <> ".$id;
    $listsanpham =  pdo_query($sql);
            return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh != "")
    $sql = "UPDATE product SET iddm='".$iddm."',name='".$tensp."', price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=" .$id;
     else
    $sql = "UPDATE product SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."',mota='".$mota."' WHERE id=" .$id;
    pdo_execute($sql);
}
?>