<?php

/* MigolCommonPagesBundle:Private:followedCompetitionsWidget.html.twig */
class __TwigTemplate_00b696e080ab3af50340e2138c0515ee extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
<div class=\"row margin-top-standard\">
    <div class=\"span4\">
        <h6>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("my.competitions"), "html");
        echo "</h6>
        <ul class=\"left-entities\">
            <li><span class=\"icon-left-competitions\"></span><a href=\"#\"><strong>Liga Regional de Río Cuarto B</strong></a></li>
            <li><span class=\"icon-left-competitions\"></span><a href=\"#\"><strong>Liga de Profesionales A</strong></a></li>

        </ul>
        <a href=\"#\" class=\"seemore\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html");
        echo " &raquo;</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:followedCompetitionsWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
