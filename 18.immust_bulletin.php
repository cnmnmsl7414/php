<html>
    <head>
        <title>明新科技大學資訊管理系</title> <!-- // 設定網頁標題 -->
        <meta charset="utf-8"> <!-- // 設定網頁編碼為 UTF-8 -->
        
        <!-- // 引入外部資源：Flexslider 輪播圖 CSS -->
        <link href="https://bootcss.com" rel="stylesheet">
        <!-- // 引入外部資源：jQuery 核心函式庫 -->
        <script src="https://bootcss.com"></script>
        <!-- // 引入外部資源：Flexslider 輪播圖 JS -->
        <script src="https://bootcss.com"></script>        
        
        <script>
            // 當全網頁視窗載入完成後執行
            $(window).load(function() {
                // 尋找 class 為 flexslider 的元素並啟用輪播功能
                $('.flexslider').flexslider({
                    animation: "slide", // 設定切換動畫為滑動
                    rtl: true           // 設定由右至左播放
                });
            });
        </script>
        
        <style>
            // 通用全域樣式
            *{
                margin:0;          // 清除所有元素的預設外邊距
                color:gray;        // 預設文字顏色為灰色
                text-align:center; // 預設文字靠中對齊
            }
            // 網頁頂部區塊
            .top{
                 background-color: white; // 背景顏色為白色
            }
            // 頂部區塊內的容器
            .top .container{
                display: flex;                 // 啟用彈性排版
                align-items: center;           // 垂直置中
                justify-content: space-between;// 兩端對齊分散排列
                padding:10px;                  // 內邊距 10 像素
            }
            // 標誌文字樣式
            .top .logo{
                font-size: 35px;               // 字體大小 35 像素
                font-weight: bold;             // 字體加粗
            }
            // 標誌內的圖片
            .top .logo img{
                width: 100px;                  // 寬度 100 像素
                vertical-align: middle;        // 圖片與文字垂直齊平
            }
            // 頂部導覽列超連結區塊
            .top .top-nav{
                font-size: 25px;               // 字體大小 25 像素
                font-weight: bold;             // 字體加粗
            }
            .top .top-nav a{
                text-decoration: none;         // 移除超連結下劃線
            }
            // 主導覽列樣式
            .nav {
                background-color:#333;         // 背景深灰色
                display: flex;                 // 啟用彈性排版
                justify-content: center;       // 水平置中
            }
            .nav ul {
                list-style-type: none;         // 移除清單預設圓點
                margin: 0; 
                padding: 0; 
                overflow: hidden;              // 隱藏溢出內容
                background-color: #333; 
            }
            .nav li {
                float: left;                   // 選單項目靠左浮動變橫向
            }
            .nav li a {    
                display: block;                // 轉為區塊元素增加點擊範圍
                color: white;                  // 文字白色
                text-align: center;  
                padding: 14px 16px;            // 設定上下左右內邊距
                text-decoration: none;         // 移除超連結下劃線
            }
            .nav li a:hover {
                background-color: #111;        // 滑鼠懸停時背景變深黑
            }
            // 下拉式選單
            .dropdown:hover .dropdown-content {
                display: block;   // 滑鼠移入時顯示下拉內容
            }
            li.dropdown:hover{
                background-color: #333;  
            }
            .dropdown-content {  
                display: none;                 // 預設隱藏選單
                position: absolute;            // 絕對定位浮在最上層
                background-color: #333;        
                min-width: 160px;              // 設定最少寬度
                z-index: 1;                    // 確保層級在最前不被遮擋
            }
            .dropdown-content a {
                color: black;                  // 下拉選單文字顏色
                padding: 12px 16px;            
                text-decoration: none;         
                display: block;                
                text-align: left;              // 文字靠左對齊
            }
            // 輪播圖外層
            .slider{
                background-color: black;       
            }
            // 漸層橫幅
            .banner{
                background-image: linear-gradient(#ABDCFF,#0396FF); // 藍色漸層背景
                padding:30px;
            }
            .banner h1{
                padding: 20px;
            }        
            // 師資團隊
            .faculty {
                display: block;
                justify-content: center;
                background-color:white;
                padding:40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            .faculty .container {
                display: flex;
                justify-content: space-around; // 元素平均分配且兩側留空
                align-items: center;
            }
            .faculty .teacher{
                display:block;
                text-decoration: none;
            }
            .faculty .teacher img{
                height: 200px;                 
                width: 200px;                  
            }
            .faculty .teacher h3{
                color: White;                  
                background-color: rgba(39,40,34,.500); // 50% 透明度半透明背景
                text-align: center;           
            }
            // 聯絡資訊
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;              
                margin-bottom: 30px;                
            }
            .contact h2{
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            .contact .infos{
                display:flex;
                margin-top: 30px; 
                justify-content: center;
            }
            .contact .infos .left{
                display:block;
                text-align: left;              
                margin-right: 30px;            
            }
            .contact .infos .left b{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: Gray;
                font-size: 18px;
                line-height: 18px;             
            }
            .contact .infos .left span{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);    
                font-size: 16px;
                padding-left: 27px;            // 左側縮排產生層次
            }
            .contact .infos .right{
                height: 200px;               
            }
            .contact .infos .right iframe{
                width: 100%;                   // 嵌入地圖寬度填滿
                height: 100%;                  // 嵌入地圖高度填滿
                border: 1px solid rgba(39,40,34,0.50); 
            }
            // 頁尾
            .footer{
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30); 
                padding: 30px 0;
            }
            // 登入彈出視窗
            .modal {
                display: none;                 // 預設隱藏視窗
                position: fixed;               // 固定定位不隨頁面捲動
                z-index: 1;                    
                right: 50px;                   
                top: 50px;                     
                width: 20%;                    
                height: 20%;                   
                overflow: auto;                
                background-color: rgba(255,255,255,0.9); 
                padding-top: 50px;
            }  
            // 佈告欄
            .bulletin{
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153); 
                padding: 30px 0;
            }
            .bulletin h1{
                padding:10px;
            }
            .bulletin table{
                border-collapse:collapse;      // 合併表格相鄰邊框
                font-family: 微軟正黑體;
                font-size:16px; 
                border:1px solid #000;
            }
            .bulletin table th{
                background-color: #abdcff;     
                color: #ffffff;                
            }
            .bulletin table td{
                background-color: #ffffff;     
                color: #0396ff;                
            }
        </style>
    </head>
    <body>
        <!-- // 網頁最上方頂部區塊 -->
        <div class="top">
            <div class="container">
                <!-- // 學校標誌與系所名稱 -->
                <div class="logo">
                  <img src="https://github.com">
                  明新科技大學資訊管理系
                </div>
                <!-- // 右側功能選單 -->
                <div class="top-nav">
                  <a href="#">明新科大</a>
                  <a href="#">明新管理學院</a>
                  
                  <!-- // 點擊文字時，透過 JS 將登入視窗顯示 (block) -->
                  <label onclick="document.getElementById('login').style.display='block'" style="cursor:pointer;">登入</label>
                  
                  <!-- // 登入視窗主體 -->
                  <div id="login" class="modal">
                    <!-- // 點擊 X 時，透過 JS 將登入視窗隱藏 (none) -->
                    <span onclick="document.getElementById('login').style.display='none'" style="cursor:pointer;">&times; 管理系統登入</span>
                    <!-- // 登入表單 -->
                    <form method="post" action="10.login.php">
                        帳號：<input type="text" name="id"><br />
                        密碼：<input type="password" name="pwd"><p></p>
                        <input type="submit" value="登入"> <input type="reset" value="清除">
                    </form>
                  </div>  
                </div>
              </div>
        </div>
        <!-- // 主導覽列 -->
        <div class="nav">   
            <ul>
