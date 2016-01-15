<?php

/* uniSistemasBundle:hardware:show.html.twig */
class __TwigTemplate_4458fbe61cd3d77589ec93b817dfd08f0c15ef6c4ed8cabf2c1df1ed60a37a50 extends Twig_Template
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
    <h1>hardware</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ipreal</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ipreal"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Memoria</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "memoria"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disco</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disco"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cpu</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cpu"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            
            
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "maquinas"));
        foreach ($context['_seq'] as $context["_key"] => $context["maq"]) {
            echo "             
        <div class=\"LineaFormulario izquierda separarIzq15\">
            <h2 class=\"izquierda separarIzq15\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maqvirtual_show", array("id" => $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "nombre"), "html", null, true);
            echo "</a>
                IP: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "ipvirtual"), "html", null, true);
            echo " / Tareas: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maq"]) ? $context["maq"] : $this->getContext($context, "maq")), "tareas"), "html", null, true);
            echo " </h2>
               ";
            // line 43
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("hardware");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hardware_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:hardware:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  122 => 53,  114 => 48,  109 => 45,  102 => 43,  96 => 39,  90 => 38,  83 => 36,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  28 => 3,);
    }
}
