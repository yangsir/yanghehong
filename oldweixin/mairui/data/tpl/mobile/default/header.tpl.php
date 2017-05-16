<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
	<title><?php  echo urldecode($_GPC['cname'])?></title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- Mobile Devices Support @begin -->
	<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
	<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
	<meta content="no-cache" http-equiv="pragma">
	<meta content="0" http-equiv="expires">
         	        <link type="text/css" rel="stylesheet" href="./themes/mobile/default/style/common.mobile.css">
         <link type="text/css" rel="stylesheet" href="./resource/style/bootstrap.css">
         <link type="text/css" rel="stylesheet" href="./resource/style/font-awesome.min.css" />


		        <link rel="stylesheet" href="./css/base.css">
        <link rel="stylesheet" href="./css/style.css">
        <meta content="telephone=no, address=no" name="format-detection">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<!-- Mobile Devices Support @end -->
	<meta name="keywords" content="&#24494;&#20449;" />
	<meta name="description" content="&#36808;&#29790;&#24494;&#20449;&#21518;&#21488;&#31649;&#29702;&#31995;&#32479;" />
		<script type="text/javascript" src="./resource/script/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="./resource/script/bootstrap.js"></script>
	<script type="text/javascript" src="./resource/script/cascade.js"></script>
	<script type="text/javascript" src="./themes/mobile/default/script/jquery.touchwipe.js"></script>
	<script type="text/javascript" src="./themes/mobile/default/script/swipe.js"></script>
          <script src="./js/flipsnap.js"></script>
         <script src="./js/module.js"></script>
	<!--[if IE 7]>
	<link rel="stylesheet" href="./resource/style/font-awesome-ie7.min.css">
	<![endif]-->
        <style>
	/*涓汉涓績*/
	.banner{background:url('./themes/mobile/default/images/bg_home.jpg');background-size:cover;height:150px;width:100%;position:relative;}
	.avatar{position:absolute; z-index:1; width:100px; height:100px; overflow:hidden; border:1px #000 solid; background:#FFF; margin:20px 0 0 20px;}
	.user{position:absolute; z-index:1; left:140px; top:20px;}
	.user .username{font-weight:600;color:#FFF;}
	.user .usergroup{color:#CCC; font-size:14px;}
	.user .user-list{color:#FFF;}
	.user .user-list span{margin-right:10px;}
	.banner_footer{background:rgba(0, 0, 0, 0.7); width:100%; height:40px; line-height:40px; position:absolute;bottom:0;z-index:0; border-bottom:2px #00AFF0 solid;}
	.banner_footer div{padding-left:140px; position:relative; margin-top:-2px;}
	.user-box{width:100%;overflow: hidden;}
	.user-box .box-item{float:left;text-align:center;display:block;text-decoration:none;outline:none;width:33.10%;height:92px;position:relative;background:#FFF;border-bottom:1px #CCC solid;border-right:1px #CCC solid;}
	.user-box .box-item i{display:inline-block;width:45px;height:45px;margin-top:15px;font-size:35px;color:#666;}
	.user-box .box-item span{color:#333;display:block;font-size:12px;}
	.user-footer .navbar-inner{padding:0 10px;}
	.user-footer .pull-right button{margin-left:10px;}
	.user-footer .pull-left button{margin-right:10px;}
	/*蹇嵎鑿滃崟*/
	.footer-menu{position:fixed;bottom:10px;left:10px;}
	.footer-menu .menu-button{color:#00AFF0; background:#FFF; font-size:50px; width:43px; height:43px; position:relative;}
	.footer-menu .menu-button i{margin-top:-3px; position:absolute;}
	.footer-menu .menu-main{background:rgba(0, 0, 0, 0.1); padding:2px; display:none; margin-bottom:10px;}
	.footer-menu .menu-main ul{margin:0; background:#FFF; border:1px #CCC solid; position:relative; overflow:hidden;}
	.footer-menu .menu-main a{padding:0 10px;text-decoration:none;border-bottom:1px #CCC solid;display:block;height:30px;line-height:30px;position:relative;margin-bottom:-1px; font-size:14px;}
	.footer-menu .menu-main a i{margin-right:10px; color:#00AFF0;}
	.footer-menu .menu-main a span{color:#333;}
	/*tab鑿滃崟*/
	.nav-tabs{background:#EEE; margin-bottom:0;}
	.nav-tabs a{color:#333;}
	.nav-tabs .active{border-top:2px #ed2f2f solid;position:relative;margin-top:-2px;}
	.nav-tabs .active a{webkit-border-radius:0;-moz-border-radius:0;border-radius:0;margin-right:0;border-right:0;border-left:0;border-top:1px #FFF solid;}
	.tab-content{padding:0;}
	/*琛ㄥ崟?峰紡*/
	.form-table{width:100%;}
	.form-table th{width:20%; text-align:left; color:#666; vertical-align:top; padding-top:5px;}
	.form-table td{width:80%; padding-bottom:10px;}
	.form-table .submit{width:100%; margin-top:10px;}
	/*閲嶅畾涔塨ootstrap?峰紡*/
	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{width:100%; margin-bottom:0; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box;}
	input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{height:30px;}
	.input-append, .input-prepend{width:100%; margin-bottom:0;}
	select{padding:0 5px; line-height:28px; -webkit-appearance:button;}
	.checkbox.inline{margin-top:0;}
	.checkbox.inline + .checkbox.inline {margin-left:0;}
	.checkbox input[type="checkbox"]{filter:alpha(opacity:0); opacity:0;}
	.file{position:relative;}
	.file input[type="file"]{position:absolute; top:0; left:0; width:100%; filter:alpha(opacity:0); opacity:0;}
	.file button{width:100%; text-align:left;}
	.form-item{border-left:3px #ED2F2F solid; padding-left:10px; height:30px; line-height:30px; background:#F7F7F7; margin-bottom:10px;}
	/*閫傚簲鎵嬫満绔殑div?峰紡*/
	.mobile-div{border:1px #CCC solid; margin:10px 5px; background:#FFF; overflow:hidden;}
	.mobile-hd{height:35px;		line-height:35px;padding:0 10px;color: #666;text-shadow: 0 1px #FFF;border-bottom:1px solid #C6C6C6;background-color:#E1E1E1;background-image: linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);background-image: -o-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);background-image: -moz-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);background-image: -webkit-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);background-image: -ms-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, #E7E7E7),color-stop(1, #f9f9f9));-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;-webkit-border-radius: 5px 5px 0 0;-moz-border-radius: 5px 5px 0 0;-o-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;}
	.mobile-hd i{line-height:35px;}
	.mobile-content{margin:10px; overflow:hidden;}
	.mobile-content .help-block{margin-bottom:0; margin-top:3px; color:#AAA;}
	.mobile-div .collapse .mobile-content{margin-top:0; padding:0 5px; color:#666; border-left:3px #EEE solid; background:#F9F9F9;}
	.mobile-img img{width:100%;}
	.mobile-submit{margin:0 5px;}
	.mobile-li{display:block; text-decoration:none; color:#666; height:35px; line-height:35px; font-size:14px; padding:0 10px; border-top:1px #CCC solid;}
	.mobile-li:first-child{border-top:0;}
	.mobile-li i{line-height:35px;}
	.mobile-li:hover{text-decoration:none; color:#333;}
	.mobile-li .btn.pull-right,.mobile-li .btn.pull-left{margin-top:6px;}
	.alert.mobile-alert{overflow:hidden; margin:10px 5px 0 5px;}
	.alert.mobile-alert h4{line-height:25px; text-align:center;}
	/*鎵嬫満绔鑸?/
	.navbar-inner{min-height:35px; line-height:35px;}
	.navbar-inner .pull-left.btn{margin-right:5px;}
	.navbar-inner .pull-right.btn{margin-left:5px;}
	/*鎵嬫満绔垎椤?/
	.pagination ul > li > a, .pagination ul > li > span{padding:10px 5px;}
	/*鎻愮ず淇℃伅*/
	.message{margin:10% 10px 40% 10px; overflow:hidden; padding-left:80px;}
	.message i{float:left; font-size:60px; margin-left:-70px;}
	.message h3{line-height:30px;}
	.message span{color:#666; font-size:14px; line-height:23px; display:block;}
	/*鍟嗗淇℃伅*/
	.business .accordion-toggle span{display:inline-block; width:80px; margin-right:5px; font-weight:bold;}
	.business .accordion-toggle{background:#F7F7F7;}
	/*椋庢 艰缃?/
		</style>

	</head>