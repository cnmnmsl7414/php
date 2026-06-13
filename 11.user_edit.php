<?php
    // 關閉錯誤報告，避免在頁面上顯示系統錯誤訊息
    error_reporting(0);
    
    // 啟動 Session，確認目前操作者是否具備權限
    session_start();
    
    // 安全檢查：確認 Session 中是否有登入標記
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        // 未登入則 3 秒後導向登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 1. 建立與資料庫的連結
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        
        // 2. 執行 SQL 更新指令 (UPDATE)
        // 使用 SET 修改密碼，並透過 WHERE 指定要修改的是哪一個帳號 (id)
        // 這些資料是從上一頁的表單透過 POST 方法傳遞過來的
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")) {
            // 如果更新過程失敗（例如連線問題或 SQL 語法錯誤）
            echo "修改錯誤";
            // 3 秒後導回使用者列表
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        } else {
            // 如果更新成功
            echo "修改成功，三秒鐘後回到網頁";
            // 3 秒後導回使用者列表
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }
?>
