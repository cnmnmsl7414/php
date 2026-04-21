<html>
    <head>
        <!-- 網頁標題 -->
        <title>使用者管理</title>
    </head>
    <body>
    <?php
        // 關閉錯誤顯示
        error_reporting(0);

        // 啟動 session
        session_start();

        // 檢查是否已登入
        if (!$_SESSION["id"]) {

            // 未登入 → 顯示提示
            echo "請登入帳號";

            // 3 秒後跳轉回登入頁
            echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
        }
        else {   

            // 已登入 → 顯示頁面標題與功能連結
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] 
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>

                <!-- 建立表格 -->
                <table border=1>
                    <tr>
                        <td></td>
                        <td>帳號</td>
                        <td>密碼</td>
                    </tr>";
            
            // 建立資料庫連線
            $conn = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

            // 查詢所有使用者資料
            $result = mysqli_query($conn, "SELECT * FROM user");

            // 逐筆讀取資料並顯示
            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>
                        <td>
                          <!-- 修改與刪除功能（透過 GET 傳 id） -->
                          <a href=19.user_edit_form.php?id={$row['id']}>修改</a>
                          ||
                          <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                        </td>

                        <!-- 顯示帳號 -->
                        <td>{$row['id']}</td>

                        <!-- 顯示密碼（⚠️ 這其實很不安全） -->
                        <td>{$row['pwd']}</td>
                      </tr>";
            }

            // 結束表格
            echo "</table>";
        }
    ?> 
    </body>
</html>