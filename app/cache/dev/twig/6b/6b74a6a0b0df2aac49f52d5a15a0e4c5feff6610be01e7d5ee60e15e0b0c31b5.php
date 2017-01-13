<?php

/* trip/index.html.twig */
class __TwigTemplate_826ec9b0bc23e90f6bf3243e1525cc107056ece17f67879207abeb35156895d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b686e735dcea8a0f697c59dbbfc12df0446a50f41b71c304a46712b78297fa8 = $this->env->getExtension("native_profiler");
        $__internal_9b686e735dcea8a0f697c59dbbfc12df0446a50f41b71c304a46712b78297fa8->enter($__internal_9b686e735dcea8a0f697c59dbbfc12df0446a50f41b71c304a46712b78297fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b686e735dcea8a0f697c59dbbfc12df0446a50f41b71c304a46712b78297fa8->leave($__internal_9b686e735dcea8a0f697c59dbbfc12df0446a50f41b71c304a46712b78297fa8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d02fbb195d58e499c9308c6f5197058b4a5bd7daf175fb6d1c62c77df3b651 = $this->env->getExtension("native_profiler");
        $__internal_e6d02fbb195d58e499c9308c6f5197058b4a5bd7daf175fb6d1c62c77df3b651->enter($__internal_e6d02fbb195d58e499c9308c6f5197058b4a5bd7daf175fb6d1c62c77df3b651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- Page Content -->


    <!-- ESTE DIV ES LO QUE VOY A REPETIR MIENTRAS HAYA RESULTADOS -->
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) ? $context["trips"] : $this->getContext($context, "trips")));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 11
            echo "        <div class=\"col-sm-4 col-lg-4 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["trip"], "urlPicture", array()), "html", null, true);
            echo "\">
                <div class=\"caption\">
                    <h4 class=\"pull-right\">Price ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["trip"], "price", array()), "html", null, true);
            echo " €</h4>
                    <h4><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_show", array("id" => $this->getAttribute($context["trip"], "id", array()))), "html", null, true);
            echo "\">Nombre del viaje: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trip"], "name", array()), "html", null, true);
            echo "</a>
                        
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_delete", array("id" => $this->getAttribute($context["trip"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                       
                        

                    </h4>
                    <p class=\"description\">Descripción</p>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_show", array("id" => $this->getAttribute($context["trip"], "id", array()))), "html", null, true);
            echo "\">Ver más...</a>
                </div>                              
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <!-- FIN DEL DIV QUE REPITO -->






";
        
        $__internal_e6d02fbb195d58e499c9308c6f5197058b4a5bd7daf175fb6d1c62c77df3b651->leave($__internal_e6d02fbb195d58e499c9308c6f5197058b4a5bd7daf175fb6d1c62c77df3b651_prof);

    }

    public function getTemplateName()
    {
        return "trip/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  81 => 24,  72 => 18,  65 => 16,  61 => 15,  56 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <!-- Page Content -->*/
/* */
/* */
/*     <!-- ESTE DIV ES LO QUE VOY A REPETIR MIENTRAS HAYA RESULTADOS -->*/
/*     {% for trip in trips %}*/
/*         <div class="col-sm-4 col-lg-4 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <img src="{{ trip.urlPicture }}">*/
/*                 <div class="caption">*/
/*                     <h4 class="pull-right">Price {{ trip.price }} €</h4>*/
/*                     <h4><a href="{{ path('trip_show', { 'id': trip.id }) }}">Nombre del viaje: {{ trip.name }}</a>*/
/*                         */
/*                         <a href="{{ path('trip_delete', { 'id': trip.id }) }}"><span class="glyphicon glyphicon-trash"></span></a>*/
/*                        */
/*                         */
/* */
/*                     </h4>*/
/*                     <p class="description">Descripción</p>*/
/*                     <a href="{{ path('trip_show', { 'id': trip.id }) }}">Ver más...</a>*/
/*                 </div>                              */
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     <!-- FIN DEL DIV QUE REPITO -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
