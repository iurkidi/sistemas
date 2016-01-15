<?php

/* uniSistemasBundle:Default:indexCrear.html.twig */
class __TwigTemplate_e1d56e8b08c14c80b6f3f4ea8cf9cc86820c6f70fc0a79b9a90d501bc8b4f14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniSistemasBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        echo " 
    
    <h1>Menu Crear</h1>

     <ul>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("maqvirtual_new");
        echo "\" title=\"Texto\">Nueva Maquina virtual</a>                               
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("hardware_new");
        echo "\" title=\"Texto\">Nuevo Hardware</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("software_new");
        echo "\" title=\"Texto\">Nuevo software</a></li>       
     </ul>
    
";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:Default:indexCrear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 9,  37 => 8,  28 => 3,);
    }
}
