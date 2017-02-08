<?php

/* user/list.html.twig */
class __TwigTemplate_0b424aeb46dcf258f6e045f27c3d8111b4b3406a423d2d7d18e6fec1cf6d0f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/list.html.twig", 1);
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
        echo "User List";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <table class=\"table table-striped\">
        <tr>
            <th>Name</th>
            <th>Organisation</th>
            <th>Employee ID</th>
            <th>&nbsp;</th>
        </tr>
   ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "       <tr>
           <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "organisation", array()), "name", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "employeeId", array()), "html", null, true);
            echo "</td>
           <td><a href=\"/users/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\">view</a></td>
       </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block pageHeader %}User List{% endblock %}

{% block content %}
    <table class=\"table table-striped\">
        <tr>
            <th>Name</th>
            <th>Organisation</th>
            <th>Employee ID</th>
            <th>&nbsp;</th>
        </tr>
   {% for user in users %}
       <tr>
           <td>{{ user.name }}</td>
           <td>{{ user.organisation.name }}</td>
           <td>{{ user.employeeId }}</td>
           <td><a href=\"/users/{{ user.id }}\">view</a></td>
       </tr>
   {% endfor %}
    </table>
{% endblock %}", "user/list.html.twig", "/var/www/slim/app/templates/user/list.html.twig");
    }
}
