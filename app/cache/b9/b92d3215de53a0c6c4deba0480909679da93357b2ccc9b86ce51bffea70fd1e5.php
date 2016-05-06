<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5458ac24a3e4bfdfdce7235c6df1a6b6e32cf39c709761fb7c88054e01ff162e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_935ec12e29b74cff66194a2fd1bc59a8f326643ce787930f626269e93c0ec7d5 = $this->env->getExtension("native_profiler");
        $__internal_935ec12e29b74cff66194a2fd1bc59a8f326643ce787930f626269e93c0ec7d5->enter($__internal_935ec12e29b74cff66194a2fd1bc59a8f326643ce787930f626269e93c0ec7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935ec12e29b74cff66194a2fd1bc59a8f326643ce787930f626269e93c0ec7d5->leave($__internal_935ec12e29b74cff66194a2fd1bc59a8f326643ce787930f626269e93c0ec7d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98acd7f557906f65d2bb79e512fd11177f527f45c975bbf70379a175d779e155 = $this->env->getExtension("native_profiler");
        $__internal_98acd7f557906f65d2bb79e512fd11177f527f45c975bbf70379a175d779e155->enter($__internal_98acd7f557906f65d2bb79e512fd11177f527f45c975bbf70379a175d779e155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98acd7f557906f65d2bb79e512fd11177f527f45c975bbf70379a175d779e155->leave($__internal_98acd7f557906f65d2bb79e512fd11177f527f45c975bbf70379a175d779e155_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d41da8d9748e7c54efbbea2fd926c391bef9760749955b26dfde66fef058f382 = $this->env->getExtension("native_profiler");
        $__internal_d41da8d9748e7c54efbbea2fd926c391bef9760749955b26dfde66fef058f382->enter($__internal_d41da8d9748e7c54efbbea2fd926c391bef9760749955b26dfde66fef058f382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d41da8d9748e7c54efbbea2fd926c391bef9760749955b26dfde66fef058f382->leave($__internal_d41da8d9748e7c54efbbea2fd926c391bef9760749955b26dfde66fef058f382_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a22298bb2d9cda694df2bb8f2544f4a9f00ea11d0af1113c29c00e3ca20c1ab = $this->env->getExtension("native_profiler");
        $__internal_8a22298bb2d9cda694df2bb8f2544f4a9f00ea11d0af1113c29c00e3ca20c1ab->enter($__internal_8a22298bb2d9cda694df2bb8f2544f4a9f00ea11d0af1113c29c00e3ca20c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a22298bb2d9cda694df2bb8f2544f4a9f00ea11d0af1113c29c00e3ca20c1ab->leave($__internal_8a22298bb2d9cda694df2bb8f2544f4a9f00ea11d0af1113c29c00e3ca20c1ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
