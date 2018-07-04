<?php

/* index.html */
class __TwigTemplate_9bf92082fe3f6aa550efc276a1d1161767b10f733ed83191d1112b00505830c7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<h3>";
        // line 8
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h3>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<h3>{{ data }}</h3>
</body>
</html>", "index.html", "D:\\phpStudy\\WWW\\IhadPHP\\app\\view\\index.html");
    }
}
