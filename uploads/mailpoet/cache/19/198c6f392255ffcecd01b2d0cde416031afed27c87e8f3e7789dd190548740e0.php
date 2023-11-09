<?php

/* form/templates/settings/label.hbs */
class __TwigTemplate_67e7b5e2636af066b67fdd766ee2d8eff025c916d8bc2c573fe863c57a6eb843 extends Twig_Template
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
  <label for=\"label\">";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Label:");
        echo "</label>
  <input id=\"label\" type=\"text\" name=\"params[label]\" value=\"{{ params.label }}\" />
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/label.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/label.hbs", "D:\\xampp\\xampp\\htdocs\\8848webs\\AWP00249\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\settings\\label.hbs");
    }
}
