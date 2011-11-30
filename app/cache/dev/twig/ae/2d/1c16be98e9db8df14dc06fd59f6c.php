<?php

/* SlooContactsBundle:Lists:show3.html.twig */
class __TwigTemplate_ae2d1c16be98e9db8df14dc06fd59f6c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h6>Listas</h6>
<ul class=\"left-entities\">
    ";
        // line 3
        if ((twig_length_filter($this->env, $this->getContext($context, 'contactlists')) > 0)) {
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'contactlists'));
            foreach ($context['_seq'] as $context['_key'] => $context['list']) {
                // line 5
                echo "            <li><span class=\"icon-left-favorites\"></span><a href=\"#\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "name", array(), "any", false), "html");
                echo "</strong></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "    ";
        }
        // line 8
        echo "</ul>
<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SlooContactsBundle_lists"), "html");
        echo "\" class=\"seemore\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html");
        echo " &raquo;</a>";
    }

    public function getTemplateName()
    {
        return "SlooContactsBundle:Lists:show3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
