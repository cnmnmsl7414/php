<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    // 關閉錯誤報告
    error_reporting(0);
    
    // 啟動 Session 驗證登入狀態
    session_start();
    
    // 檢查是否登入，未登入者強制導回登入頁
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 1. 建立資料庫連線
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        
        // 2. 根據 URL 傳來的 id ($_GET['id']) 搜尋該使用者的現有資料
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        
        // 3. 取得搜尋結果並轉為陣列格式存入 $row
        $row = mysqli_fetch_array($result);
        
        // 4. 顯示修改表單
        echo "
        <form method=post action=20.user_edit.php>
            <!-- 使用 hidden 隱藏欄位紀錄原始帳號 (id)，因為 id 通常不開放修改 -->
            <input type=hidden name=id value={$row['id']}>
            
            <!-- 顯示帳號文字（僅供查看） -->
            帳號：{$row['id']}<br> 
            
            <!-- 密碼輸入框，並將資料庫抓到的舊密碼預填在 value 中 -->
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            
            <!-- 提交按鈕：將修改後的資料傳送到 20.user_edit.php -->
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
