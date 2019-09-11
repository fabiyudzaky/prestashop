<?php

/* @PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig */
class __TwigTemplate_c36b5f764602f04fd63af053fdf45a2fe825811269b352951af118c61d445057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'payment_preferences_form' => array($this, 'block_payment_preferences_form'),
            'payment_modules_currency_restrictions' => array($this, 'block_payment_modules_currency_restrictions'),
            'payment_modules_group_restrictions' => array($this, 'block_payment_modules_group_restrictions'),
            'payment_modules_country_restrictions' => array($this, 'block_payment_modules_country_restrictions'),
            'payment_modules_carrier_restrictions' => array($this, 'block_payment_modules_carrier_restrictions'),
            'payment_preferences_block_rest' => array($this, 'block_payment_preferences_block_rest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_preferences_form', $context, $blocks);
    }

    public function block_payment_preferences_form($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_start');
        echo "
  ";
        // line 29
        $this->displayBlock('payment_modules_currency_restrictions', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('payment_modules_group_restrictions', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('payment_modules_country_restrictions', $context, $blocks);
        // line 109
        echo "
  ";
        // line 110
        $this->displayBlock('payment_modules_carrier_restrictions', $context, $blocks);
        // line 135
        echo "
  ";
        // line 136
        $this->displayBlock('payment_preferences_block_rest', $context, $blocks);
        // line 139
        echo "
  ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 29
    public function block_payment_modules_currency_restrictions($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency restrictions", array(), "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.", array(), "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", array()), "currency_restrictions", array()), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 56
    public function block_payment_modules_group_restrictions($context, array $blocks = array())
    {
        // line 57
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group restrictions", array(), "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.", array(), "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", array()), "group_restrictions", array()), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 83
    public function block_payment_modules_country_restrictions($context, array $blocks = array())
    {
        // line 84
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country restrictions", array(), "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.", array(), "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", array()), "country_restrictions", array()), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">
            ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 110
    public function block_payment_modules_carrier_restrictions($context, array $blocks = array())
    {
        // line 111
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier restrictions", array(), "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.", array(), "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>
        <div class=\"form-group\">
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", array()), "carrier_restrictions", array()), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">
            ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 136
    public function block_payment_preferences_block_rest($context, array $blocks = array())
    {
        // line 137
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["paymentPreferencesForm"] ?? null), 'rest');
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  244 => 137,  241 => 136,  231 => 129,  222 => 123,  215 => 119,  207 => 114,  202 => 111,  199 => 110,  189 => 103,  180 => 97,  172 => 92,  164 => 87,  159 => 84,  156 => 83,  146 => 76,  137 => 70,  129 => 65,  121 => 60,  116 => 57,  113 => 56,  103 => 49,  94 => 43,  86 => 38,  78 => 33,  73 => 30,  70 => 29,  64 => 140,  61 => 139,  59 => 136,  56 => 135,  54 => 110,  51 => 109,  49 => 83,  46 => 82,  44 => 56,  41 => 55,  39 => 29,  34 => 28,  28 => 27,  25 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\Preferences\\Blocks\\payment_preferences_form_block.html.twig");
    }
}
