<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('header', TEMPLATE_INCLUDEPATH);?>
<?php  session_save_path('./data');?>
<?php  session_start();?>
<?php  $result = site_article_search($cid);?>
<?php  $pid=$_GPC['pid'];?>
<?php  $s=1;?>
<?php  $scale=1;?>
<?php  $flag=$_GPC['flag'];?>
<?php  if($_SESSION['view']='50220136'&&$_SESSION['psw']=='456') { ?>
<?php  if($pid==10) { ?>
<body style=" background:url(img/g_01.jpg) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                <?php  if(is_array($category)) { foreach($category as $item) { ?>
               	<li id="n_0<?php  echo $s++;?>"><a style="font-size:20;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'cid' =>$item['id'], 'weid' => $_W['weid']))?>"><img src="img/i_0<?php  echo $scale++;?>.png" width="24" height="24" /><?php  echo $item['name'];?>
</a></li>
        	     
<?php  } } ?>	
 </ul>
    </div>
</section>
<?php  } ?>
<?php  if(($cid==11||$cid==12||$cid==13||$cid==14||$cid==15)&&!$pid) { ?>

<body>

<script>
function showC(c,id,url)
{
var xmlhttp;
if (id=="")
  {
  document.getElementById(c+id).innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(c+id).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url+"weid=<?php  echo $_W['weid'];?>&id="+id,true);
xmlhttp.send();
}
</script>
<style>
img{width:102;height:70;}
</style>

<section>

	<div class="list">
    	<ul>	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>

        	<li><span class="play"></span><?php  if($row['thumb']) { ?><img src="<?php  echo $_W['attachurl'];?><?php  echo $row['thumb'];?>" /><?php  } else { ?><img src="img/sthumb.jpg" /><?php  } ?>
<a style="display:block;overflow:hidden;text-decoration:none;width:52%;height:20;" href="<?php  echo $this->createMobileUrl('detail4', array('name' => 'detail4','cname'=>urlencode($row['title']), 'id' => $row['id'], 'weid' => $_W['weid']))?>"><b><?php  echo $row['title'];?></b></a><p  style="overflow:hidden;width:53%;height:20;margin-top:-10px;">
<?php  echo $row['source'];?></p><p><span  id="credit<?php  echo $row['id'];?>" onclick="javascript:this.style.color='red';showC('credit',<?php  echo $row['id'];?>,'cool.php?')" class="collect"><img src="img/c_05.png" onload="showC('credit',<?php  echo $row['id'];?>,'cool.php?now=real&')" style="display:none;" /></span><span class="check"><?php  echo $row['isread'];?></span></p></li>	                                                      	</li>
	<?php  } } ?>
 </ul>
    </div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($pid==4) { ?>
<body class="b_g" style="margin-top:-20px">
<section>
	<img src="img/f_01.png" width="100%"  />
</section>
<section>
	<div class='list'>
    	<ul>
       <?php  if(is_array($category)) { foreach($category as $item) { ?>
    	
	<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list', 'cid' => $item['id'],'flag' => 'y','cname'=>urlencode($item['name']),'weid' => $_W['weid']))?>">
  <?php  echo $item['name'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $item['date'])?>
                       </font></b>										
	</li>
	
<?php  } } ?>
    	    </ul>
</div>
</section>
<?php  } ?>
<?php  if(($cid==6||$cid==8||$cid==9||$cid==81||$cid==82||$cid==48||$cid==49||$cid==50||$cid==51)&&!$pid) { ?>
<style>
img{width:72;height:48;}
</style>
<body>
<section>
	<div class="list">
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

              <?php  if($row['thumb']) { ?><img src="<?php  echo $_W['attachurl'];?><?php  echo $row['thumb'];?>" /><?php  } else { ?><img src="img/sthumb.jpg" /><?php  } ?>
             <a style="display:block;overflow:hidden;text-decoration:none;width:52%;height:20;" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'],'cname'=>urlencode($row['title']), 'weid' => $_W['weid']))?>">
  <b><?php  echo $row['title'];?></b></a><div style="position:absolute;top:11;right:0;"><font><?php  echo date('Y-m-d', $row['createtime'])?></font></div><p style="overflow:hidden;width:70%;height:20;"><?php  echo $row['source'];?></p>
            												
	</li>
	<?php  } } ?>
 </ul>
    </div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($pid==47) { ?>
<body class="b_g" style="margin-top:-20px">
<section>
	<img src="img/b_02.png" width="100%"  />
</section>
<section>
	<div class='list'>
    	<ul>
       <?php  if(is_array($result['list'])) { foreach($result['list'] as $item) { ?>
    	
	<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $item['id'],'cname'=>urlencode($item['title']),'weid' => $_W['weid']))?>">
  <?php  echo $item['title'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $item['createtime'])?>
                       </font></b>										
	</li>
	
<?php  } } ?>
    	    </ul>
