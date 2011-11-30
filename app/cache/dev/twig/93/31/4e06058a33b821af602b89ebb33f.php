<?php

/* SlooBackendBundle:Default:index.html.twig */
class __TwigTemplate_93314e06058a33b821af602b89ebb33f extends Twig_Template
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
        return "SlooBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
