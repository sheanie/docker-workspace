<?php

/* user/view.html.twig */
class __TwigTemplate_df296e8dc1e2ab212070888c57f7c612c6c2903be6f2e3e7b96b126cb21fd6bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/view.html.twig", 1);
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
        echo "View User";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <dl class=\"dl-horizontal\">
        <dt>Name</dt>
        <dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</dd>

        <dt>Address</dt>
        <dd>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "address", array()), "addressLine1", array()), "html", null, true);
        echo "</dd>

        <dt>Phone Number</dt>
        <dd>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "phoneNumber", array()), "html", null, true);
        echo "</dd>

        <dt>Email Address</dt>
        <dd>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "emailAddress", array()), "html", null, true);
        echo "</dd>

        <dt>Employee ID</dt>
        <dd>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "employeeId", array()), "html", null, true);
        echo "</dd>

        <dt>Role</dt>
        <dd>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "role", array()), "name", array()), "html", null, true);
        echo "</dd>

        <dt>Organisation</dt>
        <dd>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "organisation", array()), "name", array()), "html", null, true);
        echo "</dd>

        <dt>Date of Birth</dt>
        <dd>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "dateOfBirth", array()), "d/m/Y"), "html", null, true);
        echo "</dd>

        <dt>In Probation</dt>
        <dd>";
        // line 32
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "inProbation", array())) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</dd>

    </dl>
";
    }

    public function getTemplateName()
    {
        return "user/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  84 => 29,  78 => 26,  72 => 23,  66 => 20,  60 => 17,  54 => 14,  48 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block pageHeader %}View User{% endblock %}

{% block content %}
    <dl class=\"dl-horizontal\">
        <dt>Name</dt>
        <dd>{{ user.name }}</dd>

        <dt>Address</dt>
        <dd>{{ user.address.addressLine1 }}</dd>

        <dt>Phone Number</dt>
        <dd>{{ user.phoneNumber }}</dd>

        <dt>Email Address</dt>
        <dd>{{ user.emailAddress }}</dd>

        <dt>Employee ID</dt>
        <dd>{{ user.employeeId }}</dd>

        <dt>Role</dt>
        <dd>{{ user.role.name }}</dd>

        <dt>Organisation</dt>
        <dd>{{ user.organisation.name }}</dd>

        <dt>Date of Birth</dt>
        <dd>{{ user.dateOfBirth | date('d/m/Y') }}</dd>

        <dt>In Probation</dt>
        <dd>{% if user.inProbation %}yes{% else %}no{% endif%}</dd>

    </dl>
{% endblock %}", "user/view.html.twig", "/var/www/slim/app/templates/user/view.html.twig");
    }
}
