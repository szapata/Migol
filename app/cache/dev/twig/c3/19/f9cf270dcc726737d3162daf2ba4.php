<?php

/* StyleBootstrapBundle:Default:index.html.twig */
class __TwigTemplate_c319f9cf270dcc726737d3162daf2ba4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "StyleBootstrapBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
