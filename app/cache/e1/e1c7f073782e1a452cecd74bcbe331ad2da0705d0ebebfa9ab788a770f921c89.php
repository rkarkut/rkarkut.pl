<?php

/* @BoltProfiler/db.html.twig */
class __TwigTemplate_5288b4353e58e306cee0d04408795d8db311f101f9be01fa00c8103c37792071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@BoltProfiler/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f9faa1950ba97aee50d04bcb249062f296edde09ec1a8c10ff2138f6bd7eea = $this->env->getExtension("native_profiler");
        $__internal_72f9faa1950ba97aee50d04bcb249062f296edde09ec1a8c10ff2138f6bd7eea->enter($__internal_72f9faa1950ba97aee50d04bcb249062f296edde09ec1a8c10ff2138f6bd7eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltProfiler/db.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f9faa1950ba97aee50d04bcb249062f296edde09ec1a8c10ff2138f6bd7eea->leave($__internal_72f9faa1950ba97aee50d04bcb249062f296edde09ec1a8c10ff2138f6bd7eea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52156a3f4cc2c75975b016ad6cf020ee8c86ce559574210e2ed5581beacbc61a = $this->env->getExtension("native_profiler");
        $__internal_52156a3f4cc2c75975b016ad6cf020ee8c86ce559574210e2ed5581beacbc61a->enter($__internal_52156a3f4cc2c75975b016ad6cf020ee8c86ce559574210e2ed5581beacbc61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "<style>
.sf-toolbar-block-db .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
    margin-left: 0;
}
.sf-toolbar-block-db .sf-toolbar-icon {
    padding-left: 0;
}
</style>
    ";
        // line 18
        ob_start();
        // line 19
        echo "
        <span class=\"sf-toolbar-status
            ";
        // line 21
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) < 100)) {
            // line 22
            echo "                sf-toolbar-status-green
            ";
        } elseif ((($this->getAttribute(        // line 23
(isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) >= 200) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) < 300))) {
            // line 24
            echo "                sf-toolbar-status-yellow
            ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) >= 300)) {
            // line 26
            echo "                sf-toolbar-status-yellow
            ";
        }
        // line 27
        echo "\">

            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"22\" viewBox=\"0 0 54 54\" enable-background=\"new 0 0 22 22\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg>

            ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo " Q</span>

        ";
        // line 33
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 0)) {
            // line 34
            echo "            <span class=\"sf-toolbar-label\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 36
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BoltProfiler/db.html.twig", 47)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
        
        $__internal_52156a3f4cc2c75975b016ad6cf020ee8c86ce559574210e2ed5581beacbc61a->leave($__internal_52156a3f4cc2c75975b016ad6cf020ee8c86ce559574210e2ed5581beacbc61a_prof);

    }

    // line 50
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aee3ebddc988f65ca9933d889ed86820082012d5da49da474819ea70cca46de = $this->env->getExtension("native_profiler");
        $__internal_1aee3ebddc988f65ca9933d889ed86820082012d5da49da474819ea70cca46de->enter($__internal_1aee3ebddc988f65ca9933d889ed86820082012d5da49da474819ea70cca46de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 51
        echo "<span class=\"label\">
    <span class=\"icon\">            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 50 50\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg></span>
    <strong>Database</strong>
    <span class=\"count\">
        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo " Q </span>
        <span>";
        // line 56
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_1aee3ebddc988f65ca9933d889ed86820082012d5da49da474819ea70cca46de->leave($__internal_1aee3ebddc988f65ca9933d889ed86820082012d5da49da474819ea70cca46de_prof);

    }

    // line 61
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e289beb4e24e1ab566cea32299bb26eddc60caa526ab7a924496c6ce5262557 = $this->env->getExtension("native_profiler");
        $__internal_5e289beb4e24e1ab566cea32299bb26eddc60caa526ab7a924496c6ce5262557->enter($__internal_5e289beb4e24e1ab566cea32299bb26eddc60caa526ab7a924496c6ce5262557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 62
        echo "        ";
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
        
        $__internal_5e289beb4e24e1ab566cea32299bb26eddc60caa526ab7a924496c6ce5262557->leave($__internal_5e289beb4e24e1ab566cea32299bb26eddc60caa526ab7a924496c6ce5262557_prof);

    }

    // line 65
    public function block_queries($context, array $blocks = array())
    {
        $__internal_7b91279160181c1978d0435117e048011d68481f000c5d08bd82e51213c04dc4 = $this->env->getExtension("native_profiler");
        $__internal_7b91279160181c1978d0435117e048011d68481f000c5d08bd82e51213c04dc4->enter($__internal_7b91279160181c1978d0435117e048011d68481f000c5d08bd82e51213c04dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 66
        echo "    <h2>Queries</h2>

    ";
        // line 68
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries", array()))) {
            // line 69
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 73
            echo "        <ul class=\"alt\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries", array()));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 75
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                echo "\">
                    <code >
                        ";
                // line 77
                echo $this->getAttribute($context["query"], "sql", array());
                echo "
                    </code>
                    <br /><br />
                    <small>
                        <strong>Parameters</strong>: ";
                // line 81
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "params", array())), "html", null, true);
                echo " <br />
                        <strong>Time</strong>: ";
                // line 82
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </ul>
    ";
        }
        // line 88
        echo "
