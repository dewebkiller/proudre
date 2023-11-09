<?php

/* form/templates/blocks/text.hbs */
class __TwigTemplate_26dcd169b6e806ee1a030ad1ef0af3d92e6aac020a518154b85e49d5d400f223 extends Twig_Template
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
        echo "{{#unless params.label_within}}<label>{{ params.label }}{{#if params.required}} *{{/if}}</label>{{/unless}}
<input type=\"text\" disabled=\"disabled\" value=\"\" placeholder=\"{{#if params.label_within}}{{ params.label }}{{#if params.required}} *{{/if}}{{/if}}\" />";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/text.hbs";
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
        return new Twig_Source("", "form/templates/blocks/text.hbs", "/home/proudrec/public_html/wp-content/plugins/mailpoet/views/form/templates/blocks/text.hbs");
    }
}
