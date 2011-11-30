<?php

/* MigolBackendBundle:Default:index.html.twig */
class __TwigTemplate_4a2bca83a513bc9d4acd368321357c53 extends Twig_Template
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
        return "MigolBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
