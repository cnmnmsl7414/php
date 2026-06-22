<?php
    // 關閉錯誤報告，防止頁面顯示敏感的系統或資料庫錯誤資訊
    error_reporting(0);
    
    // 啟動 Session，用來驗證當前使用者是否具備管理權限
    session_start();
    
    // 安全檢查：若 Session 中沒有 id，表示未登入，強制導回登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 1. 建立資料庫連線 (主機位址, 使用者帳號, 密碼, 資料庫名稱)
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

        // 2. 執行 SQL 更新指令 (UPDATE)
        // 使用 SET 語法更新：標題(title)、內容(content)、時間(time)、類型(type)
        // 使用 WHERE 指定要更新的佈告編號 (bid)，該編號來自前一頁的隱藏欄位 ($_POST['bid'])
        $sql = "update bulletin set 
                title='{$_POST['title']}', 
                content='{$_POST['content']}', 
                time='{$_POST['time']}', 
                type={$_POST['type']} 
                where bid='{$_POST['bid']}'";

        if (!mysqli_query($conn, $sql)) {
            // 如果 SQL 執行失敗（例如資料格式錯誤或連線中斷）
            echo "修改錯誤";
            // 3 秒後導回佈告欄列表
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        } else {
            // 如果資料庫更新成功
            echo "修改成功，三秒鐘後回到佈告欄列表";
            // 3 秒後自動導回佈告欄列表 (11.bulletin.php)
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
