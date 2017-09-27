<?php /* Smarty version Smarty-3.1.19, created on 2017-09-27 22:09:23
         compiled from "D:\xampp\htdocs\rasadewa1\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:648159cbbf23ceb423-13686320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c195b4b5e518c5f7087602b8056b2c642edb52d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rasadewa1\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1506523770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648159cbbf23ceb423-13686320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbbf23cf3af6_66061123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbbf23cf3af6_66061123')) {function content_59cbbf23cf3af6_66061123($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
