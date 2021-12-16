<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.twig */
class __TwigTemplate_2416908ce864d8ce5a806fb5a83d9f20879437ef1c521bebb4ea9430e4a890d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!DOCTYPE html>
    <html lang=\"en\">
        <head>
            <title>
                The Library
            </title>
            <meta charset=\"UTF-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"css/bootstrap.xxs.css\" rel=\"stylesheet\">
            <link href=\"css/custom.css\" rel=\"stylesheet\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        \t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        \t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        \t<![endif]-->
        </head>
            <body>
            <!-- header -->
                <div class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\"> <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">
                                Toggle navigation
                            </span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"active\">
                                <a href=\"index.php\">
                                    All
                                </a>
                            </li>
                            <li>
                                <a href=\"index.php?topic=5\">
                                    DevOps
                                </a>
                            </li>
                            <li>
                                <a href=\"index.php?topic=2\">
                                    JavaScript
                                </a>
                            </li>
                            <li>
                                <a href=\"index.php?topic=3\">
                                    Node
                                </a>
                            </li>
                            <li>
                                <a href=\"index.php?topic=1\">
                                    PHP
                                </a>
                            </li>
                            <li>
                                <a href=\"index.php?topic=4\">
                                    Ruby on Rails
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"login.php\">
                                    Sign in
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "            <!-- footer -->
            <footer id=\"footer\">
                <div class=\"container\">
                    <p>
                        &copy; 2015, 
                        <a href=\"http://www.ikdoeict.be/\" title=\"IkDoeICT.be\">
                            IkDoeICT.be
                        </a>
                    </p>
                </div>
            </footer>
            <script src=\"js/jquery-2.1.0.min.js\"></script>
            <script src=\"js/bootstrap.min.js\"></script>
            <script src=\"js/index.js\"></script>
        </body>
    </html>
";
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 76,  124 => 77,  122 => 76,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/resources/templates/layout.twig");
    }
}
