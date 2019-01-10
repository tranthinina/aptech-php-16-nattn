<?php
// var_dump($_GET)
$thudientu = $_GET['thu-dien-tu'];
$matkhau = $_GET['mat-khau'];
if ($thudientu === 'a@gmail.com' && $matkhau === '123456') {
    echo "dang nhap thanh cong";
}
else {
    echo "dang nhap that bai";
}
?>