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
        echo "\t<!-- content -->
\t<div class=\"container\">

\t\t<!-- books -->
\t\t<section id=\"books\" class=\"row\">
\t\t\t<article id=\"book-6\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, (($context["imagesPath"] ?? null) . "6.png"), "html", null, true);
        echo "\" alt=\"&ldquo;A Year With Symfony&rdquo;, uploaded by Bramus in PHP\" title=\"&ldquo;A Year With Symfony&rdquo;, uploaded by Bramus in PHP\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=1\">PHP</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 205</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-10\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/10.jpg\" alt=\"&ldquo;Ansible for DevOps&rdquo;, uploaded by Bramus in DevOps\" title=\"&ldquo;Ansible for DevOps&rdquo;, uploaded by Bramus in DevOps\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=5\">DevOps</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 227</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-4\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/4.png\" alt=\"&ldquo;Build APIs You Won&#039;t Hate&rdquo;, uploaded by Bramus in PHP\" title=\"&ldquo;Build APIs You Won&#039;t Hate&rdquo;, uploaded by Bramus in PHP\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=1\">PHP</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 182</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-1\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/1.png\" alt=\"&ldquo;Hands-on Node.js&rdquo;, uploaded by Bramus in Node\" title=\"&ldquo;Hands-on Node.js&rdquo;, uploaded by Bramus in Node\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=3\">Node</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 142</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-5\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/5.jpg\" alt=\"&ldquo;Laravel Testing Decoded&rdquo;, uploaded by Rogier in PHP\" title=\"&ldquo;Laravel Testing Decoded&rdquo;, uploaded by Rogier in PHP\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Rogier</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=1\">PHP</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 273</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-2\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/2.jpg\" alt=\"&ldquo;Laravel: From Apprentice To Artisan&rdquo;, uploaded by Bramus in PHP\" title=\"&ldquo;Laravel: From Apprentice To Artisan&rdquo;, uploaded by Bramus in PHP\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=1\">PHP</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 67</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-7\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/7.png\" alt=\"&ldquo;Modernizing Legacy Applications In PHP&rdquo;, uploaded by Rogier in PHP\" title=\"&ldquo;Modernizing Legacy Applications In PHP&rdquo;, uploaded by Rogier in PHP\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Rogier</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=1\">PHP</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 228</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-8\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/8.png\" alt=\"&ldquo;Principles of Object-Oriented Programming in JavaScript&rdquo;, uploaded by Rogier in JavaScript\" title=\"&ldquo;Principles of Object-Oriented Programming in JavaScript&rdquo;, uploaded by Rogier in JavaScript\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Rogier</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=2\">JavaScript</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 93</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-3\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/3.png\" alt=\"&ldquo;The Node Beginner Book&rdquo;, uploaded by Bramus in Node\" title=\"&ldquo;The Node Beginner Book&rdquo;, uploaded by Bramus in Node\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Bramus</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=3\">Node</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 112</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t\t<article id=\"book-9\" class=\"book col-xxs-12 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"well book-wrapper\">
    \t\t\t\t<p><img src=\"files/covers/9.png\" alt=\"&ldquo;The Node Craftsman Book&rdquo;, uploaded by Rogier in Node\" title=\"&ldquo;The Node Craftsman Book&rdquo;, uploaded by Rogier in Node\" class=\"book-cover img-responsive\" /></p>
                    <ul class=\"text-center list-unstyled list-inline book-meta\">
                        <li class=\"book-meta-uploader\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Rogier</li>
                        <li class=\"book-meta-topic\"><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <a href=\"index.php?topic=3\">Node</a></li>
                        <li class=\"book-meta-numpages\"><span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\"></span> 107</li>
                    </ul>
                </div>
\t\t\t</article>
\t\t</section>

\t\t<!-- image modal ((ab)use bootstrap for lightbox) -->
\t\t<div class=\"modal modal-wide fade\" id=\"img-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
      \t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">&hellip;</h4>
\t\t\t\t\t</div>
      \t\t\t\t<div class=\"modal-body text-center\">
      \t\t\t\t\t<img src=\"\" alt=\"\" title=\"\" style=\"max-width: 100%;\" />
      \t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t</div>
      \t\t\t</div>
      \t\t</div>
      \t</div>

\t</div>
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
        return array (  62 => 11,  53 => 4,  49 => 3,  44 => 2,  42 => 1,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/templates/index.twig");
    }
}
