<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 22:09:23
         compiled from "D:\xampp\htdocs\rasadewa1\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298359cbbf23d70361-99512278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b569ee6572dc0f21da2bb40229bdb42989ed4f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rasadewa1\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1506523770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298359cbbf23d70361-99512278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbbf23d74929_86692797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbbf23d74929_86692797')) {function content_59cbbf23d74929_86692797($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
