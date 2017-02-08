<?php

/* organisation/view.html.twig */
class __TwigTemplate_53811957aa50b0271d511ebe919c7baaa79e61c45cbbac9d0e9ce47a6ec6019a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "organisation/view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        echo "View Organisation";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <dl class=\"dl-horizontal\">
        <dt>Name</dt>
        <dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "name", array()), "html", null, true);
        echo "</dd>

        <dt>Address</dt>
        <dd></dd>

        <dt>Phone Number</dt>
        <dd>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "phoneNumber", array()), "html", null, true);
        echo "</dd>
    </dl>
";
    }

    public function getTemplateName()
    {
        return "organisation/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block pageHeader %}View Organisation{% endblock %}

{% block content %}
    <dl class=\"dl-horizontal\">
        <dt>Name</dt>
        <dd>{{ organisation.name }}</dd>

        <dt>Address</dt>
        <dd></dd>

        <dt>Phone Number</dt>
        <dd>{{ organisation.phoneNumber }}</dd>
    </dl>
{% endblock %}", "organisation/view.html.twig", "/var/www/slim/app/templates/organisation/view.html.twig");
    }
}
