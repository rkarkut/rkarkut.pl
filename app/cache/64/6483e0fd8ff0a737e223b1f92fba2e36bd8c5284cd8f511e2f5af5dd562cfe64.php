<?php

/* _footer.twig */
class __TwigTemplate_5e1b0002d97a19a92b06f8f59a8e8cd6b720461f8357cea02ab048e622850570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f31c2a46d85e26b1b0d1097d78689e63fb0d2f73d88eb6533455c6c623c2c92 = $this->env->getExtension("native_profiler");
        $__internal_0f31c2a46d85e26b1b0d1097d78689e63fb0d2f73d88eb6533455c6c623c2c92->enter($__internal_0f31c2a46d85e26b1b0d1097d78689e63fb0d2f73d88eb6533455c6c623c2c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_footer.twig"));

        // line 1
        echo "    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "twitter", array()), "html", null, true);
        echo "\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "facebook", array()), "html", null, true);
        echo "\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "github", array()), "html", null, true);
        echo "\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">Copyright &copy; ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo " 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"http://code.jquery.com/jquery-1.10.1.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/bootstrap.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/clean-blog.min.js\"></script>

</body>

</html>
";
        
        $__internal_0f31c2a46d85e26b1b0d1097d78689e63fb0d2f73d88eb6533455c6c623c2c92->leave($__internal_0f31c2a46d85e26b1b0d1097d78689e63fb0d2f73d88eb6533455c6c623c2c92_prof);

    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  77 => 42,  64 => 32,  53 => 24,  42 => 16,  31 => 8,  22 => 1,);
    }
}
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="{{ theme.twitter }}">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ theme.facebook }}">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ theme.github }}">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <p class="copyright text-muted">Copyright &copy; {{ app.config.get('general/sitename') }} 2016</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ paths.theme }}js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Custom Theme JavaScript -->*/
/*     <script src="{{ paths.theme }}js/clean-blog.min.js"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
