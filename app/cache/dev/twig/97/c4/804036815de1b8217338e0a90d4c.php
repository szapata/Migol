<?php

/* StyleBootstrapFormBundle:Default:index.html.twig */
class __TwigTemplate_97c4804036815de1b8217338e0a90d4c extends Twig_Template
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
        return "StyleBootstrapFormBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
