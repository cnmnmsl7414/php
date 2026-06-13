<?php
    // 關閉錯誤報告
    error_reporting(0);
    
    // 啟動 Session 驗證
    session_start();
    
    // 安全檢查：確認使用者是否已登入
    if (!$_SESSION["id"]) {
        echo "please login first";
        // 未登入則 3 秒後導向登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 若已登入，則輸出 HTML 表單
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <!-- 表單資料將以 POST 方式傳送到 23.bulletin_add.php 進行儲存 -->
                <form method=post action=23.bulletin_add.php>
                    
                    <!-- 標題輸入框 -->
                    標    題：<input type=text name=title><br>
                    
                    <!-- 內容輸入區：使用 textarea 以利輸入多行文字 -->
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    
                    <!-- 佈告類型：使用 radio (單選按鈕)，讓使用者三選一 -->
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    
                    <!-- 發布時間：使用 HTML5 的日期選擇器 -->
                    發布時間：<input type=date name=time><p></p>
                    
                    <!-- 提交與清除按鈕 -->
                    <input type=submit value=新增佈告> 
                    <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
