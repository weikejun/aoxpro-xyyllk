<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>授权后的页面</title>
<script src="http://tjs.sjs.sinajs.cn/t35/apps/opent/js/frames/client.js" language="JavaScript"></script>
<script> 
function authLoad(){
 
	App.AuthDialog.show({
	client_id : '<?=WB_AKEY;?>',    //必选，appkey
	redirect_uri : '<?=CANVAS_PAGE;?>',     //必选，授权后的回调地址
	height: 120    //可选，默认距顶端120px
	});
}
</script>
</head>
<body>
<?php if(!$this->_isAuth): ?>
<script>authLoad()</script>;
<img src="/images/450x300.jpg" />
<?php else: ?>
<h2>FLASH游戏区域</h2>

<div>usid:<?php echo $_COOKIE['usid'] ?></div>
<?php endif; ?>
</body>
</html>
