<?php
    // 設定 MySQL 的連線資訊並開啟連線
    // 資料庫位置、使用者名稱、使用者密碼、資料庫名稱
    $conn=mysqli_connect("localhost","root","","123");
    $conn -> set_charset("UTF8"); // 設定語系避免亂碼

    // SQL 指令
    $result = $conn -> query("SELECT * FROM dishes WHERE Dishes_id ORDER BY RAND() LIMIT 5
");
    while ($row = $result->fetch_assoc()) // 當該指令執行有回傳
    {
        $output[] = $row; // 就逐項將回傳的東西放到陣列中
    }

    // 將資料陣列轉成 Json 並顯示在網頁上，並要求不把中文編成 UNICODE
    print(json_encode($output, JSON_UNESCAPED_UNICODE));
    $conn -> close(); // 關閉資料庫連線

?>