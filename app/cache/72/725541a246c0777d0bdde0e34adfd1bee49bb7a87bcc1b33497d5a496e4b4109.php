<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d02f18677223d2d6a809f677d8c1157919f33d91b1d5db6294e72518b37f1168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74ede0fb1d8610091dcb4e49093617e4db0fba28e434ecf91c91c0a964dd3c15 = $this->env->getExtension("native_profiler");
        $__internal_74ede0fb1d8610091dcb4e49093617e4db0fba28e434ecf91c91c0a964dd3c15->enter($__internal_74ede0fb1d8610091dcb4e49093617e4db0fba28e434ecf91c91c0a964dd3c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ede0fb1d8610091dcb4e49093617e4db0fba28e434ecf91c91c0a964dd3c15->leave($__internal_74ede0fb1d8610091dcb4e49093617e4db0fba28e434ecf91c91c0a964dd3c15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_805a2bb25b799e927c8609efc047927e90e71120f7ef20a55f05f1107338809e = $this->env->getExtension("native_profiler");
        $__internal_805a2bb25b799e927c8609efc047927e90e71120f7ef20a55f05f1107338809e->enter($__internal_805a2bb25b799e927c8609efc047927e90e71120f7ef20a55f05f1107338809e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_805a2bb25b799e927c8609efc047927e90e71120f7ef20a55f05f1107338809e->leave($__internal_805a2bb25b799e927c8609efc047927e90e71120f7ef20a55f05f1107338809e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d943826891cf244bceb38ae79c27bc8891752f2d8806b1cc0cd8efead46a907 = $this->env->getExtension("native_profiler");
        $__internal_2d943826891cf244bceb38ae79c27bc8891752f2d8806b1cc0cd8efead46a907->enter($__internal_2d943826891cf244bceb38ae79c27bc8891752f2d8806b1cc0cd8efead46a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d943826891cf244bceb38ae79c27bc8891752f2d8806b1cc0cd8efead46a907->leave($__internal_2d943826891cf244bceb38ae79c27bc8891752f2d8806b1cc0cd8efead46a907_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9992863e6d8fb1aa3e88655854e3f5e4e2c65186b400f9b9279c468d565ef325 = $this->env->getExtension("native_profiler");
        $__internal_9992863e6d8fb1aa3e88655854e3f5e4e2c65186b400f9b9279c468d565ef325->enter($__internal_9992863e6d8fb1aa3e88655854e3f5e4e2c65186b400f9b9279c468d565ef325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_9992863e6d8fb1aa3e88655854e3f5e4e2c65186b400f9b9279c468d565ef325->leave($__internal_9992863e6d8fb1aa3e88655854e3f5e4e2c65186b400f9b9279c468d565ef325_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
