<?php
    // 關閉錯誤報告，避免在頁面上顯示系統錯誤訊息
    error_reporting(0);

    // 啟動 Session，確認操作者是否維持登入狀態
    session_start();

    // 安全檢查：若未登入則無法執行刪除動作，並跳轉至登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 1. 建立資料庫連線 (主機, 帳號, 密碼, 資料庫名稱)
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

        // 2. 準備刪除指令
        // 從 URL 參數 ($_GET["bid"]) 取得要刪除的佈告編號
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'";
        
        // 3. 執行 SQL 指令並判斷結果
        if (!mysqli_query($conn, $sql)) {
            // 如果執行失敗（例如資料庫連線問題）
            echo "佈告刪除錯誤";
        } else {
            // 執行成功提示
            echo "佈告刪除成功";
        }

        // 4. 不論結果為何，3 秒後自動回到佈告列表頁面 (11.bulletin.php)
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
