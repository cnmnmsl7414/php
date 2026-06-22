<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    // 關閉錯誤報告（不顯示警告或錯誤訊息於前端）
    error_reporting(0);
    
    // 啟動 Session 功能，以便讀取伺服器端的變數
    session_start();
    
    // 檢查 Session 中是否存在 "id"，判斷使用者是否已登入
    if (!$_SESSION["id"]) {
        // 若未登入，顯示提示訊息
        echo "請登入帳號";
        // 3 秒後自動跳轉回登入頁面 (2.login.html)
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {    
        // 若已登入，則顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <!-- 提交按鈕：將資料傳送到 15.user_add.php 處理 -->
                <input type=submit value=新增> 
                <!-- 重設按鈕：清除表單已輸入的內容 -->
                <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
