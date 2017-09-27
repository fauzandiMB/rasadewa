<?php

/* PrestaShopBundle:Admin:layout.html.twig */
class __TwigTemplate_a0de7182407dd117216d4d7cf848e25e630089c5f20bca624e91cca0f7b8c50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
            'content_header' => array($this, 'block_content_header'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_legacy_controller"), "method"), ((        // line 28
array_key_exists("layoutTitle", $context)) ? ((isset($context["layoutTitle"]) ? $context["layoutTitle"] : $this->getContext($context, "layoutTitle"))) : ("")), ((        // line 29
array_key_exists("layoutHeaderToolbarBtn", $context)) ? ((isset($context["layoutHeaderToolbarBtn"]) ? $context["layoutHeaderToolbarBtn"] : $this->getContext($context, "layoutHeaderToolbarBtn"))) : (array())), ((        // line 30
array_key_exists("layoutDisplayType", $context)) ? ((isset($context["layoutDisplayType"]) ? $context["layoutDisplayType"] : $this->getContext($context, "layoutDisplayType"))) : ("")), ((        // line 31
array_key_exists("showContentHeader", $context)) ? ((isset($context["showContentHeader"]) ? $context["showContentHeader"] : $this->getContext($context, "showContentHeader"))) : (true)), ((        // line 32
array_key_exists("headerTabContent", $context)) ? ((isset($context["headerTabContent"]) ? $context["headerTabContent"] : $this->getContext($context, "headerTabContent"))) : ("")), ((        // line 33
array_key_exists("enableSidebar", $context)) ? ((isset($context["enableSidebar"]) ? $context["enableSidebar"] : $this->getContext($context, "enableSidebar"))) : (false)), ((        // line 34
array_key_exists("help_link", $context)) ? ((isset($context["help_link"]) ? $context["help_link"] : $this->getContext($context, "help_link"))) : ("")))), "PrestaShopBundle:Admin:layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c36abc89a7e7558efaf4c2dbbc25c9b35fd358bb10add423cde1770ced816ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36abc89a7e7558efaf4c2dbbc25c9b35fd358bb10add423cde1770ced816ee6->enter($__internal_c36abc89a7e7558efaf4c2dbbc25c9b35fd358bb10add423cde1770ced816ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:layout.html.twig"));

        // line 38
        $context["ps"] = $this->loadTemplate("PrestaShopBundle:Admin:macros.html.twig", "PrestaShopBundle:Admin:layout.html.twig", 38);
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36abc89a7e7558efaf4c2dbbc25c9b35fd358bb10add423cde1770ced816ee6->leave($__internal_c36abc89a7e7558efaf4c2dbbc25c9b35fd358bb10add423cde1770ced816ee6_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86a8c93e13ef339bf38b4913b6f59d6f3e7d5db10d105927b632b4c0f273ee64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a8c93e13ef339bf38b4913b6f59d6f3e7d5db10d105927b632b4c0f273ee64->enter($__internal_86a8c93e13ef339bf38b4913b6f59d6f3e7d5db10d105927b632b4c0f273ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_86a8c93e13ef339bf38b4913b6f59d6f3e7d5db10d105927b632b4c0f273ee64->leave($__internal_86a8c93e13ef339bf38b4913b6f59d6f3e7d5db10d105927b632b4c0f273ee64_prof);

    }

    // line 45
    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_f27f31d4d98f3626df348a732901f502f68f830a7567dfc31178020780676cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27f31d4d98f3626df348a732901f502f68f830a7567dfc31178020780676cca->enter($__internal_f27f31d4d98f3626df348a732901f502f68f830a7567dfc31178020780676cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        // line 46
        echo "  <script>
    var translate_javascripts = ";
        // line 47
        echo twig_jsonencode_filter((isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
        
        $__internal_f27f31d4d98f3626df348a732901f502f68f830a7567dfc31178020780676cca->leave($__internal_f27f31d4d98f3626df348a732901f502f68f830a7567dfc31178020780676cca_prof);

    }

    // line 52
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1829b05d09df6e1c303ebda34cefc59ca8d8eaa27b2fbb09014c8da8539b7578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1829b05d09df6e1c303ebda34cefc59ca8d8eaa27b2fbb09014c8da8539b7578->enter($__internal_1829b05d09df6e1c303ebda34cefc59ca8d8eaa27b2fbb09014c8da8539b7578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 53
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "error"), "method")) > 0)) {
            // line 54
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul class=\"alert-text\">
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 60
                echo "          <li>";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </ul>
    </div>
  ";
        }
        // line 65
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "failure"), "method")) > 0)) {
            // line 66
            echo "    <div class=\"alert alert-danger\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul class=\"alert-text\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "failure"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 72
                echo "          <li>";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </ul>
    </div>
  ";
        }
        // line 77
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "success"), "method")) > 0)) {
            // line 78
            echo "    <div class=\"alert alert-success\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul>
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 84
                echo "          <li>";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </ul>
    </div>
  ";
        }
        
        $__internal_1829b05d09df6e1c303ebda34cefc59ca8d8eaa27b2fbb09014c8da8539b7578->leave($__internal_1829b05d09df6e1c303ebda34cefc59ca8d8eaa27b2fbb09014c8da8539b7578_prof);

    }

    // line 91
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_04699b97d7175968b8a15cfa2720bbf928481aaa7ab142b5af792856323064a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04699b97d7175968b8a15cfa2720bbf928481aaa7ab142b5af792856323064a3->enter($__internal_04699b97d7175968b8a15cfa2720bbf928481aaa7ab142b5af792856323064a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        // line 92
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", array(), "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
        
        $__internal_04699b97d7175968b8a15cfa2720bbf928481aaa7ab142b5af792856323064a3->leave($__internal_04699b97d7175968b8a15cfa2720bbf928481aaa7ab142b5af792856323064a3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 99,  199 => 98,  191 => 92,  185 => 91,  175 => 86,  166 => 84,  162 => 83,  155 => 78,  152 => 77,  147 => 74,  138 => 72,  134 => 71,  127 => 66,  124 => 65,  119 => 62,  110 => 60,  106 => 59,  99 => 54,  96 => 53,  90 => 52,  80 => 48,  76 => 47,  73 => 46,  67 => 45,  58 => 42,  53 => 41,  47 => 40,  40 => 25,  38 => 38,  29 => 34,  28 => 33,  27 => 32,  26 => 31,  25 => 30,  24 => 29,  23 => 28,  22 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends(template_from_string(
  getLegacyLayout(
    app.request.attributes.get('_legacy_controller'),
    layoutTitle is defined ? layoutTitle : '',
    layoutHeaderToolbarBtn is defined ? layoutHeaderToolbarBtn : [],
    layoutDisplayType is defined ? layoutDisplayType : '',
    showContentHeader is defined ? showContentHeader : true,
    headerTabContent is defined ? headerTabContent : '',
    enableSidebar is defined ? enableSidebar : false,
    help_link is defined ? help_link : ''
  )
)) %}

{% import 'PrestaShopBundle:Admin:macros.html.twig' as ps %}

{% block javascripts %}
  <script src=\"{{ asset('themes/default/js/bundle/default.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/right-sidebar.js') }}\"></script>
{% endblock %}

{% block translate_javascripts %}
  <script>
    var translate_javascripts = {{ js_translatable|json_encode()|raw }};
    var PS_ALLOW_ACCENTED_CHARS_URL = {{ 'PS_ALLOW_ACCENTED_CHARS_URL'|configuration|intCast }};
  </script>
{% endblock %}

{% block content_header %}
  {% if app.session.flashbag.peek('error')|length() > 0 %}
    <div class=\"alert alert-danger\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul class=\"alert-text\">
        {% for flashMessage in app.session.flashbag.get('error') %}
          <li>{{ flashMessage }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}
  {% if app.session.flashbag.peek('failure')|length() > 0 %}
    <div class=\"alert alert-danger\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul class=\"alert-text\">
        {% for flashMessage in app.session.flashbag.get('failure') %}
          <li>{{ flashMessage }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}
  {% if app.session.flashbag.peek('success')|length() > 0 %}
    <div class=\"alert alert-success\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <ul>
        {% for flashMessage in app.session.flashbag.get('success') %}
          <li>{{ flashMessage }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}
{% endblock %}

{% block sidebar_right %}
  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"{{ asset('themes/default/img/bundle/dashboard_loading.gif') }}\"
      style=\"margin-top: 10em;\" alt=\"{{ 'Loading...'|trans({}, 'Admin.Global') }}\"
    />
  </nav>
{% endblock %}

", "PrestaShopBundle:Admin:layout.html.twig", "D:\\xampp\\htdocs\\rasadewa1\\src\\PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