</div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($pid==56) { ?>
<body class="b_g" style="margin-top:-20px">
<section>
	<img src="img/b_01.jpg" width="100%"  />
</section>
<section>
	<ul class="class">
       <?php  if(is_array($category)) { foreach($category as $item) { ?>
    	<li><a style="font-size:16;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'cid' =>$item['id'], 'weid' => $_W['weid']))?>"><img src="img/img/img_0<?php  echo $s++;?>.jpg" width="140" height="100" /><?php  echo $item['name'];?></a></li>
<?php  } } ?>
    	    </ul>
</section>

<?php  } ?>
<?php  if($pid==35) { ?>
<body>
<section>
	<div class='list'>
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'], 'cname'=>urlencode($row['title']),'weid' => $_W['weid']))?>">
  <?php  echo $row['title'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $row['createtime'])?>
              </font></b>
												
	</li>
	<?php  } } ?>
 </ul>
    </div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($flag=='y') { ?>
<style>
.ileft{width:72;height:56;float:left;}
</style>
<body>
<section>
	<div class="list">
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

              <?php  if($row['thumb']) { ?><img class="ileft" src="<?php  echo $_W['attachurl'];?><?php  echo $row['thumb'];?>" /><?php  } else { ?><img src="img/sthumb.jpg" class="ileft"  /><?php  } ?>
             <a style="display:block;overflow:hidden;text-decoration:none;width:56%;line-height:99%;" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'],'cname'=>urlencode($row['title']), 'weid' => $_W['weid']))?>">
  <b><?php  echo $row['title'];?></b></a><div style="overflow:hidden;width:70%;height:20;"><?php  echo $row['source'];?></div><div style="position:absolute;top:11;right:0;"><font><?php  echo date('Y-m-d', $row['createtime'])?></font></div>
</li>	                                                      	</li>
	<?php  } } ?>
 </ul>
    </div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($flag=='s') { ?>
<body>
<section style="position:relative;top:0">
	<div class='list'>
    	<ul>
		<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','top'=>'t','cname'=>urlencode('我要报名'),'cid' =>'59','pid'=>'59','flag' =>'p', 'weid' => $_W['weid']))?>">
  我要报名<br /></a> 
              <font style="float:left">点击进入查看迈瑞学院培训报名...
              </font></b>
												
	</li>
<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('detail6', array('name' => 'detail6','cid' =>'59','cname'=>urlencode('我的课程'),'pid' =>'59','weid' => $_W['weid']))?>">
  我的课程<br /></a> 
              <font style="float:left">点击进入查看您已报名的课程...
              </font></b>
												
	</li>

	 </ul>
    </div>
</section>
<?php  } ?>


<?php  if($pid==73) { ?>
<body style=" background:url(img/g_60.png) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                <?php  if(is_array($category)) { foreach($category as $item) { ?>
               	<li id="n_0<?php  echo $s++;?>"><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list5', array('name' => 'list5','cid' =>$item['id'],'cname'=>urlencode($item['name']), 'weid' => $_W['weid']))?>"><img src="img/c_0<?php  echo $scale++;?>.png" width="24" height="24" /><?php  echo $item['name'];?>
</a></li>
        	     
<?php  } } ?>	
 </ul>
    </div>
