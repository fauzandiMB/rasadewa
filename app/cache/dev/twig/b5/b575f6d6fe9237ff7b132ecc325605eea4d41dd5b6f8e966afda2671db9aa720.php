<?php

/* __string_template__36bfee14c3cae9ef22c5d5f554dd240276cda48612827e81973e0732b1f1edbf */
class __TwigTemplate_baa90f2ef675c08517f4479e77a926fb21170bce89132aa76ff1b60da8570ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75aa97fa29c8142665bdcef85bb374c331c34d77b8442d1f6f7a1d682b9be01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aa97fa29c8142665bdcef85bb374c331c34d77b8442d1f6f7a1d682b9be01c->enter($__internal_75aa97fa29c8142665bdcef85bb374c331c34d77b8442d1f6f7a1d682b9be01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__36bfee14c3cae9ef22c5d5f554dd240276cda48612827e81973e0732b1f1edbf"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/rasadewa1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/rasadewa1/img/app_icon.png\" />

<title>Produk • Rasdewa</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'id';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '43a0165affc2b94de61bfcab12d83d67';
    var token_admin_orders = '87b0ea730b5799fdcadeb822496889f9';
    var token_admin_customers = '20c2a8e01c9f3b64b1e3c0b371809d39';
    var token_admin_customer_threads = '9dd353f7c4aef266d52e69cf50a83600';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'f1a03dc51df8b1442a8b531a88c51615';
    var choose_language_translate = 'Pilih bahasa';
    var default_language = '1';
    var admin_modules_link = '/rasadewa1/admin-dev/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/rasadewa1/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/rasadewa1\\/admin-dev\\/\";
var baseDir = \"\\/rasadewa1\\/\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/rasadewa1/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/rasadewa1/admin-dev/index.php?controller=AdminGamification&token=1a44af5a721a8df13284e8f3d384ad77';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a class=\"logo float-left\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\"></a>

    <div class=\"component d-none d-md-inline-block\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=cc6641321dbf05af22166c8c5f1ef9f0\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCategories&amp;addcategory&amp;token=f8607015811b1bb0736c5261b689d579\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php/module/manage?token=53944434e5cc76481e62e6fab43935ae\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php/product/new?token=53944434e5cc76481e62e6fab43935ae\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=21e9c2a911e26824e0a9d09257f17ca6\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"144\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/8?-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\"
        data-post-link=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminQuickAccesses&token=df2a97fd1bafe7e93fc54f93e2f9aab8\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Produk - List\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Tambahkan halaman ini ke QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminQuickAccesses&token=df2a97fd1bafe7e93fc54f93e2f9aab8\">
      <i class=\"material-icons\">settings</i>
      Kelola akses cepat
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/rasadewa1/admin-dev/index.php?controller=AdminSearch&amp;token=0dac9ddeb6caa82c2f137f06b2bd68d6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nama produk, SKU, referensi...\" data-icon=\"icon-book\"><i class=\"material-icons\">library_books</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nama...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_windows</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">credit_card</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor faktur\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">view_module</i> Modul</a>
      </div>
    </div>
    <button class=\"btn btn-primary\" type=\"submit\">CARI<i class=\"material-icons\">search</i></button>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Toko Anda dalam mode debug.</strong></p><p class='text-left'>Semua eror dan pesan PHP ditampilkan. Ketika Anda tidak lagi memerlukannya, <strong>matikan</strong> mode ini.</p>\">Mode debug</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/rasadewa1/\" target= \"_blank\">Rasdewa</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarts&token=f34a53ea44a61741e09964720e9d1b81&action=filterOnlyAbandonedCarts\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right pa-1 mr-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/rasadewa21%40gmail.com.jpg\" /><br>
      <span>Rasa Dewa</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmployees&amp;token=f1a03dc51df8b1442a8b531a88c51615&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Profile Anda
    </a>
    <a class=\"employee-link mt-1\" id=\"header_logout\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLogin&amp;token=d979f6a7cd9b90d50b998526726ab875&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Keluar
    </a>
  </div>
</div>
</div>

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"2\">
              <span class=\"title\">Jual</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Penjualan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\" class=\"link\"> Penjualan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminInvoices&amp;token=050b88068bb292d2064176bf38c9f64a\" class=\"link\"> Invoice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminSlip&amp;token=a45a5052bfb386b3f7cf4308f0f948a6\" class=\"link\"> Nota kredit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDeliverySlip&amp;token=a60aff766699fc4a426dff19fb7a5f70\" class=\"link\"> Nota pengiriman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarts&amp;token=f34a53ea44a61741e09964720e9d1b81\" class=\"link\"> Daftar belanja
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/rasadewa1/admin-dev/index.php/product/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/rasadewa1/admin-dev/index.php/product/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCategories&amp;token=f8607015811b1bb0736c5261b689d579\" class=\"link\"> Kategori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTracking&amp;token=75eeb807f8e700981257c3422eddca68\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=1a73f894899bed6ab311e4954d57201b\" class=\"link\"> Atribut dan Fitur
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminManufacturers&amp;token=5d2182143ca1a6592077a1f61221a92c\" class=\"link\"> Brand dan Supplier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAttachments&amp;token=587c117874cd7bc1d4d4a909233b8777\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCartRules&amp;token=21e9c2a911e26824e0a9d09257f17ca6\" class=\"link\"> Diskon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/rasadewa1/admin-dev/index.php/stock/?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomers&amp;token=20c2a8e01c9f3b64b1e3c0b371809d39\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Pelanggan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomers&amp;token=20c2a8e01c9f3b64b1e3c0b371809d39\" class=\"link\"> Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAddresses&amp;token=28909f19f8b63faf08d3abe877730f48\" class=\"link\"> Alamat
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=9dd353f7c4aef266d52e69cf50a83600\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Layanan Pelanggan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=9dd353f7c4aef266d52e69cf50a83600\" class=\"link\"> Layanan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrderMessage&amp;token=38422d6d311a9e45a0b102d3e68c5b96\" class=\"link\"> Pesan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminReturn&amp;token=3fd831ca92047f911edd0e3dedfe9226\" class=\"link\"> Retur barang
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminStats&amp;token=cc6641321dbf05af22166c8c5f1ef9f0\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistik
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"42\">
              <span class=\"title\">Peningkatan</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/rasadewa1/admin-dev/index.php/module/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modul
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/rasadewa1/admin-dev/index.php/module/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Modul &amp; Layanan
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAddonsCatalog&amp;token=3862ce9a0b2ebb8455b6a35cdefbc622\" class=\"link\"> Katalog Modul
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemes&amp;token=061594c2c1e23de5a0bcf1c8c5711410\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Desain
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemes&amp;token=061594c2c1e23de5a0bcf1c8c5711410\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemesCatalog&amp;token=83348fc4512355a26f9277af15d0c980\" class=\"link\"> Kumpulan Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCmsContent&amp;token=e86c6f78664b94cf1517d68e92980c58\" class=\"link\"> Halaman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminModulesPositions&amp;token=e2cc8dff86e6066bfb65c183f5ffe9a4\" class=\"link\"> Posisi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminImages&amp;token=6560c78ec2f971cba81a36f2ed9f9bc9\" class=\"link\"> Pengaturan Gambar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLinkWidget&amp;token=375428087f2cca0bc19d5938b21828f5\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarriers&amp;token=191f8f7ab925541d641066824db784b5\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Pengiriman
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarriers&amp;token=191f8f7ab925541d641066824db784b5\" class=\"link\"> Kurir
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminShipping&amp;token=14b7375c282a357fa85a9babbd93d12e\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPayment&amp;token=86974ec32f6f232a5a027ec9dd32f598\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pembayaran
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPayment&amp;token=86974ec32f6f232a5a027ec9dd32f598\" class=\"link\"> Cara Pembayaran
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPaymentPreferences&amp;token=55e68325aea44cd03a9f01c502986e78\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLocalization&amp;token=f70034527c818536b1a3a63a3070bd85\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internasional
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLocalization&amp;token=f70034527c818536b1a3a63a3070bd85\" class=\"link\"> Lokalisasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminZones&amp;token=13b948dfca0bfd91fa8fdffab074f4cb\" class=\"link\"> Lokasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTaxes&amp;token=f9a3d1daa79b49412fc5aa8f6c281407\" class=\"link\"> Pajak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTranslations&amp;token=be1d1204c7ebeeeb7e8459c09259c787\" class=\"link\"> Terjemahan
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\">
              <span class=\"title\">Konfigurasi</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPreferences&amp;token=ed523dd722f2aa73ca2082fcd4345833\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parameter Toko
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPreferences&amp;token=ed523dd722f2aa73ca2082fcd4345833\" class=\"link\"> Umum
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrderPreferences&amp;token=15963345d23203c98eb2bff57e141a9e\" class=\"link\"> Pengaturan Order
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPPreferences&amp;token=d428989217b67fc03dff4faef8bbf632\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerPreferences&amp;token=3f99fea957d0c787b8c9bdb18d6f8dcf\" class=\"link\"> Pengaturan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminContacts&amp;token=b891a08a57d5a81dc64cf3de3728c73c\" class=\"link\"> Kontak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminMeta&amp;token=f1db5c8875ae8475d63f843e9e52ab70\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminSearchConf&amp;token=ad8476e348398cc0283a438f15de0248\" class=\"link\"> Cari
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminGamification&amp;token=1a44af5a721a8df13284e8f3d384ad77\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"/rasadewa1/admin-dev/index.php/configure/advanced/system_information?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parameter lanjutan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"/rasadewa1/admin-dev/index.php/configure/advanced/system_information?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Informasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPerformance&amp;token=74e9f9542df6bd30b528e5e5099e9021\" class=\"link\"> Kinerja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAdminPreferences&amp;token=df120c033c48aa1ec2fa0466aeed14bc\" class=\"link\"> Administrasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmails&amp;token=52018ba0281893435134cc9d086bc5c2\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminImport&amp;token=a1de52c224c870741df818d7bfad55a3\" class=\"link\"> Impor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmployees&amp;token=f1a03dc51df8b1442a8b531a88c51615\" class=\"link\"> Karyawan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminRequestSql&amp;token=a93d36f9fcd924b8f2be17eb9cd56771\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLogs&amp;token=bf698f5706ec2df0f64d40eb0432793a\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminWebservice&amp;token=8c7c0ed0ea9cae3721dbf07ac711e823\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-inline-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\r\\n<div class=\\\"onboarding-welcome\\\">\\r\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\r\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\r\\n  <div class=\\\"content\\\">\\r\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\r\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\r\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"started\\\">\\r\\n    <p>Ayo kita mulai!<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"buttons\\\">\\r\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\r\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\",\"2\":\"Sesuaikan tawaran Anda dengan pasar: Tambahkan cara pembayaran untuk pelanggan!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dan Anda bisa memilih untuk menambahkan cara pembayaran lainnya dari sini!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\",\"2\":\"Pilih solusi pengiriman yang paling mungkin akan cocok dengan pelanggan! Buat kurir Anda sendiri atau tambahkan modul yang siap pakai.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Anda bisa menawarkan pilihan pengantaran yang lebih banyak dengan membentuk kurir tambahan\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\r\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\r\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\r\\n  <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\r\\n  <p class=\\\"text-center text-md-center\\\">\\r\\n    Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\r\\n    Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\r\\n  <\\/p>\\r\\n  <div class=\\\"container-fluid\\\">\\r\\n    <div class=\\\"row\\\">\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"starter-guide\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"forum\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Forum<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"row\\\">\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"training\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Pelatihan<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Tutorial video<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n    <\\/div>\\r\\n  <\\/div>\\r\\n  <br \\/>\\r\\n  <div class=\\\"text-center text-md-center\\\">\\r\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminWelcome&token=d449dce44ee23aa8150a7ad2ed539c5f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1076
        $this->displayBlock('content_header', $context, $blocks);
        // line 1077
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1078
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1079
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1080
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Load time: \"></i> 10.242s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontak
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Pelatihan
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=rasadewa21%40gmail.com&amp;firstname=Rasa&amp;lastname=Dewa&amp;website=http%3A%2F%2Flocalhost%2Frasadewa1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/rasadewa1/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=rasadewa21%40gmail.com&amp;firstname=Rasa&amp;lastname=Dewa&amp;website=http%3A%2F%2Flocalhost%2Frasadewa1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1245
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_75aa97fa29c8142665bdcef85bb374c331c34d77b8442d1f6f7a1d682b9be01c->leave($__internal_75aa97fa29c8142665bdcef85bb374c331c34d77b8442d1f6f7a1d682b9be01c_prof);

    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f815f91a0daec982ca56d97b8858063ee446bbe081f9d60ca8d17e1e6cf89fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f815f91a0daec982ca56d97b8858063ee446bbe081f9d60ca8d17e1e6cf89fd->enter($__internal_3f815f91a0daec982ca56d97b8858063ee446bbe081f9d60ca8d17e1e6cf89fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f815f91a0daec982ca56d97b8858063ee446bbe081f9d60ca8d17e1e6cf89fd->leave($__internal_3f815f91a0daec982ca56d97b8858063ee446bbe081f9d60ca8d17e1e6cf89fd_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_408eb66a8d4b5c270d1904bca86bb82767c550d62f4f64f06df4896d9fcf104f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408eb66a8d4b5c270d1904bca86bb82767c550d62f4f64f06df4896d9fcf104f->enter($__internal_408eb66a8d4b5c270d1904bca86bb82767c550d62f4f64f06df4896d9fcf104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_408eb66a8d4b5c270d1904bca86bb82767c550d62f4f64f06df4896d9fcf104f->leave($__internal_408eb66a8d4b5c270d1904bca86bb82767c550d62f4f64f06df4896d9fcf104f_prof);

    }

    // line 1076
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c47a7726934b9974269f10c5c9c58caee1374bf876e68dc7604f8812def5dda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47a7726934b9974269f10c5c9c58caee1374bf876e68dc7604f8812def5dda7->enter($__internal_c47a7726934b9974269f10c5c9c58caee1374bf876e68dc7604f8812def5dda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_c47a7726934b9974269f10c5c9c58caee1374bf876e68dc7604f8812def5dda7->leave($__internal_c47a7726934b9974269f10c5c9c58caee1374bf876e68dc7604f8812def5dda7_prof);

    }

    // line 1077
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6d071a9c6f86ad0f4f32032111eeae866bc57ef3f6c5ce3f88d81bc3027102f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d071a9c6f86ad0f4f32032111eeae866bc57ef3f6c5ce3f88d81bc3027102f->enter($__internal_a6d071a9c6f86ad0f4f32032111eeae866bc57ef3f6c5ce3f88d81bc3027102f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a6d071a9c6f86ad0f4f32032111eeae866bc57ef3f6c5ce3f88d81bc3027102f->leave($__internal_a6d071a9c6f86ad0f4f32032111eeae866bc57ef3f6c5ce3f88d81bc3027102f_prof);

    }

    // line 1078
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_370b0f30f16e483f296eef48ffed9001af46021c23f585fa317485d0da6232d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370b0f30f16e483f296eef48ffed9001af46021c23f585fa317485d0da6232d7->enter($__internal_370b0f30f16e483f296eef48ffed9001af46021c23f585fa317485d0da6232d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_370b0f30f16e483f296eef48ffed9001af46021c23f585fa317485d0da6232d7->leave($__internal_370b0f30f16e483f296eef48ffed9001af46021c23f585fa317485d0da6232d7_prof);

    }

    // line 1079
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_5ef42b06a5e6a367b39ae2d51d42a2b5d53fc0db0b406fb268ad96091609291d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef42b06a5e6a367b39ae2d51d42a2b5d53fc0db0b406fb268ad96091609291d->enter($__internal_5ef42b06a5e6a367b39ae2d51d42a2b5d53fc0db0b406fb268ad96091609291d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_5ef42b06a5e6a367b39ae2d51d42a2b5d53fc0db0b406fb268ad96091609291d->leave($__internal_5ef42b06a5e6a367b39ae2d51d42a2b5d53fc0db0b406fb268ad96091609291d_prof);

    }

    // line 1245
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1650abdfb3d0c1b383c286c2d48e4cd2bb50959106e79184cb7d795f55b0bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1650abdfb3d0c1b383c286c2d48e4cd2bb50959106e79184cb7d795f55b0bad->enter($__internal_a1650abdfb3d0c1b383c286c2d48e4cd2bb50959106e79184cb7d795f55b0bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1650abdfb3d0c1b383c286c2d48e4cd2bb50959106e79184cb7d795f55b0bad->leave($__internal_a1650abdfb3d0c1b383c286c2d48e4cd2bb50959106e79184cb7d795f55b0bad_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_97a51d6145e9c3909b8b5eb47f6cfdc1bb75aab925ea366fad133cd21a01ab66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a51d6145e9c3909b8b5eb47f6cfdc1bb75aab925ea366fad133cd21a01ab66->enter($__internal_97a51d6145e9c3909b8b5eb47f6cfdc1bb75aab925ea366fad133cd21a01ab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_97a51d6145e9c3909b8b5eb47f6cfdc1bb75aab925ea366fad133cd21a01ab66->leave($__internal_97a51d6145e9c3909b8b5eb47f6cfdc1bb75aab925ea366fad133cd21a01ab66_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_891283e4637133b5ad14f63bc0c08af23c3026a23dacc062705351e4ae654bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891283e4637133b5ad14f63bc0c08af23c3026a23dacc062705351e4ae654bac->enter($__internal_891283e4637133b5ad14f63bc0c08af23c3026a23dacc062705351e4ae654bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_891283e4637133b5ad14f63bc0c08af23c3026a23dacc062705351e4ae654bac->leave($__internal_891283e4637133b5ad14f63bc0c08af23c3026a23dacc062705351e4ae654bac_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__36bfee14c3cae9ef22c5d5f554dd240276cda48612827e81973e0732b1f1edbf";
    }

    public function getDebugInfo()
    {
        return array (  1366 => 1245,  1355 => 1079,  1344 => 1078,  1333 => 1077,  1322 => 1076,  1301 => 84,  1290 => 1245,  1123 => 1080,  1120 => 1079,  1117 => 1078,  1114 => 1077,  1112 => 1076,  116 => 84,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/rasadewa1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/rasadewa1/img/app_icon.png\" />

<title>Produk • Rasdewa</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'id';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '43a0165affc2b94de61bfcab12d83d67';
    var token_admin_orders = '87b0ea730b5799fdcadeb822496889f9';
    var token_admin_customers = '20c2a8e01c9f3b64b1e3c0b371809d39';
    var token_admin_customer_threads = '9dd353f7c4aef266d52e69cf50a83600';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'f1a03dc51df8b1442a8b531a88c51615';
    var choose_language_translate = 'Pilih bahasa';
    var default_language = '1';
    var admin_modules_link = '/rasadewa1/admin-dev/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/rasadewa1/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/rasadewa1/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/rasadewa1\\/admin-dev\\/\";
var baseDir = \"\\/rasadewa1\\/\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/rasadewa1/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/rasadewa1/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/rasadewa1/admin-dev/index.php?controller=AdminGamification&token=1a44af5a721a8df13284e8f3d384ad77';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a class=\"logo float-left\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\"></a>

    <div class=\"component d-none d-md-inline-block\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=cc6641321dbf05af22166c8c5f1ef9f0\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCategories&amp;addcategory&amp;token=f8607015811b1bb0736c5261b689d579\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php/module/manage?token=53944434e5cc76481e62e6fab43935ae\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php/product/new?token=53944434e5cc76481e62e6fab43935ae\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=21e9c2a911e26824e0a9d09257f17ca6\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"144\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/8?-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\"
        data-post-link=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminQuickAccesses&token=df2a97fd1bafe7e93fc54f93e2f9aab8\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Produk - List\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Tambahkan halaman ini ke QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminQuickAccesses&token=df2a97fd1bafe7e93fc54f93e2f9aab8\">
      <i class=\"material-icons\">settings</i>
      Kelola akses cepat
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/rasadewa1/admin-dev/index.php?controller=AdminSearch&amp;token=0dac9ddeb6caa82c2f137f06b2bd68d6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nama produk, SKU, referensi...\" data-icon=\"icon-book\"><i class=\"material-icons\">library_books</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nama...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_windows</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">credit_card</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor faktur\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">view_module</i> Modul</a>
      </div>
    </div>
    <button class=\"btn btn-primary\" type=\"submit\">CARI<i class=\"material-icons\">search</i></button>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Toko Anda dalam mode debug.</strong></p><p class='text-left'>Semua eror dan pesan PHP ditampilkan. Ketika Anda tidak lagi memerlukannya, <strong>matikan</strong> mode ini.</p>\">Mode debug</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/rasadewa1/\" target= \"_blank\">Rasdewa</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarts&token=f34a53ea44a61741e09964720e9d1b81&action=filterOnlyAbandonedCarts\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right pa-1 mr-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/rasadewa21%40gmail.com.jpg\" /><br>
      <span>Rasa Dewa</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmployees&amp;token=f1a03dc51df8b1442a8b531a88c51615&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Profile Anda
    </a>
    <a class=\"employee-link mt-1\" id=\"header_logout\" href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLogin&amp;token=d979f6a7cd9b90d50b998526726ab875&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Keluar
    </a>
  </div>
</div>
</div>

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"2\">
              <span class=\"title\">Jual</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Penjualan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrders&amp;token=87b0ea730b5799fdcadeb822496889f9\" class=\"link\"> Penjualan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminInvoices&amp;token=050b88068bb292d2064176bf38c9f64a\" class=\"link\"> Invoice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminSlip&amp;token=a45a5052bfb386b3f7cf4308f0f948a6\" class=\"link\"> Nota kredit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDeliverySlip&amp;token=a60aff766699fc4a426dff19fb7a5f70\" class=\"link\"> Nota pengiriman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarts&amp;token=f34a53ea44a61741e09964720e9d1b81\" class=\"link\"> Daftar belanja
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/rasadewa1/admin-dev/index.php/product/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/rasadewa1/admin-dev/index.php/product/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCategories&amp;token=f8607015811b1bb0736c5261b689d579\" class=\"link\"> Kategori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTracking&amp;token=75eeb807f8e700981257c3422eddca68\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=1a73f894899bed6ab311e4954d57201b\" class=\"link\"> Atribut dan Fitur
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminManufacturers&amp;token=5d2182143ca1a6592077a1f61221a92c\" class=\"link\"> Brand dan Supplier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAttachments&amp;token=587c117874cd7bc1d4d4a909233b8777\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCartRules&amp;token=21e9c2a911e26824e0a9d09257f17ca6\" class=\"link\"> Diskon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/rasadewa1/admin-dev/index.php/stock/?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomers&amp;token=20c2a8e01c9f3b64b1e3c0b371809d39\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Pelanggan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomers&amp;token=20c2a8e01c9f3b64b1e3c0b371809d39\" class=\"link\"> Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAddresses&amp;token=28909f19f8b63faf08d3abe877730f48\" class=\"link\"> Alamat
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=9dd353f7c4aef266d52e69cf50a83600\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Layanan Pelanggan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=9dd353f7c4aef266d52e69cf50a83600\" class=\"link\"> Layanan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrderMessage&amp;token=38422d6d311a9e45a0b102d3e68c5b96\" class=\"link\"> Pesan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminReturn&amp;token=3fd831ca92047f911edd0e3dedfe9226\" class=\"link\"> Retur barang
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminStats&amp;token=cc6641321dbf05af22166c8c5f1ef9f0\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistik
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"42\">
              <span class=\"title\">Peningkatan</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/rasadewa1/admin-dev/index.php/module/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modul
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/rasadewa1/admin-dev/index.php/module/catalog?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Modul &amp; Layanan
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAddonsCatalog&amp;token=3862ce9a0b2ebb8455b6a35cdefbc622\" class=\"link\"> Katalog Modul
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemes&amp;token=061594c2c1e23de5a0bcf1c8c5711410\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Desain
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemes&amp;token=061594c2c1e23de5a0bcf1c8c5711410\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminThemesCatalog&amp;token=83348fc4512355a26f9277af15d0c980\" class=\"link\"> Kumpulan Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCmsContent&amp;token=e86c6f78664b94cf1517d68e92980c58\" class=\"link\"> Halaman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminModulesPositions&amp;token=e2cc8dff86e6066bfb65c183f5ffe9a4\" class=\"link\"> Posisi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminImages&amp;token=6560c78ec2f971cba81a36f2ed9f9bc9\" class=\"link\"> Pengaturan Gambar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLinkWidget&amp;token=375428087f2cca0bc19d5938b21828f5\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarriers&amp;token=191f8f7ab925541d641066824db784b5\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Pengiriman
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCarriers&amp;token=191f8f7ab925541d641066824db784b5\" class=\"link\"> Kurir
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminShipping&amp;token=14b7375c282a357fa85a9babbd93d12e\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPayment&amp;token=86974ec32f6f232a5a027ec9dd32f598\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pembayaran
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPayment&amp;token=86974ec32f6f232a5a027ec9dd32f598\" class=\"link\"> Cara Pembayaran
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPaymentPreferences&amp;token=55e68325aea44cd03a9f01c502986e78\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLocalization&amp;token=f70034527c818536b1a3a63a3070bd85\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internasional
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLocalization&amp;token=f70034527c818536b1a3a63a3070bd85\" class=\"link\"> Lokalisasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminZones&amp;token=13b948dfca0bfd91fa8fdffab074f4cb\" class=\"link\"> Lokasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTaxes&amp;token=f9a3d1daa79b49412fc5aa8f6c281407\" class=\"link\"> Pajak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminTranslations&amp;token=be1d1204c7ebeeeb7e8459c09259c787\" class=\"link\"> Terjemahan
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\">
              <span class=\"title\">Konfigurasi</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPreferences&amp;token=ed523dd722f2aa73ca2082fcd4345833\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parameter Toko
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPreferences&amp;token=ed523dd722f2aa73ca2082fcd4345833\" class=\"link\"> Umum
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminOrderPreferences&amp;token=15963345d23203c98eb2bff57e141a9e\" class=\"link\"> Pengaturan Order
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPPreferences&amp;token=d428989217b67fc03dff4faef8bbf632\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminCustomerPreferences&amp;token=3f99fea957d0c787b8c9bdb18d6f8dcf\" class=\"link\"> Pengaturan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminContacts&amp;token=b891a08a57d5a81dc64cf3de3728c73c\" class=\"link\"> Kontak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminMeta&amp;token=f1db5c8875ae8475d63f843e9e52ab70\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminSearchConf&amp;token=ad8476e348398cc0283a438f15de0248\" class=\"link\"> Cari
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminGamification&amp;token=1a44af5a721a8df13284e8f3d384ad77\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"/rasadewa1/admin-dev/index.php/configure/advanced/system_information?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parameter lanjutan
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"/rasadewa1/admin-dev/index.php/configure/advanced/system_information?_token=t4six-bKUrTusJiHjwPWbJtOf9GDxHXgd3NAyVufwI4\" class=\"link\"> Informasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminPerformance&amp;token=74e9f9542df6bd30b528e5e5099e9021\" class=\"link\"> Kinerja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminAdminPreferences&amp;token=df120c033c48aa1ec2fa0466aeed14bc\" class=\"link\"> Administrasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmails&amp;token=52018ba0281893435134cc9d086bc5c2\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminImport&amp;token=a1de52c224c870741df818d7bfad55a3\" class=\"link\"> Impor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminEmployees&amp;token=f1a03dc51df8b1442a8b531a88c51615\" class=\"link\"> Karyawan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminRequestSql&amp;token=a93d36f9fcd924b8f2be17eb9cd56771\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminLogs&amp;token=bf698f5706ec2df0f64d40eb0432793a\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminWebservice&amp;token=8c7c0ed0ea9cae3721dbf07ac711e823\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-inline-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\r\\n<div class=\\\"onboarding-welcome\\\">\\r\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\r\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\r\\n  <div class=\\\"content\\\">\\r\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\r\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\r\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"started\\\">\\r\\n    <p>Ayo kita mulai!<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"buttons\\\">\\r\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\r\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\",\"2\":\"Sesuaikan tawaran Anda dengan pasar: Tambahkan cara pembayaran untuk pelanggan!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dan Anda bisa memilih untuk menambahkan cara pembayaran lainnya dari sini!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\",\"2\":\"Pilih solusi pengiriman yang paling mungkin akan cocok dengan pelanggan! Buat kurir Anda sendiri atau tambahkan modul yang siap pakai.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Anda bisa menawarkan pilihan pengantaran yang lebih banyak dengan membentuk kurir tambahan\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\r\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\r\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\r\\n  <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\r\\n  <p class=\\\"text-center text-md-center\\\">\\r\\n    Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\r\\n    Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\r\\n  <\\/p>\\r\\n  <div class=\\\"container-fluid\\\">\\r\\n    <div class=\\\"row\\\">\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"starter-guide\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"forum\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Forum<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"row\\\">\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"training\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Pelatihan<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\r\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\r\\n          <span class=\\\"link\\\">Tutorial video<\\/span>\\r\\n        <\\/a>\\r\\n      <\\/div>\\r\\n    <\\/div>\\r\\n  <\\/div>\\r\\n  <br \\/>\\r\\n  <div class=\\\"text-center text-md-center\\\">\\r\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminWelcome&token=d449dce44ee23aa8150a7ad2ed539c5f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/rasadewa1/admin-dev/index.php?controller=AdminDashboard&amp;token=23156ba046f9e5cd1eb5e32439c02a4a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Load time: \"></i> 10.242s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontak
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Pelatihan
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=rasadewa21%40gmail.com&amp;firstname=Rasa&amp;lastname=Dewa&amp;website=http%3A%2F%2Flocalhost%2Frasadewa1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/rasadewa1/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=rasadewa21%40gmail.com&amp;firstname=Rasa&amp;lastname=Dewa&amp;website=http%3A%2F%2Flocalhost%2Frasadewa1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__36bfee14c3cae9ef22c5d5f554dd240276cda48612827e81973e0732b1f1edbf", "");
    }
}
