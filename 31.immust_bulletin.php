<html>
    <!-- 網頁標題 -->
    <head><title>明新科技大學資訊管理系</title>
    <!-- 設定網頁編碼為 UTF-8，避免中文亂碼 -->
    <meta charset="utf-8">
    <!-- 載入 FlexSlider 的 CSS 樣式 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <!-- 載入 jQuery 函式庫 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <!-- 載入 FlexSlider JavaScript -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <script>
        // 當整個網頁(包含圖片)載入完成後執行
        $(window).load(function () {
            // 啟動 FlexSlider 輪播效果
            $('.flexslider').flexslider({
                // 輪播方式為滑動(Slide)
                animation: "slide",
                // 圖片由右往左播放
                rtl: true
            });
        });
    </script>
    <style>
        /* ==================== 全域設定 ==================== */
        * {
            /* 移除所有元素預設外距 */
            margin: 0;
            /* 全部文字預設灰色 */
            color: gray;
            /* 全部文字置中 */
            text-align: center;
        }
        /* ==================== Header ==================== */
        .top {
            /* Header 背景白色 */
            background-color: white;
        }
        .top .container {
            /* 使用 Flex 排版 */
            display: flex;
            /* 垂直置中 */
            align-items: center;
            /* 左右平均分開 */
            justify-content: space-between;
            /* 內距 */
            padding: 10px;
        }
        .top .logo {
            /* Logo 字體大小 */
            font-size: 35px;
            /* 粗體 */
            font-weight: bold;
        }
        .top .logo img {
            /* Logo 圖片寬度 */
            width: 100px;
            /* 圖片與文字垂直置中 */
            vertical-align: middle;
        }
        .top .top-nav {
            /* 導覽文字大小 */
            font-size: 25px;
            /* 粗體 */
            font-weight: bold;
        }
        .top .top-nav a {
            /* 超連結取消底線 */
            text-decoration: none;
        }
        /* ==================== 導覽列 ==================== */
        .nav {
            /* 背景色 */
            background-color: #333;
            /* Flex 排版 */
            display: flex;
            /* 水平置中 */
            justify-content: center;
        }
        .nav ul {
            /* 取消項目符號 */
            list-style-type: none;
            /* 外距 */
            margin: 0;
            /* 內距 */
            padding: 0;
            /* 超出隱藏 */
            overflow: hidden;
            /* 背景色 */
            background-color: #333;
        }
        .nav li {
            /* 水平排列 */
            float: left;
        }
        .nav li a {
            /* 變成區塊元素 */
            display: block;
            /* 白色文字 */
            color: white;
            /* 文字置中 */
            text-align: center;
            /* 內距 */
            padding: 14px 16px;
            /* 取消底線 */
            text-decoration: none;
        }
        .nav li a:hover {
            /* 滑鼠移入變深色 */
            background-color: #111;
        }
        /* ==================== 下拉式選單 ==================== */
        .dropdown:hover .dropdown-content {
            /* 滑鼠移入時顯示下拉選單 */
            display: block;
        }
        li.dropdown:hover {

            /* 保持背景一致 */
            background-color: #333;
        }
        .dropdown-content {
            /* 預設隱藏 */
            display: none;
            /* 絕對定位 */
            position: absolute;
            /* 背景色 */
            background-color: #333;
            /* 最小寬度 */
            min-width: 160px;
            /* 顯示層級 */
            z-index: 1;
        }
        .dropdown-content a {
            /* 黑色文字 */
            color: black;
            /* 內距 */
            padding: 12px 16px;
            /* 取消底線 */
            text-decoration: none;
            /* 每個選項獨立一列 */
            display: block;
            /* 文字靠左 */
            text-align: left;
        }
        /* ==================== Slider ==================== */
        .slider {
            /* 黑色背景 */
            background-color: black;
        }
        /* ==================== Banner ==================== */
        .banner {
            /* 漸層背景 */
            background-image: linear-gradient(#ABDCFF, #0396FF);
            /* 內距 */
            padding: 30px;
        }
        .banner h1 {
            /* 標題上下留白 */
            padding: 20px;
        }
        /* ==================== 師資介紹 ==================== */
        .faculty {
            display: block;
            justify-content: center;
            background-color: white;
            padding: 40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50, 51, 52);
            padding-bottom: 40px;
        }
        .faculty .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .faculty .teacher {
            display: block;
            text-decoration: none;
        }
        .faculty .teacher img {
            width: 200px;
            height: 200px;
        }
        .faculty .teacher h3 {
            color: white;
            background-color: rgba(39,40,34,.5);
            text-align: center;
        }
        /* ==================== 聯絡資訊 ==================== */
        .contact {
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .contact h2 {
            color: rgb(54,82,110);
            font-size: 25px;
        }
        .contact .infos {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .contact .infos .left {
            display: block;
            text-align: left;
            margin-right: 30px;
        }
        .contact .infos .left b {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: gray;
            font-size: 18px;
            line-height: 18px;
        }
        .contact .infos .left span {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,.5);
            font-size: 16px;
            padding-left: 27px;
        }
        .contact .infos .right {
            height: 200px;
        }
        .contact .infos .right iframe {
            width: 100%;
            height: 100%;
            border: 1px solid rgba(39,40,34,.5);
        }
        /* ==================== Footer ==================== */
        .footer {
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /* ==================== 登入視窗 ==================== */
        .modal {
            /* 預設隱藏 */
            display: none;
            /* 固定定位 */
            position: fixed;
            /* 顯示在最上層 */
            z-index: 1;
            right: 50;
            top: 50;
            width: 20%;
            height: 20%;
            overflow: auto;
            /* 半透明白色背景 */
            background-color: rgba(255,255,255,0.9);
            padding-top: 50px;
        }
        /* ==================== 公告欄 ==================== */
        .bulletin {

            display: block;

            justify-content: center;

            background-color: rgb(255,204,153);

            padding: 30px 0;
        }
        .bulletin h1 {

            padding: 10px;
        }
        .bulletin table {

            border-collapse: collapse;

            font-family: 微軟正黑體;

            font-size: 16px;

            border: 1px solid #000;
        }
        .bulletin table th {

            background-color: #abdcff;

            color: #ffffff;
        }
        .bulletin table td {
            background-color: #ffffff;

            color: #0396ff;
        }
    </style>
</head>
    <body>
                <!-- ==================== 頁首 ==================== -->
        <div class="top">
            <!-- 頁首容器 -->
            <div class="container">
                <!-- Logo 與系所名稱 -->
                <div class="logo">
                    <!-- 系所 Logo 圖片 -->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                    <!-- 系所名稱 -->
                    明新科技大學資訊管理系
                </div>
                <!-- 頁首右側導覽 -->
                <div class="top-nav">
                    <!-- 明新科大連結 -->
                    <a href=>明新科大</a>
                    <!-- 管理學院連結 -->
                    <a href=>明新管理學院</a>
                    <!-- ==================== 登入按鈕 ==================== -->
                    <!--
                        點擊後會執行 JavaScript
                        將 id="login" 的 modal 顯示出來
                    -->
                    <label onclick="document.getElementById('login').style.display='block'">
                        登入
                    </label>
                    <!-- ==================== 登入視窗 ==================== -->
                    <div id="login" class="modal">
                        <!--
                            點擊 × 可關閉登入視窗
                            將 display 改成 none
                        -->
                        <span onclick="document.getElementById('login').style.display='none'">
                            &times; 管理系統登入
                        </span>
                        <!--
                            登入表單
                            method="post"
                            將資料送到 10.login.php
                        -->
                        <form method="post" action="10.login.php">
                            <!-- 帳號輸入框 -->
                            帳號：
                            <input type="text" name="id">
                            <br />
                            <!-- 密碼輸入框 -->
                            密碼：
                            <input type="password" name="pwd">
                            <p></p>
                            <!-- 登入按鈕 -->
                            <input type="submit" value="登入">
                            <!-- 清除按鈕 -->
                            <input type="reset" value="清除">
                        </form>
                    </div>
                    <!-- ==================== 登入視窗結束 ==================== -->
                </div>
            </div>
        </div>
        <!-- ==================== 導覽列 ==================== -->
        <div class="nav">
            <!-- 導覽列清單 -->
            <ul>
                <!-- 首頁 -->
                <li>
                    <a href="#home">首頁</a>
                </li>
                <!-- 系所簡介 -->
                <li>
                    <a href="#introduction">系所簡介</a>
                </li>
                <!-- ==================== 下拉式選單 ==================== -->
                <li class="dropdown">
                    <!-- 主選單 -->
                    <a href="#faculty">成員簡介</a>
                    <!-- 下拉內容 -->
                    <div class="dropdown-content">
                        <!-- 黃老師 -->
                        <a href="#faculty">黃老師</a>
                        <!-- 李老師 -->
                        <a href="#faculty">李老師</a>
                        <!-- 應老師 -->
                        <a href="#faculty">應老師</a>
                    </div>
                </li>
                <!-- 相關資訊 -->
                <li>
                    <a href="#about">相關資訊</a>
                </li>
            </ul>
        </div>
        <!-- ==================== 導覽列結束 ==================== -->
        <!-- ==================== 輪播圖片 ==================== -->
        <div class="slider">
            <!-- FlexSlider 輪播元件 -->
            <div class="flexslider">
                <!-- 輪播圖片清單 -->
                <ul class="slides">
                    <!-- 第一張圖片 -->
                    <li>
                        <img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" />
                    </li>
                    <!-- 第二張圖片 -->
                    <li>
                        <img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" />
                    </li>
                    <!-- 第三張圖片 -->
                    <li>
                        <img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" />
                    </li>
                </ul>
            </div>
        </div>
        <!-- ==================== 最新公告 ==================== -->
        <div class="bulletin">
            <!-- 區塊標題 -->
            <h1>最新公告</h1>
            <?php
                // 建立 MySQL 資料庫連線
                // mysqli_connect(主機, 帳號, 密碼, 資料庫名稱)
                $conn = mysqli_connect(
                    "120.105.96.90",
                    "immust",
                    "immustimmust",
                    "immust"
                );
                // 執行 SQL 指令
                // 從 bulletin 資料表取得所有資料
                $result = mysqli_query(
                    $conn,
                    "select * from bulletin"
                );
                // 建立 HTML 表格及欄位名稱
                echo "<table border=2>
                        <tr>
                            <th>佈告編號</th>
                            <th>佈告類別</th>
                            <th>標題</th>
                            <th>佈告內容</th>
                            <th>發佈時間</th>
                        </tr>";
                // 使用 while 一筆一筆讀取資料庫資料
                while ($row = mysqli_fetch_array($result)) {
                    // 開始輸出一列資料
                    echo "<tr><td>";
                    // 顯示公告編號
                    echo $row["bid"];
                    echo "</td><td>";
                    // 判斷公告類型
                    if ($row["type"] == 1)
                        echo "系上公告";
                    if ($row["type"] == 2)
                        echo "獲獎資訊";
                    if ($row["type"] == 3)
                        echo "徵才資訊";
                    echo "</td><td>";
                    // 顯示公告標題
                    echo $row["title"];
                    echo "</td><td>";
                    // 顯示公告內容
                    echo $row["content"];
                    echo "</td><td>";
                    // 顯示公告發布時間
                    echo $row["time"];
                    echo "</td></tr>";
                }
                // 所有資料輸出完成後，結束表格
                echo "</table>";
            ?>
        </div>
        <!-- ==================== 最新公告結束 ==================== -->
        <!-- ==================== 系所簡介 ==================== -->
        <!-- id="introduction" 提供導覽列超連結跳轉使用 -->
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <!-- 系所簡介標題 -->
            <h1>系所簡介</h1>
            <!-- 系所特色介紹 -->
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <!-- 學校及系所名稱 -->
            <h1>明新科技大學資訊管理系</h1>
            <!-- 系所榮譽 -->
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- ==================== 師資介紹 ==================== -->
        <!-- id="faculty" 提供導覽列跳轉 -->
        <div class="faculty" id="faculty">
            <!-- 區塊標題 -->
            <h2>師資介紹</h2>
            <!-- 教師容器 -->
            <div class="container">
                <!-- 第一位老師 -->
                <a class="teacher" href="">
                    <!-- 老師照片 -->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />

                    <!-- 老師姓名 -->
                    <h3>黃老師</h3>
                </a>
                <!-- 第二位老師 -->
                <a class="teacher" href="">
                    <!-- 老師照片 -->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <!-- 老師姓名 -->
                    <h3>李老師</h3>
                </a>
                <!-- 第三位老師 -->
                <a class="teacher" href="">
                    <!-- 老師照片 -->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <!-- 老師姓名 -->
                    <h3>應老師</h3>
                </a>
            </div>
        </div>
        <!-- ==================== 相關資訊 ==================== -->
        <!-- id="about" 提供導覽列跳轉 -->
        <div class="contact" id="about">
            <!-- 區塊標題 -->
            <h2>相關資訊</h2>
            <!-- 左右資訊容器 -->
            <div class="infos">
                <!-- 左側文字資訊 -->
                <div class="left">
                    <!-- 地址標題 -->
                    <b>明新科技大學管理學院大樓二樓</b>
                    <!-- 地址內容 -->
                    <span>304新竹縣新豐鄉新興路1號</span>
                    <!-- 電話 -->
                    <b> 電話:03-5593142</b>
                    <!-- 電話分機 -->
                    <span>分機:3431、3432、3433</span>
                    <!-- 傳真 -->
                    <b> 傳真:03-5593142</b>
                    <!-- 傳真分機 -->
                    <span>分機:3440</span>
                </div>
                <!-- 右側 Google 地圖 -->
                <div class="right">
                    <!--
                        iframe 用來嵌入 Google Maps 地圖
                        src：Google Maps 提供的嵌入網址
                        frameborder="0"：取消邊框
                        style="border:0"：移除外框
                        allowfullscreen：允許全螢幕顯示
                    -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954"
                        frameborder="0"
                        style="border:0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <!-- ==================== 網頁頁尾 ==================== -->
        <div class="footer">
            <!-- 版權資訊 -->
            &copy;Copyright 2022 Department of Information Management,
            MUST. All rights reserved.
            <!-- 維護者 -->
            維護者 Tony SHHuang
        </div>
    </body>
</html>