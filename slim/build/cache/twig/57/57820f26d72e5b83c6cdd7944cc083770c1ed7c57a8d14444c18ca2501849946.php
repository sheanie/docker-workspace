<?php

/* layout.html.twig */
class __TwigTemplate_5559f950958948941e041542398527aa1000842a346b476bf7047a0e71f671fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Slim 3</title>
    <link href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap/css/bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap/css/bootstrap-theme.css' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Fixed navbar -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">HR System</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/profile\">My Profile</a></li>
                    <li><a href=\"/organisations\">Organisations</a></li>
                    <li><a href=\"/users\">Users</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<br />
    <div class=\"container theme-showcase\" role=\"main\">
        <div class=\"row\">
            <div class=\"page-header\">
                <h1>";
        // line 39
        $this->displayBlock('pageHeader', $context, $blocks);
        echo "</h1>
            </div>
        </div>

        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/jquery/jquery.js\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap/js/bootstrap.js\"></script>
</body>
</html>";
    }

    // line 39
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  94 => 39,  87 => 50,  83 => 49,  76 => 44,  74 => 43,  67 => 39,  34 => 9,  30 => 8,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Slim 3</title>
    <link href='{{ base_url() }}/assets/bootstrap/css/bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='{{ base_url() }}/assets/bootstrap/css/bootstrap-theme.css' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Fixed navbar -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">HR System</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/profile\">My Profile</a></li>
                    <li><a href=\"/organisations\">Organisations</a></li>
                    <li><a href=\"/users\">Users</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<br />
    <div class=\"container theme-showcase\" role=\"main\">
        <div class=\"row\">
            <div class=\"page-header\">
                <h1>{% block pageHeader %}{% endblock %}</h1>
            </div>
        </div>

        {% block content %}{% endblock %}

    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ base_url() }}/assets/jquery/jquery.js\"></script>
    <script src=\"{{ base_url() }}/assets/bootstrap/js/bootstrap.js\"></script>
</body>
</html>", "layout.html.twig", "/var/www/slim/app/templates/layout.html.twig");
    }
}