</section>
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>

         
   <?php  if($pid==42) { ?>
<body class="b_g" style="margin-top:-20px">
<section>
	<img src="img/r_100.png" width="100%"  />
</section>

<section>
	<div class='list'>
    	<ul>
       <?php  if(is_array($category)) { foreach($category as $item) { ?>
    	
	<li>

                        <b><a style="font-size:18;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'cid' =>$item['id'],'flag' =>'talent', 'weid' => $_W['weid']))?>">
  <?php  echo $item['name'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $item['date'])?>
                       </font></b>										
	</li>
	
<?php  } } ?>
    	    </ul>
</div>
</section>

<?php  } ?>
<?php  if($pid==59&&$flag=='x') { ?>
<body class="b_g" style="margin-top:-20px">
<section>
	<img src="img/pei_02.png" width="100%"  />
</section>

<section>
	<div class='list'>
    	<ul>
       <?php  if(is_array($category)) { foreach($category as $item) { ?>
    	
	<li>

                        <b><a style="font-size:18px;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'cid' =>$item['id'],'pid'=>'59','flag' =>'p', 'weid' => $_W['weid']))?>">
  <?php  echo $item['name'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $item['date'])?>
                       </font></b>										
	</li>
	
<?php  } } ?>
    	    </ul>
</div>
</section>
<?php  } ?>


<?php  if($flag=='talent') { ?>
<body><style>
.talent{padding-top:0;padding-left:6px;padding-top:10px;border-bottom:#cccccc 1px solid;}
a:hover{color:#336699;text-decoration:none}
.pillar {
  background:transparent; 
  width:100%;
 margin-bottom:1px;
  }
.pillar h1, .pillar p {
  margin:0 10px;
  }
.pillar h1 {
  font-size:18px; 
  line-height:140%;
  color:#fff;
  }
.pillar p {
  padding-bottom:0.5em;
  }
.pillar .b1, .pillar .b2, .pillar .b3, .pillar .b4 {
  display:block; 
  overflow:hidden;
  font-size:1px;
  }
.pillar .b1, .pillar .b2, .pillar .b4 {
  height:1px;
  }
.pillar .b2, .pillar .b3 {
  background:#d66; 
  border-left:1px solid #fff; 
  border-right:1px solid #fff;
  }
.pillar .b4 {
  background:#d66; 
  border-left:4px solid #fff; 
  border-right:4px solid #fff;
  }
.pillar .b1 {
  margin:0 2px; 
  background:#fff;
  }
.pillar .b2 {
  margin:0 1px; 
  border-width:0 1px;
  }
.pillar .b3 {
  height:2px; 
  margin:0;
  }
.pillar .b4 {
  margin:0 2px;
  }
.pillar .boxcontent {
  display:block; 
  background:#d66; 
  border-left:1px solid #fff; 
  border-right:1px solid #fff; 
  margin:0 5px;
  }
</style>

<section style="position:absolute;top:0;">
<div class="pillar">
<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b2"></b><b class="b4"></b>
<div class="boxcontent">
<h1>因公司业务发展需要,现面向公司内部招聘如下人员.欢迎踊跃报名.公司将根据实际情况择优录取</h1>
</div>
<b class="b4"></b><b class="b2"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<div  class='talent'><a href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'], 'cname'=>urlencode($row['title']),'weid' => $_W['weid']))?>"><span style="color:#E53333;font-size:16px;text-align:left;">职位名称：</span><span style="font-size:16px;"><?php  echo $row['title'];?></span><br />
<span style="color:#E53333;font-size:16px;text-align:left;">工作地点：</span><span style="font-size:16px;"><?php  echo $row['source'];?></span><br />点击查看详情...</a></div>
	<?php  } } ?>
 
<section>
<?php  echo $result['pager'];?>
</section>
<?php  } ?>
<?php  if($pid==24) { ?>
<body style=" background:url(img/g_06.png) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                <?php  if(is_array($category)) { foreach($category as $item) { ?>
               	<li id="n_0<?php  echo $s++;?>"><a style="font-size:20;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list2', array('name' => 'list2','cname'=>urlencode($item['name']),'cid' =>$item['id'], 'weid' => $_W['weid']))?>"><img src="img/l_0<?php  echo $scale++;?>.png" width="24" height="24" /><?php  echo $item['name'];?>
</a></li>
        	     
<?php  } } ?>	
 </ul>
    </div>
