<?php

/* form/templates/blocks/date_days.hbs */
class __TwigTemplate_3980078c3357fac974d8f9cb852786b9e8478e0d81bd6a9bbd9842f432e7d410 extends Twig_Template
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
        $context["currentDay"] = twig_number_format_filter($this->env, twig_date_format_filter($this->env, "now", "d"));
        // line 2
        echo "<select id=\"{{ id }}_days\">
  <option value=\"\">";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Day");
        echo "</option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 5
            echo "    <option
    ";
            // line 6
            if (((isset($context["currentDay"]) ? $context["currentDay"] : null) == $context["day"])) {
                // line 7
                echo "      {{#if params.is_default_today}}selected=\"selected\"{{/if}}
    ";
            }
            // line 9
            echo "    >";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/date_days.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  41 => 9,  37 => 7,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/date_days.hbs", "D:\\xampp\\xampp\\htdocs\\8848webs\\AWP00249\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\blocks\\date_days.hbs");
    }
}
