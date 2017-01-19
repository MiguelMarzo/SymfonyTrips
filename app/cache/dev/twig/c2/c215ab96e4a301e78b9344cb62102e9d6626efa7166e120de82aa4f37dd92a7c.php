<?php

/* trip/show.html.twig */
class __TwigTemplate_be073d7a4adc847d77febd04df9f64bc3768f4972d01a48e90dc2fc460b68830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/show.html.twig", 1);
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
        $__internal_247ad3eac5a2b0dd38718183a004c6b8151a56564b3b18ba3e5d4bcca91eb9de = $this->env->getExtension("native_profiler");
        $__internal_247ad3eac5a2b0dd38718183a004c6b8151a56564b3b18ba3e5d4bcca91eb9de->enter($__internal_247ad3eac5a2b0dd38718183a004c6b8151a56564b3b18ba3e5d4bcca91eb9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247ad3eac5a2b0dd38718183a004c6b8151a56564b3b18ba3e5d4bcca91eb9de->leave($__internal_247ad3eac5a2b0dd38718183a004c6b8151a56564b3b18ba3e5d4bcca91eb9de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45d90f6163c697f21c601ee1bbcfb7dc470a3ea7043f640221b19a2afe7c100b = $this->env->getExtension("native_profiler");
        $__internal_45d90f6163c697f21c601ee1bbcfb7dc470a3ea7043f640221b19a2afe7c100b->enter($__internal_45d90f6163c697f21c601ee1bbcfb7dc470a3ea7043f640221b19a2afe7c100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trip</h1>
    <div class=\"container table-responsive\">
        <table class=\"table table-sm table-borderless\">
            <tbody>
                <tr>
                    <td><h3>Nombre:</h3></td>
                    <td><h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "name", array()), "html", null, true);
        echo "</h3></td>
                </tr>
                <tr>
                    <td><h3>Descripción:</h3></td>
                    <td><h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "description", array()), "html", null, true);
        echo "</h3></td>
                </tr>
                <tr>
                    <td><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "urlPicture", array()), "html", null, true);
        echo "\" class=\"img-circle\"/></td>
                    <td><h4>Precio:</h4> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "price", array()), "html", null, true);
        echo " <br/><br/><br/><br/><br/><br/>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\" class=\"btn btn-sm btn-default\">Back to the list</a>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_edit", array("id" => $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default\">Edit</a>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_delete", array("id" => $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default\">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

";
        
        $__internal_45d90f6163c697f21c601ee1bbcfb7dc470a3ea7043f640221b19a2afe7c100b->leave($__internal_45d90f6163c697f21c601ee1bbcfb7dc470a3ea7043f640221b19a2afe7c100b_prof);

    }

    public function getTemplateName()
    {
        return "trip/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  77 => 24,  71 => 21,  65 => 18,  61 => 17,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trip</h1>*/
/*     <div class="container table-responsive">*/
/*         <table class="table table-sm table-borderless">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td><h3>Nombre:</h3></td>*/
/*                     <td><h3>{{ trip.name }}</h3></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><h3>Descripción:</h3></td>*/
/*                     <td><h3>{{ trip.description }}</h3></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><img src="{{ trip.urlPicture }}" class="img-circle"/></td>*/
/*                     <td><h4>Precio:</h4> {{ trip.price }} <br/><br/><br/><br/><br/><br/>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item">*/
/*                                 <a href="{{ path('trip_index') }}" class="btn btn-sm btn-default">Back to the list</a>*/
/*                             </li>*/
/*                             <li class="list-group-item">*/
/*                                 <a href="{{ path('trip_edit', { 'id': trip.id }) }}" class="btn btn-sm btn-default">Edit</a>*/
/*                             </li>*/
/*                             <li class="list-group-item">*/
/*                                 <a href="{{ path('trip_delete', { 'id': trip.id }) }}" class="btn btn-sm btn-default">Delete</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