";
        
        $__internal_7b91279160181c1978d0435117e048011d68481f000c5d08bd82e51213c04dc4->leave($__internal_7b91279160181c1978d0435117e048011d68481f000c5d08bd82e51213c04dc4_prof);

    }

    public function getTemplateName()
    {
        return "@BoltProfiler/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 88,  225 => 86,  215 => 82,  211 => 81,  204 => 77,  198 => 75,  194 => 74,  191 => 73,  185 => 69,  183 => 68,  179 => 66,  173 => 65,  163 => 62,  157 => 61,  146 => 56,  142 => 55,  136 => 51,  130 => 50,  122 => 47,  116 => 44,  109 => 40,  105 => 38,  102 => 37,  99 => 36,  93 => 34,  91 => 33,  86 => 31,  80 => 27,  76 => 26,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  64 => 21,  60 => 19,  58 => 18,  42 => 4,  36 => 3,  21 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* <style>*/
/* .sf-toolbar-block-db .sf-toolbar-status {*/
/*     color: #FFF;*/
/*     display: inline-block;*/
/*     font-size: 14px;*/
/*     height: 36px;*/
/*     line-height: 36px;*/
/*     padding: 0 10px;*/
/*     margin-left: 0;*/
/* }*/
/* .sf-toolbar-block-db .sf-toolbar-icon {*/
/*     padding-left: 0;*/
/* }*/
/* </style>*/
/*     {% set icon %}*/
/* */
/*         <span class="sf-toolbar-status*/
/*             {% if collector.querycount < 100 %}*/
/*                 sf-toolbar-status-green*/
/*             {% elseif collector.querycount >= 200 and collector.querycount < 300 %}*/
/*                 sf-toolbar-status-yellow*/
/*             {% elseif collector.querycount >= 300 %}*/
/*                 sf-toolbar-status-yellow*/
/*             {% endif %}">*/
/* */
/*             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" height="22" viewBox="0 0 54 54" enable-background="new 0 0 22 22" xml:space="preserve"><g><path fill="#AAAAAA" d="M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z"/><path fill="#AAAAAA" d="M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z"/><path fill="#AAAAAA" d="M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z"/><path fill="#AAAAAA" d="M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z"/></g></svg>*/
/* */
/*             {{ collector.querycount }} Q</span>*/
/* */
/*         {% if collector.querycount > 0 %}*/
/*             <span class="sf-toolbar-label">in {{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>DB Queries</b>*/
/*             <span>{{ collector.querycount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Query time</b>*/
/*             <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" height="24" viewBox="0 0 50 50" enable-background="new 0 0 24 24" xml:space="preserve"><g><path fill="#AAAAAA" d="M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z"/><path fill="#AAAAAA" d="M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z"/><path fill="#AAAAAA" d="M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z"/><path fill="#AAAAAA" d="M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z"/></g></svg></span>*/
/*     <strong>Database</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.querycount }} Q </span>*/
/*         <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*         {{ block('queries') }}*/
/* {% endblock %}*/
/* */
/* {% block queries %}*/
/*     <h2>Queries</h2>*/
/* */
/*     {% if collector.queries is empty %}*/
/*         <p>*/
/*             <em>No queries.</em>*/
/*         </p>*/
/*     {% else %}*/
/*         <ul class="alt">*/
/*             {% for i, query in collector.queries %}*/
/*                 <li class="{{ cycle(['odd', 'even'], i) }}">*/
/*                     <code >*/
/*                         {{ query.sql|raw }}*/
/*                     </code>*/
/*                     <br /><br />*/
/*                     <small>*/
/*                         <strong>Parameters</strong>: {{ query.params|json_encode }} <br />*/
/*                         <strong>Time</strong>: {{ '%0.2f'|format(query.executionMS * 1000) }} ms*/
/*                     </small>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
