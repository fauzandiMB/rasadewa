<?php /*%%SmartyHeaderCode:1621459cbbec6eee247-04980950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1505958746,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1621459cbbec6eee247-04980950',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cbbec7027c70_35817954',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbbec7027c70_35817954')) {function content_59cbbec7027c70_35817954($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\rasadewa1/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->

<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/rasadewa1/akun-saya" rel="nofollow">
      Akun Anda
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Akun Anda</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/rasadewa1/daftar-alamat" title="Alamat" rel="nofollow">
            Alamat
          </a>
        </li>
            <li>
          <a href="http://localhost/rasadewa1/identitas" title="Data pribadi" rel="nofollow">
            Data pribadi
          </a>
        </li>
            <li>
          <a href="http://localhost/rasadewa1/slip-order" title="Nota Kredit" rel="nofollow">
            Nota Kredit
          </a>
        </li>
            <li>
          <a href="http://localhost/rasadewa1/riwayat-pembelian" title="Penjualan" rel="nofollow">
            Penjualan
          </a>
        </li>
        
	</ul>
</div>
<!-- end D:\xampp\htdocs\rasadewa1/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }} ?>
