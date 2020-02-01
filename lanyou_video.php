<?php
/*
Plugin Name: 万能解析播放器-白云对其修复
Version: 2.0
Plugin URL: http://xuboke.com
Description: (修复版)由白云修复的蓝优万能解析播放器一个牛X的播放器
Author: 蓝优 2019.7.1由蓝色天空修复接口
Author URL: http://wuy6.cn/
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function videoly_tool(){?>
<script>
$(document).ready(function(){
$(".videoly_charu").click(function(){
//解析地址如果失效，可自行更改。
$($(".ke-edit-iframe:first").contents().find(".ke-content")).append("<iframe width='100%' height='" + ($('#mediaheight').val()) + "' src='http://jx.drgxj.com/?url=" + ($('#mediaurl').val()) + "' scrolling='no' frameborder='0' allowfullscreen></iframe>");

});
//关闭按钮
$(".videoly_close").click(function(){
$("#videoly_con").css("display","none");}); 
$("#videoly_title").click(function(){
$("#videoly_con").css("display","block");
}); 

});
</script>
<style>
#videoly_box{font-weight:bold;font-size:12px;margin:5px 0; cursor:pointer;}
#videoly_box #videoly_title{width:50px;height:auto;border: 0;padding: 10px 15px;font-size: 12px;margin: 5px 10px 5px 0;color: #fff;background-color: #20A2DE;cursor:pointer;text-align:center;}
#videoly_box #videoly_title:hover{background-color:#ff9000;}
#videoly_con{font-weight:normal;margin:5px 0 10px 0;display:none;border: 1px solid #ccc;padding: 10px;width:500px;float:left}
#videoly_con p{margin:0 0 10px 0;font-size:14px;}
#videoly_con input[type="text"]{width:400px;font-size:12px; outline:none}
#videoly_con span{cursor:pointer;padding:10px 10px;float:left;font-size: 14px;margin: 0 10px 0 0;background: #5cb85c;color:#fff;font-weight:bold;}
#videoly_con span:hover{background:#00aff0 !important;color:#fff !important;}
#mediawidth,#mediaheight{width:55px !important;}
.medimg,.medfull{display:none;}
</style>
<div id="videoly_box">
<div id="videoly_title">白云解析</div> 
<div id="videoly_con">
<p>视频地址：<input type="text" name="mediaurl" id="mediaurl" placeholder="这里输入调用文件的地址" /></p>
<p>设置宽度：<input type="text" name="mediawidth" id="mediawidth" value="100%" /></p>
<p>设置高度：<input type="text" name="mediaheight" id="mediaheight" value="480" /></p>
<p>自动播放：<select name="mediaauto" id="mediaauto"><option value="true">自动</option><option value="false">禁止</option></select></p>
<p style="margin:10px 0 10px 0px;"><span class="videoly_charu">插入代码</span> <span class="videoly_close">关闭工具</span></p></div>
</div><div style="clear:both"></div>
<?php }
addAction('adm_writelog_head', 'videoly_tool');
