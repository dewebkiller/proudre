<?php

/* deactivationSurvey/index.html */
class __TwigTemplate_b7c9ead19de9252ee9efb8d0cf8bc8f298eaf8a19e2a28d633c35a5bce4e5ea5 extends Twig_Template
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
        echo "<div class=\"mailpoet-deactivate-survey-modal\" id=\"mailpoet-deactivate-survey\">
  <div class=\"mailpoet-deactivate-survey-wrap\">
    <div class=\"mailpoet-deactivate-survey\">

      <script type=\"text/javascript\" charset=\"utf-8\" src=\"https://secure.polldaddy.com/p/10007098.js\"></script>
      <noscript><a href=\"https://polldaddy.com/poll/10007098/\">Why are you deactivating MailPoet?</a></noscript>

      <a class=\"button\" id=\"mailpoet-deactivate-survey-close\">";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Close this window and deactivate MailPoet");
        echo " &rarr;</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "deactivationSurvey/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "deactivationSurvey/index.html", "/home/proudrec/public_html/wp-content/plugins/mailpoet/views/deactivationSurvey/index.html");
    }
}