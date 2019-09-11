<?php

/* @PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig */
class __TwigTemplate_89ef6573edade83035ba039e9619d0943873f92c70d412e0782b979a2f105bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 32
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 33
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have more than one shop and must select one to configure payment.", array(), "Admin.Payment.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        } elseif ((        // line 38
($context["paymentModulesCount"] ?? null) == 0)) {
            // line 39
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No payment module installed", array(), "Admin.Payment.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        } else {
            // line 45
            echo "          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is where you decide what payment modules are available for different variations like your customers' currency, group, and country.", array(), "Admin.Payment.Help"), "html", null, true);
            echo "
            </p>
            <p class=\"alert-text\">
              ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A check mark indicates you want the payment module available.", array(), "Admin.Payment.Help"), "html", null, true);
            echo "
              ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If it is not checked then this means that the payment module is disabled.", array(), "Admin.Payment.Help"), "html", null, true);
            echo "
            </p>
          </div>

          ";
            // line 55
            $this->loadTemplate("@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 55)->display($context);
            // line 56
            echo "        ";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/payment_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 65,  98 => 63,  95 => 62,  88 => 57,  85 => 56,  83 => 55,  76 => 51,  72 => 50,  66 => 47,  62 => 45,  55 => 41,  51 => 39,  49 => 38,  43 => 35,  39 => 33,  37 => 32,  32 => 29,  29 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\Preferences\\payment_preferences.html.twig");
    }
}
