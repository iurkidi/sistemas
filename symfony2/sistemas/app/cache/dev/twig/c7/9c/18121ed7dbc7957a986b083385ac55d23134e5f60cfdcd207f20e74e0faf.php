<?php

/* uniSistemasBundle:hardware:buscarhw.html.twig */
class __TwigTemplate_c79c18121ed7dbc7957a986b083385ac55d23134e5f60cfdcd207f20e74e0faf extends Twig_Template
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
    <h1>Hardware</h1>
    
    <form id=\"selectCats\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("respBuscarHW");
        echo "\" method=\"POST\">
            
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\"> 
                <p class=\"izquierda separarIzq15\">Seleccione un Hardware de la lista y a continuación se mostrarán las maquinas virtuales correspondientes.</p>
            </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario izquierda separarIzq15\">      
                <label for=\"nombre\" class=\"letraverde\">Hardware: </label>                                    
                     <select name=\"nombre\" onblur=\"submitform(this)\" class=\"izquierda\">                         
                     ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eHW"]) ? $context["eHW"] : $this->getContext($context, "eHW")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</option>                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                     </select>                                          
             </div>
             <input type=\"hidden\" id=\"nomOculto\" name=\"nomOculto\" value=\"\"/>
    </form>
";
        // line 39
        echo "         
        
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:hardware:buscarhw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 39,  64 => 20,  53 => 18,  49 => 17,  35 => 6,  28 => 3,);
    }
}
