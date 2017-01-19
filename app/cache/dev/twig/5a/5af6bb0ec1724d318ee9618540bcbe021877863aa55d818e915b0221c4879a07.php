<?php

/* trip/edit.html.twig */
class __TwigTemplate_0594cec72bede3706888f327bc8941b613e41a2a9ae74389062e630f36130365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/edit.html.twig", 1);
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
        $__internal_250be13d367f09c61e1650e53f0ab0b48eb7d58d227beb67147fd1a574fdf793 = $this->env->getExtension("native_profiler");
        $__internal_250be13d367f09c61e1650e53f0ab0b48eb7d58d227beb67147fd1a574fdf793->enter($__internal_250be13d367f09c61e1650e53f0ab0b48eb7d58d227beb67147fd1a574fdf793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250be13d367f09c61e1650e53f0ab0b48eb7d58d227beb67147fd1a574fdf793->leave($__internal_250be13d367f09c61e1650e53f0ab0b48eb7d58d227beb67147fd1a574fdf793_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d811e6e703e76ed62b8ba67f19dd51f2fcdd554a2e608172fc7a10e02b4fcb2a = $this->env->getExtension("native_profiler");
        $__internal_d811e6e703e76ed62b8ba67f19dd51f2fcdd554a2e608172fc7a10e02b4fcb2a->enter($__internal_d811e6e703e76ed62b8ba67f19dd51f2fcdd554a2e608172fc7a10e02b4fcb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trip edit</h1>

    <form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("update_trip");
        echo "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "id", array()), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <label for=\"title\" class=\"col-sm-2 control-label\">Nombre:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "name", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"author\" class=\"col-sm-2 control-label\">Descripción:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Descripción\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "description", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"cover\" class=\"col-sm-2 control-label\">Url imagen:</label>
            <div class=\"col-sm-10\">
                <input type=\"url\" class=\"form-control\" id=\"url\" name=\"url\" placeholder=\"URL de la imagen\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "urlPicture", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"author\" class=\"col-sm-2 control-label\">Precio:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" placeholder=\"Precio\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "price", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-success pull-right\">Modificar</button>
            </div>
        </div>
    </form>

<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\" class=\"btn btn-sm btn-default\">Back to the list</a>
";
        
        $__internal_d811e6e703e76ed62b8ba67f19dd51f2fcdd554a2e608172fc7a10e02b4fcb2a->leave($__internal_d811e6e703e76ed62b8ba67f19dd51f2fcdd554a2e608172fc7a10e02b4fcb2a_prof);

    }

    public function getTemplateName()
    {
        return "trip/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  82 => 29,  73 => 23,  64 => 17,  55 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trip edit</h1>*/
/* */
/*     <form class="form-horizontal" method="post" action="{{ path('update_trip') }}">*/
/*         <input type="hidden" name="id" value="{{ trip.id }}" />*/
/*         <div class="form-group">*/
/*             <label for="title" class="col-sm-2 control-label">Nombre:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ trip.name }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="author" class="col-sm-2 control-label">Descripción:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="description" name="description" placeholder="Descripción" value="{{ trip.description }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="cover" class="col-sm-2 control-label">Url imagen:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="url" class="form-control" id="url" name="url" placeholder="URL de la imagen" value="{{ trip.urlPicture }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="author" class="col-sm-2 control-label">Precio:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="price" name="price" placeholder="Precio" value="{{ trip.price }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-success pull-right">Modificar</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/* <a href="{{ path('trip_index') }}" class="btn btn-sm btn-default">Back to the list</a>*/
/* {% endblock %}*/
/* */
