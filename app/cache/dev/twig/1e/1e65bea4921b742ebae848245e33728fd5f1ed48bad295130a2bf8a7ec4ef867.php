<?php

/* EcommerceBundle:Default:ajoute.html.twig */
class __TwigTemplate_1a70a0239aa93d7586dbec4a019771453a3f768d3fd1feebfbc7a46ae24805d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "EcommerceBundle:Default:ajoute.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b479b769d4265edccd2f4470eb5e23796eb51ae4c4c1e688f1ea3652c5b5c0a = $this->env->getExtension("native_profiler");
        $__internal_8b479b769d4265edccd2f4470eb5e23796eb51ae4c4c1e688f1ea3652c5b5c0a->enter($__internal_8b479b769d4265edccd2f4470eb5e23796eb51ae4c4c1e688f1ea3652c5b5c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:ajoute.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b479b769d4265edccd2f4470eb5e23796eb51ae4c4c1e688f1ea3652c5b5c0a->leave($__internal_8b479b769d4265edccd2f4470eb5e23796eb51ae4c4c1e688f1ea3652c5b5c0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_139ec3f1fe5dcf26ab56d1d98e82164af83ea18b545bee7ceb4fbabc2dbe80fd = $this->env->getExtension("native_profiler");
        $__internal_139ec3f1fe5dcf26ab56d1d98e82164af83ea18b545bee7ceb4fbabc2dbe80fd->enter($__internal_139ec3f1fe5dcf26ab56d1d98e82164af83ea18b545bee7ceb4fbabc2dbe80fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"bg-faded p-4 my-4\">
    <hr class=\"divider\">
    <h2 class=\"text-center text-lg text-uppercase my-0\">
      <strong>Hello bilel!Page Ajout</strong>
    </h2>
    <hr class=\"divider\">

        <div class=\"form-group col-lg-4\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ecommerce_ajoutepage");
        echo "\" method=\"post\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\">
        </div>
  </div>
";
        
        $__internal_139ec3f1fe5dcf26ab56d1d98e82164af83ea18b545bee7ceb4fbabc2dbe80fd->leave($__internal_139ec3f1fe5dcf26ab56d1d98e82164af83ea18b545bee7ceb4fbabc2dbe80fd_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:ajoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig"%}*/
/* {% block body %}*/
/*   <div class="bg-faded p-4 my-4">*/
/*     <hr class="divider">*/
/*     <h2 class="text-center text-lg text-uppercase my-0">*/
/*       <strong>Hello bilel!Page Ajout</strong>*/
/*     </h2>*/
/*     <hr class="divider">*/
/* */
/*         <div class="form-group col-lg-4">*/
/*         <form action="{{path ("ecommerce_ajoutepage")}}" method="post">*/
/*         {{form_widget(form)}}*/
/*         <input type="submit">*/
/*         </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
