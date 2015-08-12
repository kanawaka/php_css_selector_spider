<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<form role="form">
    <div class="form-group">
        <label for="name">名称</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="请输入名称">
    </div>
    <div class="form-group">
        <label for="info">描述信息</label>
        <input type="text" class="form-control" id="info" name="info"
               placeholder="请输入描述信息">
    </div>
    <div class="form-group">
        <label for="inputfile">案例截图</label>
        <input type="file" id="inputfile">
    </div>
    <div class="form-group">
        <label for="unit_reg">单元格正则</label>
        <input type="text" class="form-control" id="unit_reg" name="unit_reg"
               placeholder="请输入单元格正则">
    </div>
    <div class="form-group">
        <label for="name_reg">名字正则</label>
        <input type="text" class="form-control" id="name_reg" name="name_reg"
               placeholder="请输入名字正则">
    </div>
    <div class="form-group">
        <label for="phone_reg">电话正则</label>
        <input type="text" class="form-control" id="phone_reg" name="phone_reg"
               placeholder="请输入电话正则">
    </div>
    <div class="form-group">
        <label for="max_page">最大页数</label>
        <input type="text" class="form-control" id="max_page" name="max_page"
               placeholder="请输入最大页数">
    </div>
    <div class="form-group">
        <label for="page_key">分页单词</label>
        <input type="text" class="form-control" id="page_key" name="page_key"
               placeholder="请输入分页单词">
    </div>
    <div class="form-group">
        <label>分页词是否在?中</label>
        <select class="form-control">
            <option>是</option>
            <option>否</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>