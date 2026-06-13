<?php
    // 關閉錯誤報告，避免頁面顯示系統路徑或資料庫錯誤
    error_reporting(0);
    
    // 啟動 Session 驗證權限
    session_start();
    
    // 安全檢查：若未登入則導回登入頁面
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 1. 建立資料庫連線 (主機, 帳號, 密碼, 資料庫名稱)
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        
        // 2. 準備 SQL 新增指令
        // 將 POST 過來的 標題(title)、內容(content)、類型(type)、時間(time) 存入 bulletin 資料表
        // 注意：type 是數字格式，所以在 SQL 語法中不需要加單引號
        $sql = "insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";
        
        // 3. 執行 SQL 指令並判斷結果
        if (!mysqli_query($conn, $sql)) {
            // 如果寫入失敗
            echo "新增命令錯誤";
        }
        else {
            // 如果寫入成功
            echo "新增佈告成功，三秒鐘後回到網頁";
            // 跳轉回佈告欄列表頁面 (11.bulletin.php)
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
