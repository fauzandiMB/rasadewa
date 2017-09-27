<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 22:09:23
         compiled from "D:\xampp\htdocs\rasadewa1\admin-dev\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1094359cbbf234b1963-77259660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3032a763a05c8a4efae5feee6a6034618b6d1936' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rasadewa1\\admin-dev\\themes\\default\\template\\content.tpl',
      1 => 1505958746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094359cbbf234b1963-77259660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbbf234c6112_31936399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbbf234c6112_31936399')) {function content_59cbbf234c6112_31936399($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
