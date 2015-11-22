<?php

/* base.html.twig */
class __TwigTemplate_a867e2f14c46ef425c358487b9d4e1a2419e2babfbce6fe273c26f36f89969c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc08eae6fd0a5c9ee5498612b5b806e99594d50302070135126ce61c37e040df = $this->env->getExtension("native_profiler");
        $__internal_cc08eae6fd0a5c9ee5498612b5b806e99594d50302070135126ce61c37e040df->enter($__internal_cc08eae6fd0a5c9ee5498612b5b806e99594d50302070135126ce61c37e040df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_cc08eae6fd0a5c9ee5498612b5b806e99594d50302070135126ce61c37e040df->leave($__internal_cc08eae6fd0a5c9ee5498612b5b806e99594d50302070135126ce61c37e040df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_266ee38e7f60270d9019fc1d9d865c9e7681e1cd4f6b6be60e8da3917eca7be5 = $this->env->getExtension("native_profiler");
        $__internal_266ee38e7f60270d9019fc1d9d865c9e7681e1cd4f6b6be60e8da3917eca7be5->enter($__internal_266ee38e7f60270d9019fc1d9d865c9e7681e1cd4f6b6be60e8da3917eca7be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_266ee38e7f60270d9019fc1d9d865c9e7681e1cd4f6b6be60e8da3917eca7be5->leave($__internal_266ee38e7f60270d9019fc1d9d865c9e7681e1cd4f6b6be60e8da3917eca7be5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0bad058c102584991c047315d1e7d3e9154190e6fc03dd24d093b5fed630dd9a = $this->env->getExtension("native_profiler");
        $__internal_0bad058c102584991c047315d1e7d3e9154190e6fc03dd24d093b5fed630dd9a->enter($__internal_0bad058c102584991c047315d1e7d3e9154190e6fc03dd24d093b5fed630dd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_0bad058c102584991c047315d1e7d3e9154190e6fc03dd24d093b5fed630dd9a->leave($__internal_0bad058c102584991c047315d1e7d3e9154190e6fc03dd24d093b5fed630dd9a_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4f58f5a48da7f9a17ba72698029e346e279169d1e4e2a6153f9ff8cad9fa4d = $this->env->getExtension("native_profiler");
        $__internal_0a4f58f5a48da7f9a17ba72698029e346e279169d1e4e2a6153f9ff8cad9fa4d->enter($__internal_0a4f58f5a48da7f9a17ba72698029e346e279169d1e4e2a6153f9ff8cad9fa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a4f58f5a48da7f9a17ba72698029e346e279169d1e4e2a6153f9ff8cad9fa4d->leave($__internal_0a4f58f5a48da7f9a17ba72698029e346e279169d1e4e2a6153f9ff8cad9fa4d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ce663d85d22186a7639563a4b864260f506a0feb8c861af7a106aff99edfbe5 = $this->env->getExtension("native_profiler");
        $__internal_3ce663d85d22186a7639563a4b864260f506a0feb8c861af7a106aff99edfbe5->enter($__internal_3ce663d85d22186a7639563a4b864260f506a0feb8c861af7a106aff99edfbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_3ce663d85d22186a7639563a4b864260f506a0feb8c861af7a106aff99edfbe5->leave($__internal_3ce663d85d22186a7639563a4b864260f506a0feb8c861af7a106aff99edfbe5_prof);

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
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}">*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
