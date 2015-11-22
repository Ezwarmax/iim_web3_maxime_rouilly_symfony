<?php

/* registration/register.html.twig */
class __TwigTemplate_852129f5b1a9d2f8bd0ec854fb3173dca8edad0671fb201280327479fb4d37bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        $__internal_57df987412669b616b49c530730ccfa23c14834066590845430e69cda00b2b31 = $this->env->getExtension("native_profiler");
        $__internal_57df987412669b616b49c530730ccfa23c14834066590845430e69cda00b2b31->enter($__internal_57df987412669b616b49c530730ccfa23c14834066590845430e69cda00b2b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57df987412669b616b49c530730ccfa23c14834066590845430e69cda00b2b31->leave($__internal_57df987412669b616b49c530730ccfa23c14834066590845430e69cda00b2b31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea334223f8be55b70cd0aecf88268a1eadb098cf8f99c4ea9058ceeb337edc2 = $this->env->getExtension("native_profiler");
        $__internal_2ea334223f8be55b70cd0aecf88268a1eadb098cf8f99c4ea9058ceeb337edc2->enter($__internal_2ea334223f8be55b70cd0aecf88268a1eadb098cf8f99c4ea9058ceeb337edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2ea334223f8be55b70cd0aecf88268a1eadb098cf8f99c4ea9058ceeb337edc2->leave($__internal_2ea334223f8be55b70cd0aecf88268a1eadb098cf8f99c4ea9058ceeb337edc2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.plainPassword.first) }}*/
/*         {{ form_row(form.plainPassword.second) }}*/
/* */
/*         <button type="submit">Register!</button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
