<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset={:C('DEFAULT_CHARSET')}" /><title>网站后台管理 Powered by loowei.com</title><script type="text/javascript">if(self==top){window.top.location.href = '<?php echo U("Login/index");?>';}</script><link rel="stylesheet" type="text/css" href="<?php echo ($TMPL_PUBLIC); ?>Css/style.css" /><script type="text/javascript" src="./Public/Js/jquery.js"></script><script type="text/javascript" src="./Public/Js/jquery.artDialog.js?skin=aero"></script><script type="text/javascript" src="./Public/Js/iframeTools.js"></script><script type="text/javascript" src="./Public/Js/jquery.form.js"></script><script type="text/javascript" src="./Public/Js/jquery.validate.js"></script><script type="text/javascript" src="./Public/Js/date/WdatePicker.js"></script><script type="text/javascript" src="./Public/Js/jquery.colorpicker.js"></script><script type="text/javascript">	function confirm_delete(url){
		var dialog = $.dialog({
			title:'消息提醒：',
			icon:'question',
			content:'您确定要删除吗？删除后不可恢复，请谨慎操作。',
			lock:true,
			fixed:true,
			opacity:'0.5',
			ok:function (){
				location.href = url;
				return false;
			},
			cancel:true
		});
	}
</script></head><body width="100%"><div class="mainbox"><form id="myform" method='post' name="login" action="<?php echo U('Article/inspect');?>"><input type="hidden" name="id" value="<?php echo ($new["id"]); ?>" /><table cellpadding=0 cellspacing=0 class="table_form" width="100%"><tr><td width="15%">内容：</td><td style="font-size:14px;"><textarea rows="8" cols="100" name="content"><?php echo (htmlspecialchars_decode($new["content"])); ?></textarea></td></tr><?php if($new['pic_url']){ ?><tr><td width="15%">图片：</td><td style="font-size:14px;"><img src="<?php echo ($config["site_url"]); ?>/Uploads/Images/<?php echo ($new["pic_url"]); ?> "/></td></tr><?php } if($new['video']){ ?><tr><td width="15%">视频：</td><td style="font-size:14px;"><embed src="<?php echo ($new["video"]); ?>" type="application/x-shockwave-flash" /></td></tr><?php } ?><tr><td width="15%">设置标题：</td><td><input type="text" name="title" class="input-text" size="60" value="<?php echo ($new["title"]); ?>"/></td></tr><tr><td width="15%">设置Tag：</td><td><input type="text" name="tag" class="input-text" size="60" value="<?php echo ($new["tag"]); ?>"/></td></tr><tr><td width="15%">是否通过：</td><td><label style="margin-right:20px;"><input type="radio" name="action" value="1" checked="checked"/> 是</label><label><input type="radio" name="action" value="0"/> 否(删除)</label></td></tr></table><div class="btn"><input TYPE="submit" name="dosubmit" value="提交" class="button" /><input type="reset" value="取消" class="button" /></div></form></body></html>