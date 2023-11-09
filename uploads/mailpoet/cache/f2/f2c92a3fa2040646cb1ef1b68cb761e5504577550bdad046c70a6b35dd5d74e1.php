<?php

/* form/templates/settings/date_default.hbs */
class __TwigTemplate_65b71b41fa22b338818f15223165288acfe63d372347c5dcad856cd64dfd39e1 extends Twig_Template
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
        // line 1
        echo "<p class=\"clearfix\">
  <label>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preselect today's date:");
        echo "</label>
  <span class=\"group\">
    <label>
      <input
        class=\"mailpoet_radio\"
        type=\"radio\"
        name=\"params[is_default_today]\"
        value=\"1\"
        {{#if params.is_default_today}}checked=\"checked\"{{/if}}
      />";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
    </label>
    <label>
      <input
        class=\"mailpoet_radio\"
        type=\"radio\"
        name=\"params[is_default_today]\"
        value=\"\"
        {{#unless params.is_default_today}}checked=\"checked\"{{/unless}}
      />";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
    </label>
  </span>
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/date_default.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  34 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/date_default.hbs", "/home/proudrec/public_html/wp-content/plugins/mailpoet/views/form/templates/settings/date_default.hbs");
    }
}
