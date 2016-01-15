<?php

/* ::base.html.twig */
class __TwigTemplate_6c8d38803e969422c85beaf9451ce7c1002d95e25d82d4bfba72282e20c708d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/js/jssist.js"), "html", null, true);
        echo "\"></script>       
      
    </head>
    <body>
        
        
        <div id=\"cabecera\" class=\"imagencab\">
            ";
        // line 18
        $this->displayBlock('cabecera', $context, $blocks);
        // line 22
        echo "        </div>
        
        <div id=\"contenFormularios\">
            ";
        // line 25
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo " 
        </div>
                     
        <div id=\"pie\">
            ";
        // line 31
        $this->displayBlock('pie', $context, $blocks);
        // line 35
        echo "        </div>
       
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sistemas Itziar";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/css/websist.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 18
    public function block_cabecera($context, array $blocks = array())
    {
        // line 19
        echo "                <h1 class=\"letralogo textocentrado izquierda\"> SISTEMAS Itziar </h1> 
                
            ";
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 26
        echo "                Cuerpo
            ";
    }

    // line 31
    public function block_pie($context, array $blocks = array())
    {
        // line 32
        echo "                <p class=\"izquierda separarIzq15 negrita\">2015/2016</p>
                <p class=\"derecha separarDcha20 negrita\">Itziar Urkidi</p>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  107 => 31,  102 => 26,  99 => 25,  90 => 18,  80 => 7,  74 => 5,  65 => 31,  57 => 25,  52 => 22,  50 => 18,  40 => 11,  35 => 7,  24 => 1,  109 => 34,  106 => 33,  100 => 26,  93 => 19,  89 => 21,  83 => 8,  77 => 15,  73 => 14,  67 => 35,  63 => 10,  59 => 27,  56 => 7,  48 => 36,  46 => 33,  39 => 28,  33 => 5,  30 => 5,  45 => 10,  41 => 9,  37 => 10,  28 => 3,);
    }
}
