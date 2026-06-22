<?php
    // 關閉錯誤報告
    error_reporting(0);
    // 啟動 Session 驗證登入狀態
    session_start();
    
    // 安全檢查：若未登入則導回登入頁面
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 1. 建立資料庫連線
        $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        
        // 2. 根據 URL 傳來的 bid ($_GET["bid"]) 搜尋該筆佈告的完整資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row = mysqli_fetch_array($result);
        
        // 3. 處理單選按鈕 (Radio) 的選取狀態
        // 先預設三個類型的勾選標記為空字串
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        
        // 根據資料庫抓出的 type 值，決定哪一個 radio 要加上 "checked" 屬性
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";
        
        // 4. 顯示修改表單
        echo "
        <html>
            <head><title>修改佈告</title></head>
            <body>
                <!-- 表單資料將送到 27.bulletin_edit.php 進行資料庫更新 -->
                <form method=post action=27.bulletin_edit.php>
                    
                    <!-- 顯示佈告編號，並以 hidden 欄位傳遞 bid 以便更新時作為索引 -->
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    
                    <!-- 預填原本的標題 -->
                    標    題：<input type=text name=title value={$row['title']}><br>
                    
                    <!-- 預填原本的內容 (textarea 的值放在標籤中間) -->
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    
                    <!-- 佈告類型：帶入剛才判斷好的 {$checked} 變數來顯示正確的勾選項目 -->
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    
                    <!-- 預填原本的發布時間 -->
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
