<?php
$link = mysqli_connect('localhost','root', '', "shop" );

//接続状況をチェックします
if(mysqli_connect_errno()){
    die("データベースに接続ができません。：".mysqli_connect_error()."\n");
} else {
    echo "データベースの接続に成功しました。";
}