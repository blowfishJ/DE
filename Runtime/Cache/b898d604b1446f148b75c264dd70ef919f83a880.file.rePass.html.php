<?php /* Smarty version Smarty-3.1.6, created on 2015-05-18 18:09:37
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Manager\rePass.html" */ ?>
<?php /*%%SmartyHeaderCode:38515559ba0e9ea575-60070639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b898d604b1446f148b75c264dd70ef919f83a880' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Manager\\rePass.html',
      1 => 1431943772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38515559ba0e9ea575-60070639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5559ba0eac902',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559ba0eac902')) {function content_5559ba0eac902($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改密码</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理中心-》修改密码</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>
                    	<input type="password" name="opassword" placeholder="请输入原密码" />
                    </td>
                </tr>
                <tr>
                    <td>
                    	<input type="password" name="mg_password" placeholder="请输入新密码" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="确认修改"/>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
<?php }} ?>