<?php

/* RIABackboneBundle:Default:index.html.twig */
class __TwigTemplate_3dd35685ff5f5d98bf1e07067e1c48a2 extends Twig_Template
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
        return "RIABackboneBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
