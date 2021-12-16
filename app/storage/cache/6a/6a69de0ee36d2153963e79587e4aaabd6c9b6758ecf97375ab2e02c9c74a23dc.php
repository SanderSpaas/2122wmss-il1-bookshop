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

/* index.twig */
class __TwigTemplate_1cff353b79a4ad57b419b0f569ca9554e2839b226cd25d3e4c107fbdb0506186 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["imagesPath"] = "/files/covers/";
        // line 2
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- content -->
    <div class=\"container\">
        <!-- books -->
        <section id=\"books\" class=\"row\">
            ";
        // line 8
        if ( !twig_test_empty(($context["books"] ?? null))) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["books"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 10
                echo "                    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                        <article id=\"book-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 11), "html", null, true);
                    echo "\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                            <div class=\"well book-wrapper\">
                                <p>
                                    <img src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, ($context["imagesPath"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 14), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "cover_extension", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" alt=\"&ldquo;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 14), "html", null, true);
                    echo "&rdquo;, uploaded by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "username", [], "any", false, false, false, 14), "html", null, true);
                    echo " in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "topic_title", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" title=\"&ldquo;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 14), "html", null, true);
                    echo "&rdquo;, uploaded by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "username", [], "any", false, false, false, 14), "html", null, true);
                    echo " in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "topic_title", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" class=\"book-cover img-responsive\" />
                                </p>
                                <ul class=\"text-center list-unstyled list-inline book-meta\">
                                    <li class=\"book-meta-uploader\">
                                        <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "username", [], "any", false, false, false, 19), "html", null, true);
                    echo "
                                    </li>
                                    <li class=\"book-meta-topic\">
                                        <span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span>
                                        <a href=\"index.php?topic=";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "topic_topic_id", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">
                                            ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "topic_title", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                                        </a>
                                    </li>
                                    <li class=\"book-meta-numpages\">
                                        <span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span>
                                        ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "numpages", [], "any", false, false, false, 29), "html", null, true);
                    echo "
                                    </li>
                                </ul>
                            </div>
                        </article>
                    ";
                }
                // line 35
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
        } else {
            // line 37
            echo "                <p>
                    Er bestaan geen boeken in deze categorie.
                </p>
            ";
        }
        // line 41
        echo "        </section>
        <!-- image modal ((ab)use bootstrap for lightbox) -->
        <div class=\"modal modal-wide fade\" id=\"img-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">
                            &hellip;
                        </h4>
                    </div>
                    <div class=\"modal-body text-center\">
                        <img src=\"\" alt=\"\" title=\"\" style=\"max-width: 100%;\" />
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  136 => 37,  133 => 36,  127 => 35,  118 => 29,  110 => 24,  106 => 23,  99 => 19,  76 => 14,  69 => 11,  66 => 10,  61 => 9,  59 => 8,  53 => 4,  49 => 3,  44 => 2,  42 => 1,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/templates/index.twig");
    }
}
