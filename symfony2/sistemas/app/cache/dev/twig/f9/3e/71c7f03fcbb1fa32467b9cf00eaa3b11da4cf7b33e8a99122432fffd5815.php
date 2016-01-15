<?php

/* uniSistemasBundle:software:buscarsw.html.twig */
class __TwigTemplate_f93e71c7f03fcbb1fa32467b9cf00eaa3b11da4cf7b33e8a99122432fffd5815 extends Twig_Template
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
        // line 4
        echo "                
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("respBuscSW");
        echo "\" method=\"POST\">
             <div class=\"LineaFormulario\">      
                    Buscar Software:
                    <input type=\"text\" name=\"nomsoft\" value=\"\">
                    <input type=\"submit\" value=\"Buscar\">
             </div>
        </form>
        
       ";
        // line 13
        if ((!(null === (isset($context["nomSW"]) ? $context["nomSW"] : $this->getContext($context, "nomSW"))))) {
            // line 14
            echo "       <div class=\"LineaFormulario\">  
        <h1 class=\"izquierda separarIzq15\">
            Maquinas con software ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre"), "html", null, true);
            echo " 
        </h1>
       </div>
       <div class=\"LineaFormulario\">  </div>
                
            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "maquinas"));
            foreach ($context['_seq'] as $context["_key"] => $context["maq"]) {
                // line 22
                echo "                <div class=\"LineaFormulario\">
                    <h2 class=\"izquierda separarIzq15\"><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maqvirtual_show", array("id" => $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "nombre"), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "ipvirtual"), "html", null, true);
                echo " ) - Maquina: <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hardware_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "hardware"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "hardware"), "nombre"), "html", null, true);
                echo "</a></h2>
            
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                                
                                  
     ";
        }
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:software:buscarsw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  66 => 23,  63 => 22,  59 => 21,  51 => 16,  47 => 14,  45 => 13,  34 => 5,  31 => 4,  28 => 3,);
    }
}
