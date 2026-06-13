<?php
    // 關閉錯誤報告，避免在頁面上顯示系統錯誤訊息
    error_reporting(0);

    // 啟動 Session，確認目前操作者是否已登入
    session_start();

    // 安全檢查：若 Session 中沒有 id，代表未登入，禁止操作
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        // 3 秒後導向至登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 1. 建立資料庫連線 (主機, 帳號, 密碼, 資料庫)
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

        // 2. 準備刪除指令
        // 從 URL 的參數 ($_GET["id"]) 取得要刪除的使用者帳號
        $sql = "delete from user where id='{$_GET["id"]}'";
        
        // 3. 執行 SQL 指令並判斷是否成功
        if (!mysqli_query($conn, $sql)) {
            // 如果刪除失敗（例如資料庫連線中斷或語法錯誤）
            echo "使用者刪除錯誤";
        } else {
            // 刪除成功時的提示
            echo "使用者刪除成功";
        }

        // 4. 不論成功或失敗，3 秒後自動跳轉回使用者管理列表 (18.user.php)
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
