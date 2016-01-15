<?php

/* uniSistemasBundle::layout.html.twig */
class __TwigTemplate_d9a6e684ff094783c81095a6a4507c69dc0d447e24664d5be765111e1b4b18fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSup' => array($this, 'block_menuSup'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo " 
        <div id=\"menuSup\">
            ";
        // line 7
        $this->displayBlock('menuSup', $context, $blocks);
        // line 28
        echo "        </div>
 
        
        <div id=\"central\">
            
            ";
        // line 33
        $this->displayBlock('central', $context, $blocks);
        // line 36
        echo "            
        </div>
 
 
 ";
    }

    // line 7
    public function block_menuSup($context, array $blocks = array())
    {
        // line 8
        echo "                
             <ul id=\"menu-horizontal\">
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uni_sistemas_homepage");
        echo "\" title=\"Texto\">INICIO</a>                               
                 <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("linkCrear");
        echo "\" title=\"Texto\">Crear</a></li>
                <li><a href=\"#\" title=\"Texto\">Hardware</a>
                     <ul>
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("linkHardware");
        echo "\" title=\"Texto\">Buscar</a></li>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("hardware");
        echo "\" title=\"Texto\">Listado</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("maqvirtual");
        echo "\" title=\"Texto\">Maquinas virtuales</a></li>
                <li><a href=\"#\" title=\"Texto\">Software</a>
                    <ul>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("buscSW");
        echo "\" title=\"Texto\">Buscar</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("software");
        echo "\" title=\"Texto\">Listado</a></li>
                    </ul>
                </li>                                              
             </ul>
              <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/img/ordenador.jpeg"), "html", null, true);
        echo "\" width=\"2%\" heigth=\"2%\" class=\"izquierda claseclearright\"/>
            ";
    }

    // line 33
    public function block_central($context, array $blocks = array())
    {
        // line 34
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  106 => 33,  100 => 26,  93 => 22,  89 => 21,  83 => 18,  77 => 15,  73 => 14,  67 => 11,  63 => 10,  59 => 8,  56 => 7,  48 => 36,  46 => 33,  39 => 28,  33 => 5,  30 => 4,  45 => 10,  41 => 9,  37 => 7,  28 => 3,);
    }
}
