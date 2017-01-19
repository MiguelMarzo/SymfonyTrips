<?php

/* base.html.twig */
class __TwigTemplate_f5861294a911bbf698b2a43a4b2142b0e235a25c8309c32f590af3204bfcd684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5634b9ea4eae69906b8a082f8e292ccdc580ec44eb4885ee619f30ba1bcc3266 = $this->env->getExtension("native_profiler");
        $__internal_5634b9ea4eae69906b8a082f8e292ccdc580ec44eb4885ee619f30ba1bcc3266->enter($__internal_5634b9ea4eae69906b8a082f8e292ccdc580ec44eb4885ee619f30ba1bcc3266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Desarrollo web PHP</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Superheroe CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\">Viajes 4v al mejor precio</a>
                </div>
                <!-- FORMULARIO DE BÚSQUEDA -->
                <form class=\"navbar-form navbar-right\" role=\"search\" method=\"post\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("search_trip");
        echo "\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"searchTerm\" class=\"form-control\" placeholder=\"Buscar...\" value=\"\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
                </form>
                <!-- FIN FORMULARIO DE BÚSQUEDA -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-3\">
                    <p class=\"lead\">Tu agencia de viajes</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("trip_create");
        echo "\" class=\"list-group-item\">Sugiérenos un viaje</a>
                    </div>
                </div>
                <div class=\"col-md-9\">

                    <div class=\"row carousel-holder\">

                        <div class=\"col-md-12\">
                            <img class=\"slide-image img-rounded\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "

            ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
        </div>

    </div>
</body>
<div class=\"container\">
    <hr>
    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>&copy; Eugenia Pérez - 2015</p>
            </div>
        </div>
    </footer>

</div>
</html>
";
        
        $__internal_5634b9ea4eae69906b8a082f8e292ccdc580ec44eb4885ee619f30ba1bcc3266->leave($__internal_5634b9ea4eae69906b8a082f8e292ccdc580ec44eb4885ee619f30ba1bcc3266_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_21719dc29c037b893647f330cf43c93a66284d6e32e037c321f6804985911d66 = $this->env->getExtension("native_profiler");
        $__internal_21719dc29c037b893647f330cf43c93a66284d6e32e037c321f6804985911d66->enter($__internal_21719dc29c037b893647f330cf43c93a66284d6e32e037c321f6804985911d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21719dc29c037b893647f330cf43c93a66284d6e32e037c321f6804985911d66->leave($__internal_21719dc29c037b893647f330cf43c93a66284d6e32e037c321f6804985911d66_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee1b3c971fcbbbf0e5721ca2b502c2ef234a0b97c90e778be9608ea872462373 = $this->env->getExtension("native_profiler");
        $__internal_ee1b3c971fcbbbf0e5721ca2b502c2ef234a0b97c90e778be9608ea872462373->enter($__internal_ee1b3c971fcbbbf0e5721ca2b502c2ef234a0b97c90e778be9608ea872462373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "                <!-- jQuery -->
                <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_ee1b3c971fcbbbf0e5721ca2b502c2ef234a0b97c90e778be9608ea872462373->leave($__internal_ee1b3c971fcbbbf0e5721ca2b502c2ef234a0b97c90e778be9608ea872462373_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 79,  170 => 76,  167 => 75,  161 => 74,  150 => 71,  125 => 81,  123 => 74,  119 => 72,  117 => 71,  110 => 67,  99 => 59,  77 => 40,  71 => 37,  52 => 21,  46 => 18,  40 => 15,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Desarrollo web PHP</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/shop-homepage.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Superheroe CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/cerulean.min.css') }}" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('trip_index') }}">Viajes 4v al mejor precio</a>*/
/*                 </div>*/
/*                 <!-- FORMULARIO DE BÚSQUEDA -->*/
/*                 <form class="navbar-form navbar-right" role="search" method="post" action="{{ path('search_trip') }}">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="searchTerm" class="form-control" placeholder="Buscar..." value="">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>*/
/*                 </form>*/
/*                 <!-- FIN FORMULARIO DE BÚSQUEDA -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-md-3">*/
/*                     <p class="lead">Tu agencia de viajes</p>*/
/*                     <div class="list-group">*/
/*                         <a href="{{ path('trip_create') }}" class="list-group-item">Sugiérenos un viaje</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-9">*/
/* */
/*                     <div class="row carousel-holder">*/
/* */
/*                         <div class="col-md-12">*/
/*                             <img class="slide-image img-rounded" src="{{asset('bundles/framework/img/logo.png') }}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% block body %}{% endblock %}*/
/* */
/* */
/*             {% block javascripts %}*/
/*                 <!-- jQuery -->*/
/*                 <script src="{{ asset('bundles/framework/js/jquery.js') }}"></script>*/
/* */
/*                 <!-- Bootstrap Core JavaScript -->*/
/*                 <script src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </body>*/
/* <div class="container">*/
/*     <hr>*/
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <p>&copy; Eugenia Pérez - 2015</p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/* </div>*/
/* </html>*/
/* */
