<?php
// 關閉錯誤報告，避免在頁面上顯示系統錯誤訊息
error_reporting(0);

// 啟動 Session，用來驗證使用者是否維持登入狀態
session_start();

// 第一層防線：檢查 Session 是否有登入標記
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    // 未登入則 3 秒後導向登入頁
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else {    
    // 建立與資料庫的連結 (主機, 帳號, 密碼, 資料庫名稱)
    $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

    // 準備 SQL 新增指令
    // 從 $_POST 取得表單傳來的 id (帳號) 與 pwd (密碼)
    $sql = "insert into user(id, pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";

    // 執行 SQL 指令並判斷是否成功
    if (!mysqli_query($conn, $sql)) {
        // 如果執行失敗（例如帳號重複或語法錯誤）
        echo "新增命令錯誤";
    }
    else {
        // 執行成功後的回饋訊息
        echo "新增使用者成功，三秒鐘後回到網頁";
        // 3 秒後自動跳轉回使用者列表頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}
?>