</section>
<?php  } ?>
<?php  if($pid==18) { ?>
<body style=" background:url(img/g_10.png) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                               	<li id="n_01"><a style="font-size:20;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','flag' =>'s','cid' =>'59','cname'=>urlencode('我的培训'),'weid' => $_W['weid']))?>"><img src="img/w_01.png" width="24" height="24" />
                              我的培训  </a></li>
        <li id="n_02"><a style="font-size:22;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('detail2', array('name' => 'detail2','cid' =>'23','cname'=>urlencode('我的积分'), 'weid' => $_W['weid']))?>"><img src="img/w_02.png" width="24" height="24" />我的积分
         
         </a></li>
	     <li id="n_03"><a style="font-size:20;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list1', array('name' => 'list1','cname'=>urlencode('我的收藏'),'weid' => $_W['weid']))?>"><img src="img/w_03.png" width="24" height="24" />我的收藏
</a></li>


 </ul>
    </div>
</section>
<?php  } ?>

<?php  if($pid==55) { ?>
<body style=" background:url(img/g_05.png) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                               	<li id="n_01"><a style="font-size:20;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','pid'=>'128','cname'=>urlencode('学院公告'),'cid' =>'128', 'weid' => $_W['weid']))?>"><img src="img/r_01.png" width="24" height="24" />
                              学院公告 </a></li>
        <li id="n_02"><a style="font-size:20;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','flag'=>'x','cname'=>urlencode('培训计划'),'pid'=>'59','cid' =>'59','weid' => $_W['weid']))?>"><img src="img/r_02.png" width="24" height="24" />培训计划
         
         </a></li>
 <li id="n_03"><a style="font-size:20;;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode('学院活动'),'pid'=>'62','cid'=>'62','flag'=>'d','weid' => $_W['weid']))?>"><img src="img/x_03.png" width="24" height="24" />学院活动
</a></li>


	      </ul>
    </div>
</section>
<?php  } ?>
<?php  if($pid==62&&$flag='d') { ?>
<body>
<script type="text/javascript" src="js/module.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<section style="width:100%" class="z2">
	<span class="pull"><?php  echo urldecode($_GPC['cname']);?><img src="img/p_bg.png" class="ml5" width="10" height="8" />
        <div class="down">
            <div class="dbg"></div>
            <ul><?php  if(is_array($category)) { foreach($category as $item) { ?>
                <li><a style="font-size:14px;color:#fff" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'pid' =>'62','cid' =>$item['id'],'flag' =>'d', 'weid' => $_W['weid']))?>"><?php  echo $item['name'];?></a></li>
             <?php  } } ?>
                           </ul>
        </div>
    </span>
</section>
<section class="z1">
	<div class='list'>
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

                        <b><a style="font-size:18;overflow:hidden;width:100%;text-decoration:none" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'],'cname'=>urlencode($row['title']), 'weid' => $_W['weid']))?>">
  <?php  echo $row['title'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $row['createtime'])?>
              </font></b>
												
	</li>
	<?php  } } ?>
 </ul>

    </div>
<div>
<?php  echo $result['pager'];?>
</div> 
</section>



<?php  } ?>
<?php  if($flag=='h'&&$pid==62) { ?>
<body>
<script type="text/javascript" src="js/module.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<section style="width:100%" class="z2">
	<span class="pull"><?php  echo urldecode($_GPC['cname']);?><img src="img/p_bg.png" class="ml5" width="10" height="8" />
        <div class="down">
            <div class="dbg"></div>
            <ul><?php  if(is_array($category)) { foreach($category as $item) { ?>
                <li><a style="font-size:14px;color:#fff" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'pid' =>'62','cid' =>$item['id'],'flag' =>'h', 'weid' => $_W['weid']))?>"><?php  echo $item['name'];?></a></li>
             <?php  } } ?>
                           </ul>
        </div>
    </span>
