<?php
   // mysqli_connect()：建立與資料庫的連線
   // 參數依序為：主機位置、帳號、密碼、資料庫名稱
   $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

   // mysqli_query()：對資料庫發送 SQL 查詢指令
   // 這裡是抓取 user 資料表中的所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   // 設定一個登入狀態，預設為 FALSE（尚未登入成功）
   $login = FALSE;

   // mysqli_fetch_array()：逐筆讀取查詢結果
   // 每次迴圈會取出一筆資料（使用者資料）
   while ($row = mysqli_fetch_array($result)) {

     // 比對使用者輸入的帳號與密碼是否和資料庫中的資料一致
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 如果有一筆符合，代表登入成功
       $login = TRUE;
     }
   } 

   // 如果登入成功
   if ($login == TRUE) {
    // 啟動 session（用來記錄登入狀態）
    session_start();

    // 將使用者帳號存入 session，之後頁面可以用來辨識使用者
    $_SESSION["id"] = $_POST["id"];

    // 顯示登入成功訊息
    echo "登入成功";

    // 3 秒後自動跳轉到 bulletin 頁面
    echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
   }
   else {
    // 登入失敗，顯示錯誤訊息
    echo "帳號/密碼 錯誤";

    // 3 秒後跳回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
   }
?>