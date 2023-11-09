<?php

/* form/templates/toolbar/exports.hbs */
class __TwigTemplate_93b22494d141c49026baa42df913aee39fbac6e1c29a77739200eea58455a1f9 extends Twig_Template
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
        echo "{{#each exports}}
  <textarea class=\"mailpoet_form_export_output\" id=\"mailpoet_form_export_{{ @key }}\" onClick=\"this.focus();this.select();\" readonly=\"readonly\">{{ this }}</textarea>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/toolbar/exports.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/toolbar/exports.hbs", "/home/proudrec/public_html/wp-content/plugins/mailpoet/views/form/templates/toolbar/exports.hbs");
    }
}
