<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $taikhoan = loadone_taikhoan($id);
    if (is_array($taikhoan)) {
        extract($taikhoan);
    }
}
?>
<div class="row">
    <div class="row frmtitle"><h1>SỬA TÀI KHOẢN</h1></div>
    <div class="row frmcontent">
        <form action="index.php?act=update_taikhoan" method="post">
            <div class="row mb10">
                <label>Mã TK</label><br>
                <input type="text" name="id" value="<?= $id ?>" readonly>
            </div>
            <div class="row mb10">
                <label>Tên đăng nhập</label><br>
                <input type="text" name="user" value="<?= $user ?>">
            </div>
            <div class="row mb10">
                <label>Mật khẩu</label><br>
                <input type="text" name="pass" value="<?= $pass ?>">
            </div>
            <div class="row mb10">
                <label>Email</label><br>
                <input type="email" name="email" value="<?= $email ?>">
            </div>
            <div class="row mb10">
                <label>Địa chỉ</label><br>
                <input type="text" name="address" value="<?= $address ?>">
            </div>
            <div class="row mb10">
                <label>Số điện thoại</label><br>
                <input type="text" name="tel" value="<?= $tel ?>">
            </div>
            <div class="row mb10">
                <label>Vai trò</label><br>
                <input type="text" name="role" value="<?= $role ?>">
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập nhật">
            </div>
        </form>
    </div>
</div>
