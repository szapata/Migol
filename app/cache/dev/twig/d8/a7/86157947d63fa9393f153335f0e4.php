<?php

/* MigolUserBundle:Default:index.html.twig */
class __TwigTemplate_d8a786157947d63fa9393f153335f0e4 extends Twig_Template
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
        return "MigolUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
