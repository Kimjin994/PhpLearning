<?php
//include('common/common.php')

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	
<style>	
	* { margin:0; padding:0; font-size: 13px; color: #757575; }
	
#header { width: 980px;	margin: 0 auto; }	
#wrapper { width: 980px; margin:0 auto;  background:#FFFFFF url(images/img01.jpg) repeat-x top left}
#footer {clear: both; width: 980px; height: 50px; margin: 0 auto;background: #FFFFFF url(../images/img01.jpg) repeat-x top left;}
#tableContainer {display: table; border-spacing: 10px;}
#newRow {display: table-row;}
#left { display: table-cell;width:25%;}
#main { display:table-cell; width: 500px; }
	</style>
</head>
<body>
  <div id="header"> <?php include 'header.php';  ?></div>
  
  <div id="wrapper">  
    <div id="tableContainer">
      <div id="newRow">
          <div id="left"><?php include 'left.php';?></div> 
          <div id="main"> 
               <div id="main_top"></div>
               <div id="main_content">
				   <?php include 'main_top.php'  ?>
                 <!--网页主体内容-->    
               </div>
          </div><!--end of main-->
      </div><!--end of newrow-->
    </div><!--end of tablecontainer--> 
  </div><!--end of wrapper-->
  <div id="footer"> <?php include 'bottom.php'; ?> </div>
</body>
</html>
