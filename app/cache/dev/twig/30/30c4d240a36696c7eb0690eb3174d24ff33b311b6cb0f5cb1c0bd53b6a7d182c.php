<?php

/* trip/new.html.twig */
class __TwigTemplate_9f7743bed64a15a800abda37155f05fc86356cc0b85f2b44f58e9dcde784a3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/new.html.twig", 1);
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
        $__internal_7f988c216310d088dcd1411c4d3e117ebff0c37e027a62e12408bec75b364805 = $this->env->getExtension("native_profiler");
        $__internal_7f988c216310d088dcd1411c4d3e117ebff0c37e027a62e12408bec75b364805->enter($__internal_7f988c216310d088dcd1411c4d3e117ebff0c37e027a62e12408bec75b364805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f988c216310d088dcd1411c4d3e117ebff0c37e027a62e12408bec75b364805->leave($__internal_7f988c216310d088dcd1411c4d3e117ebff0c37e027a62e12408bec75b364805_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_915b04a19962b668b27c4f07ab1fc966122f3b24df2a32cd47d9e16389623855 = $this->env->getExtension("native_profiler");
        $__internal_915b04a19962b668b27c4f07ab1fc966122f3b24df2a32cd47d9e16389623855->enter($__internal_915b04a19962b668b27c4f07ab1fc966122f3b24df2a32cd47d9e16389623855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trip creation</h1>

    <form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("trip_new");
        echo "\">
        <input type=\"hidden\" name=\"id\"/>
        <div class=\"form-group\">
            <label for=\"title\" class=\"col-sm-2 control-label\">Nombre:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"author\" class=\"col-sm-2 control-label\">Descripción:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Descripción\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"cover\" class=\"col-sm-2 control-label\">Url imagen:</label>
            <div class=\"col-sm-10\">
                <input type=\"url\" class=\"form-control\" id=\"url\" name=\"url\" placeholder=\"URL de la imagen\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"author\" class=\"col-sm-2 control-label\">Precio:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" placeholder=\"Precio\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-success pull-right\">Añadir</button>
            </div>
        </div>
    </form>

<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\" class=\"btn btn-sm btn-default\">Back to the list</a>
";
        
        $__internal_915b04a19962b668b27c4f07ab1fc966122f3b24df2a32cd47d9e16389623855->leave($__internal_915b04a19962b668b27c4f07ab1fc966122f3b24df2a32cd47d9e16389623855_prof);

    }

    public function getTemplateName()
    {
        return "trip/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trip creation</h1>*/
/* */
/*     <form class="form-horizontal" method="post" action="{{ path('trip_new') }}">*/
/*         <input type="hidden" name="id"/>*/
/*         <div class="form-group">*/
/*             <label for="title" class="col-sm-2 control-label">Nombre:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" name="name" id="name" placeholder="Name">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="author" class="col-sm-2 control-label">Descripción:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="description" name="description" placeholder="Descripción">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="cover" class="col-sm-2 control-label">Url imagen:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="url" class="form-control" id="url" name="url" placeholder="URL de la imagen">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="author" class="col-sm-2 control-label">Precio:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="price" name="price" placeholder="Precio">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-success pull-right">Añadir</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/* <a href="{{ path('trip_index') }}" class="btn btn-sm btn-default">Back to the list</a>*/
/* {% endblock %}*/
/* */
