<html>
<head>
    <title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">
    
    <!-- 匯入外部資源：Flexslider (輪播圖) 的 CSS 與 jQuery 函式庫 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    
    <!-- 輪播圖啟動腳本 -->
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide", // 動態效果：滑動
                rtl: true           // 從右至左播放
            });
        });
    </script>

    <style>
        /* 基礎樣式重設 */
        *{ margin:0; color:gray; text-align:center; }

        /* 頁首區塊 (Top)：包含 Logo 與 登入連結 */
        .top .container {
            display: flex; /* 使用彈性佈局 */
            align-items: center; 
            justify-content: space-between; /* 內容兩端對齊 */
            padding:10px;
        }

        /* 導覽列 (Nav)：深色背景、水平排列 */
        .nav { background-color:#333; display: flex; justify-content: center; }
        .nav ul { list-style-type: none; margin: 0; padding: 0; }
        .nav li { float: left; }
        .nav li a { display: block; color: white; padding: 14px 16px; text-decoration: none; }
        .nav li a:hover { background-color: #111; }

        /* 下拉式選單 (Dropdown) */
        .dropdown-content {
            display: none; /* 預設隱藏 */
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown:hover .dropdown-content { display: block; } /* 滑鼠移入時顯示 */

        /* 彈出式登入視窗 (Modal) */
        .modal {
            display: none; /* 預設隱藏，點擊按鈕後才顯示 */
            position: fixed;
            z-index: 1;
            right: 50; top: 50;
            width: 20%; height: 20%;
            background-color: rgba(255,255,255,0.9);
            padding-top: 50px;
        }

        /* 佈告欄 (Bulletin) 表格樣式 */
        .bulletin table {
            border-collapse: collapse;
            width: 80%; margin: auto;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <!-- 頁首與 Logo -->
    <div class="top">
        <div class="container">
            <div class="logo">
                <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                明新科技大學資訊管理系
            </div>
            <div class="top-nav">
                <a href="#">明新科大</a>
                <a href="#">明新管理學院</a>
                
                <!-- 登入按鈕：點擊後透過 JS 將登入區塊改為顯示 (block) -->
                <label onclick="document.getElementById('login').style.display='block'">登入</label>
                
                <!-- 隱藏的登入表單 -->
                <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'" style="cursor:pointer">&times; 管理系統登入</span>
                    <form method="post" action="10.login.php">
                        帳號：<input type="text" name="id"><br />
                        密碼：<input type="password" name="pwd"><p></p>
                        <input type="submit" value="登入"> <input type="reset" value="清除">
                    </form>
                </div>  
            </div>
        </div>
    </div>

    <!-- 主導覽列 -->
    <div class="nav">   
        <ul>
            <li><a href="#home">首頁</a></li>
            <li><a href="#introduction">系所簡介</a></li>
            <!-- 帶有下拉選單的項目 -->
            <li class="dropdown"><a href="#faculty">成員簡介</a>
                <div class="dropdown-content">
                    <a href="#faculty" style="color:white">黃老師</a>
                    <a href="#faculty" style="color:white">李老師</a>
                    <a href="#faculty" style="color:white">應老師</a>
                </div>                       
            </li>
            <li><a href="#about">相關資訊</a></li>
        </ul>
    </div>

    <!-- 輪播圖區域 -->
    <div class="slider">
        <div class="flexslider">
            <ul class="slides">
                <!-- 輪播圖片將放在這裡 -->
                <li><img src="圖片網址"></li>
            </ul>
        </div>
    </div>
</body>
</html>
