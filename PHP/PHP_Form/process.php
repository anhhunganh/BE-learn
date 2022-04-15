<?php
    $ho = $_POST['surname'];
    $ten = $_POST['last_name'];
    $ngay_sinh = $_POST['birthday'];
    $gioi_tinh = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = $_POST['select_hobby'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo 'Tên đầy đủ của bạn là: ' . "$ho" . ' ' . "$ten";
    echo "<br>";
    echo 'Ngày sinh: ' . "$ngay_sinh";
    echo "<br>";
    echo 'Giới tính: ' . "$gioi_tinh";
    echo "<br>";
    echo 'Địa chỉ: ' . "$address";
    echo "<br>";
    echo 'Sở thích của bạn: ' . "$hobby";
    echo "<br>";
    echo 'Email của bạn: ' . "$email";
    echo "<br>";
    echo 'Pass của bạn: ' . "$pass";