</section>
<section class="z1">
	<div class='list'>
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

                        <b><a style="font-size:18;overflow:hidden;width:100%;text-decoration:none" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'],'cname'=>urlencode($row['title']), 'weid' => $_W['weid']))?>">
  <?php  echo $row['title'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $row['createtime'])?>
              </font></b>
												
	</li>
	<?php  } } ?>
 </ul>
  
</div>
<div>
<?php  echo $result['pager'];?>
</div> 
</section>



<?php  } ?>
<?php  if($flag=='p') { ?>
<body>
<script>
function showC(c,id,url)
{
var xmlhttp;
if (id=="")
  {
  document.getElementById(c+id).innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(c+id).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url+"weid=<?php  echo $_W['weid'];?>&id="+id,true);
xmlhttp.send();
}
</script>

<section>
	<div class="list">
     	<ul>
                <?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
        	<li><b><a style="font-size:18;overflow:hidden;width:100%;text-decoration:none" href="<?php  echo $this->createMobileUrl('detail5', array('name' => 'detail5', 'id' => $row['id'], 'cname'=>urlencode($row['title']),'weid' => $_W['weid']))?>">
  <?php  echo $row['title'];?><a/></b><p class="g3">主讲人:<?php  echo $row['author'];?><br />点击查看详情...</p><p><span  id="credit<?php  echo $row['id'];?>" onclick="javascript:this.style.color='red';showC('credit',<?php  echo $row['id'];?>,'cool.php?')" class="collect"><img src="img/c_05.png" onload="showC('credit',<?php  echo $row['id'];?>,'cool.php?now=real&')" style="display:none;" /></span><span class="check"><?php  echo $row['isread'];?></span><span id="apply<?php  echo $row['id'];?>"  class="apply"><img src="img/c_05.png" onload="showC('apply',<?php  echo $row['id'];?>,'pi.php?')" style="display:none;" /></span></p></li>
        	        
                <?php  } } ?>

</ul>
 
    </div>
<section>
<div>
<?php  echo $result['pager'];?>
</div>
</section>
</section>
               												
	<?php  } ?>
<?php  if($flag=='m') { ?>
<body>
<section>
	<div class="slide">
        <div class="flipsnap">
            <div  class="item"><img  src="img/j_01.jpg" /></div>
            <div  class="item"><img src="img/j_02.jpg" /></div>
            <div  class="item"><img src="img/j_03.jpg" /></div>
            <div  class="item"><img src="img/j_04.jpg" /></div>
        </div>
        <div class="pointer">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
	</div>
</section>
<?php  } ?>

<?php  if($pid==62&&$flag='d') { ?>
<body>
<script type="text/javascript" src="js/module.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<section style="width:100%" class="z2">
	<span class="pull"><?php  echo urldecode($_GPC['cname']);?><img src="img/p_bg.png" class="ml5" width="10" height="8" />
        <div class="down">
            <div class="dbg"></div>
            <ul><?php  if(is_array($category)) { foreach($category as $item) { ?>
                <li><a style="font-size:14px;color:#fff" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'pid' =>'62','cid' =>$item['id'],'flag' =>'d', 'weid' => $_W['weid']))?>"><?php  echo $item['name'];?></a></li>
             <?php  } } ?>
                           </ul>
        </div>
    </span>
</section>
<section class="z1">
	<div class='list'>
    	<ul>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
	<li>

                        <b><a style="font-size:18;overflow:hidden;width:100%;text-decoration:none" href="<?php  echo $this->createMobileUrl('detail', array('name' => 'detail', 'id' => $row['id'], 'weid' => $_W['weid']))?>">
  <?php  echo $row['title'];?><br /></a> 
              <font style="float:left"><?php  echo date('Y-m-d H:i:s', $row['createtime'])?>
              </font></b>
												
	</li>
	<?php  } } ?>
 </ul>

    </div>
