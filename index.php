<?php
include('public/head.html');
?>
<link rel="stylesheet" href="style/index.css">
<script src="js/index.js"></script>
<script>
    $(function(){
        $('.nav li').first().addClass('hover');
    })
</script>
<div id="banner">
    <ul class="banner">
        <!-- <li style="background-image:url(img/ban1.jpg)"></li>
        <li style="background-image:url(img/ban2.jpg)"></li>
        <li style="background-image:url(img/ban3.jpg)"></li> -->
        <li><img src="img/ban1.jpg"></li>
        <li><img src="img/ban2.jpg"></li>
        <li><img src="img/ban3.jpg"></li>
    </ul>
</div>

<div class="main">
    <div id="file">
        <div class="file">
            <img src="img/upfile.png">
            <p>拖拽文件上传，支持多文件同时上传</p>
        </div>

        <div class="btn">
            <i class="icon"></i>
            点击这里上传文件
        </div>
        <p>注意：测试阶段仅支持格式:Docx </p>

      <form action="admin/upload.php" method="post" enctype="multipart/form-data">
        <input type="radio" name="check" value="0" id="radio0" checked>
        <label for="radio0">初稿模式</label>
        <input type="radio" name="check" value="1" id="radio1">
        <label for="radio1">终稿模式</label>
        排版方案：<select name="plan" >
                    <option value="0">华中科技大学博士论文</option>
                    <option value="1">华中科技大学硕士论文</option>
                    <option value="2">华中科技大学学士论文</option>
                    <option value="3">通用排版方案</option>
                </select>
        <input type="file" multiple="multiple" name="files[]">

    </form>
    <div class="desc">
        说明：
            初稿模式会清除多数文档格式，调整标点，使文档格式统一，保留批注和审阅，清理空白区域，不加入目录和封面；<br>
            <span style="padding:0 26px"></span>终稿模式会保留主要格式，清除少量格式，删除批注和审阅，加入目录和封面；<br>
            <span style="padding:0 26px"></span>
            通用排版方案能智能识别多级标题结构，使用论文的国家标准调整格式。
    </div>
    </div>
    <div id="img"></div>
</div>

<?php

if($_POST){
    print_r($_POST);
}

 ?>

<?php
include('public/foot.html');
 ?>


