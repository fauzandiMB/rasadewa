<?php

/* PrestaShopBundle:Admin:Category/categories.html.twig */
class __TwigTemplate_f8be5439f189e4930a2477b7ed2af3e64c75df1825d120ae12f91a2098cb9195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa5fbef696a11b56abddf4d156f174da89215ebfabefdad87bcfbfaa95262fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5fbef696a11b56abddf4d156f174da89215ebfabefdad87bcfbfaa95262fca->enter($__internal_aa5fbef696a11b56abddf4d156f174da89215ebfabefdad87bcfbfaa95262fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Category/categories.html.twig"));

        // line 25
        echo "<div id=\"ps_categoryTags\" class=\"pstaggerTagsWrapper\" style=\"display: block;\">

</div>

<div id=\"ps_categoryTree\" class=\"hide\">
  ";
        // line 30
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))), "html", null, true);
        echo "
</div>
";
        
        $__internal_aa5fbef696a11b56abddf4d156f174da89215ebfabefdad87bcfbfaa95262fca->leave($__internal_aa5fbef696a11b56abddf4d156f174da89215ebfabefdad87bcfbfaa95262fca_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Category/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 30,  22 => 25,);
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
<div id=\"ps_categoryTags\" class=\"pstaggerTagsWrapper\" style=\"display: block;\">

</div>

<div id=\"ps_categoryTree\" class=\"hide\">
  {{ categories|json_encode }}
</div>
", "PrestaShopBundle:Admin:Category/categories.html.twig", "D:\\xampp\\htdocs\\rasadewa1\\src\\PrestaShopBundle/Resources/views/Admin/Category/categories.html.twig");
    }
}