<div>
<?php  echo $result['pager'];?>
</div> 
</section>
<?php  } ?>
<?php  if($pid==128) { ?>
<body>
<section>
	<div class='list'>
    	<ul>
	<?php  if(is_array($category)) { foreach($category as $item) { ?>
	<li>

                        <b><a style="font-size:18;overflow:hidden;width:100%;text-decoration:none" href="mobile.php?act=module&cid=<?php  echo $item['id'];?>&weid=<?php  echo $_W['weid'];?>&name=site&cname=<?php  echo urlencode($item['name']);?>&do=list&flag=g">
  <?php  echo $item['name'];?><br /></a> 
             <font style="float:left">点击进入查看更多内容...
              </font></b>
												
	</li>
	<?php  } } ?>
 </ul>
  
</div>
</section>
<?php  } ?>

       
<?php  if($flag=='g') { ?>
<body>

<script type="text/javascript" src="js/module.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<section style="width:100%" class="z2">
	<span class="pull">
<?php  if($_GPC['top']) { ?>
迈瑞学院公告
<?php  } else { ?>
<?php  echo urldecode($_GPC['cname']);?>
<?php  } ?>
<img src="img/p_bg.png" class="ml5" width="10" height="8" />
    </span>
</section>
<section class="z1">
	<div class="list">
     	<ul>
                <?php  if(is_array($result['list'])) { foreach($result['list'] as $row) { ?>
        	<li><span style="font-size:28px;"><img src="img/t.png"  /></span><b><a style="font-size:18;overflow:hidden;width:100%;height:20;text-decoration:none" href="<?php  echo $this->createMobileUrl('detail1', array('name' => 'detail1', 'id' => $row['id'],'cname'=>urlencode($row['title']), 'weid' => $_W['weid']))?>">
 <?php  echo $row['title'];?><a/></b><p style="overflow:hidden;height:20;margin-top:-5;margin-bottom:10"  class="g3"><?php  echo date('Y-m-d H:i:s', $row['createtime'])?></p></li>
        	        
                <?php  } } ?>

</ul>
 
    </div>
<section>
<div>
<?php  echo $result['pager'];?>
</div>
</section>
</section>
	<?php  } ?>
<?php  if($pid==138) { ?>
<body style=" background:url(img/g_20.png) 0 0 no-repeat; background-size:100%;">
<section>
   <div class="nav">
   <ul>
                <?php  if(is_array($category)) { foreach($category as $item) { ?>
               	<li id="n_0<?php  echo $s++;?>"><a style="font-size:20;overflow:hidden; text-decoration:none" href="<?php  echo $this->createMobileUrl('list', array('name' => 'list','cname'=>urlencode($item['name']),'cid' =>$item['id'], 'weid' => $_W['weid']))?>"><img src="img/i_0<?php  echo $scale++;?>.png" width="24" height="24" /><?php  echo $item['name'];?>
</a></li>
        	     
<?php  } } ?>	
 </ul>
    </div>
</section>
<?php  } ?>
<?php  } else { ?>
<?php  $_SESSION['view']='50220136';?>
<?php  $_SESSION['psw']='456';?>
<body class="binding">
<section>
	<div class="blogo">
    	
    </div>
	<div class="bbox">
<form name="staff" method="get" action="mobile.php">
<input type="hidden" name="act" value="module" />
<input type="hidden" name="name" value="site" />
<input type="hidden" name="cid" value="<?php  echo $_GPC['cid'];?>" />
<input type="hidden" name="pid" value="<?php  echo $_GPC['pid'];?>" />
<input type="hidden" name="weid" value='<?php  echo $_W['weid'];?>' />
<input type="hidden" name="do" value='list' />
    	<h2>用户绑定</h2>
        <ul>
        	<li><span>工号：</span><input name="auth"  type="text"></li>
        	<li><span>密码：</span><input name="psw" type="text"></li>
        </ul>
<button class="button" onclick="javascript:staff.submit();"   />提交</button>
</form>
       
    </div>
</section>
<?php  } ?>
<?php  include $this->template('footer', TEMPLATE_INCLUDEPATH);?>