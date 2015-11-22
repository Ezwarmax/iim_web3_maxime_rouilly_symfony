<?php

/* grade/grades.html.twig */
class __TwigTemplate_8814d8d122593241afdcb37d63f7f62c7a2f9c4a100ae512c561c9a963a57ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/grades.html.twig", 1);
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
        $__internal_b294358db02b3a7fdd5ef6976271cea2b564c898c62a4ca6c0e070e6e862274f = $this->env->getExtension("native_profiler");
        $__internal_b294358db02b3a7fdd5ef6976271cea2b564c898c62a4ca6c0e070e6e862274f->enter($__internal_b294358db02b3a7fdd5ef6976271cea2b564c898c62a4ca6c0e070e6e862274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/grades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b294358db02b3a7fdd5ef6976271cea2b564c898c62a4ca6c0e070e6e862274f->leave($__internal_b294358db02b3a7fdd5ef6976271cea2b564c898c62a4ca6c0e070e6e862274f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe1fb2265f8bfd441e89e62140afc19f46d24b6e0629d631c18c64e2392d009 = $this->env->getExtension("native_profiler");
        $__internal_afe1fb2265f8bfd441e89e62140afc19f46d24b6e0629d631c18c64e2392d009->enter($__internal_afe1fb2265f8bfd441e89e62140afc19f46d24b6e0629d631c18c64e2392d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 6
            echo "            <article>
                <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "lesson", array()), "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "user", array()), "username", array()), "html", null, true);
            echo " got ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
            echo "</p>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </section>
";
        
        $__internal_afe1fb2265f8bfd441e89e62140afc19f46d24b6e0629d631c18c64e2392d009->leave($__internal_afe1fb2265f8bfd441e89e62140afc19f46d24b6e0629d631c18c64e2392d009_prof);

    }

    public function getTemplateName()
    {
        return "grade/grades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section>*/
/*         {% for grade in grades %}*/
/*             <article>*/
/*                 <h1>{{ grade.lesson.title }}</h1>*/
/*                 <p>{{ grade.user.username }} got {{ grade.grade }}</p>*/
/*             </article>*/
/*         {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
/* */
