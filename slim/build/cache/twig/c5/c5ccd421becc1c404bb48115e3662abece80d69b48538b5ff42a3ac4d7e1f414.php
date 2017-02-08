<?php

/* organisation/list.html.twig */
class __TwigTemplate_3157fbd06754e5b7e228303f41438ed823a15521e53fe54522882ead332a7e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "organisation/list.html.twig", 1);
        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = [])
    {
        echo "Organisation List";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    <table class=\"table table-striped\">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>&nbsp;</th>
        </tr>
   ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["organisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["organisation"]) {
            // line 13
            echo "       <tr>
           <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["organisation"], "name", []), "html", null, true);
            echo "</td>
           <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["organisation"], "phoneNumber", []), "html", null, true);
            echo "</td>
           <td><a href=\"/organisations/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["organisation"], "id", []), "html", null, true);
            echo "\">view</a></td>
       </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "organisation/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return  [  70 => 19,  61 => 16,  57 => 15,  53 => 14,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,];
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block pageHeader %}Organisation List{% endblock %}

{% block content %}
    <table class=\"table table-striped\">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>&nbsp;</th>
        </tr>
   {% for organisation in organisations %}
       <tr>
           <td>{{ organisation.name }}</td>
           <td>{{ organisation.phoneNumber }}</td>
           <td><a href=\"/organisations/{{ organisation.id }}\">view</a></td>
       </tr>
   {% endfor %}
    </table>
{% endblock %}", "organisation/list.html.twig", "/var/www/slim/app/templates/organisation/list.html.twig");
    }
}
