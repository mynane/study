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
</script></head><body width="100%"><div class="mainbox"><div id="nav" class="mainnav_title"><ul><a href="<?php echo U('Article/index');?>">内容列表</a><a href="<?php echo U('Article/edit?id='.$article['id']);?>" class="on">编辑内容</a></ul></div><form id="myform" method='post' name="login" action="<?php echo U('Article/amend');?>" enctype="multipart/form-data"><input type="hidden" name="id" value="<?php echo ($article["id"]); ?>"/><table cellpadding=0 cellspacing=0 class="table_form" width="100%"><tr><td width="15%">标题:</td><td><input type="text" class="input-text" name="title" size="60" value="<?php echo ($article["title"]); ?>"/><font color="red">选填！若不填系统将自动从内容中截取。</font></td></tr><tr><td width="15%">内容:</td><td><textarea rows="10" cols="80" name="content" validate="required:true"><?php echo ($article["content"]); ?></textarea></td></tr><?php if(!empty($article['pic_url'])){ ?><tr><td width="15%">原图片:</td><td><?php if(strpos(strtolower($article['pic_url']),'http://') === false){ ?><img src="./Uploads/Images/<?php echo ($article['pic_url']); ?>"/><?php }else{ ?><img src="<?php echo ($article['pic_url']); ?>"/><?php } ?></td></tr><?php } ?><tr><td width="15%">图片:</td><td><input type="file" name="pic"/></td></tr><tr><td width="15%">视频:</td><td><input type="text" class="input-text" name="video" value="<?php echo ($article["video"]); ?>" size="60"/> 视频的flash地址.. <a href="./Public/Demo/" target="_blank" style="color:red;">点击查看上传视频演示例子</a></td></tr><tr><td width="15%">标签:</td><td><input type="text" class="input-text" name="tag" value="<?php echo ($article["tag"]); ?>" size="40"/> （最多3个标签，用空格分隔）</td></tr><tr><td width="15%">选项:</td><td><input name="is_anonymous" type="checkbox" onclick="this.value=this.checked?'1':'0'" <?php if($article['is_anonymous']){ ?>checked="checked"<?php } ?> />	 匿名投稿</td></tr><tr><td width="15%">顶的数量:</td><td><input type="text" class="input-text" name="upper" size="25" value="<?php echo ($article["upper"]); ?>"/></td></tr><tr><td width="15%">踩的数量:</td><td><input type="text" class="input-text" name="below" size="25" value="<?php echo ($article["below"]); ?>"/></td></tr><tr><td width="15%">状态:</td><td><label><input name="status" type="radio" value="1" <?php if($article['status'] == 1){ ?>checked="checked"<?php } ?>/>	开启</label><label><input name="status" type="radio" value="0" <?php if($article['status'] == 0){ ?>checked="checked"<?php } ?>/>	隐藏</label></td></tr></table><div class="btn"><input TYPE="submit" name="dosubmit" value="提交" class="button" /><input type="reset" value="取消" class="button" /></div></form></body></html>