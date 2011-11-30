<?php

/* MigolCommonPagesBundle:Private:followedTeamsWidget.html.twig */
class __TwigTemplate_082453ba75cff55150df3f2230ff2bcb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
<div class=\"row margin-top-standard\">
    <div class=\"span4\">
        ";
        // line 4
        if (($this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_dashboard") == $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "uri", array(), "any", false))) {
            echo " 
            <h6>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("my.teams"), "html");
            echo "</h6>
        ";
        } else {
            // line 7
            echo "        <p>
           <strong>";
            // line 8
            if (($this->getContext($context, 'user') != $this->getContext($context, 'user2'))) {
                // line 9
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followed.teams.by"), "html");
                echo " 
                        ";
                // line 10
                if (twig_test_empty($this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false))) {
                    // line 11
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
                    echo "
                        ";
                } else {
                    // line 13
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false), "html");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "lastname", array(), "any", false), "html");
                    echo "    
                        ";
                }
                // line 15
                echo "                   ";
            } else {
                // line 16
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followed.teams.by.you"), "html");
                echo "
                   ";
            }
            // line 18
            echo "           </strong>
        </p>
        ";
        }
        // line 21
        echo "        <ul class=\"left-entities\">
            <li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/temp/cfparets_logo.jpg"), "html");
        echo "\" alt=\"Migol\" /><a href=\"#\"><strong>C.F. Parets</strong></a></li>
            <li><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/temp/cfparets_logo.jpg"), "html");
        echo "\" alt=\"Migol\" /><a href=\"#\"><strong>Renato Cesarini</strong></a></li>
        </ul>
        <a href=\"#\" class=\"seemore\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html");
        echo " &raquo;</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:followedTeamsWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
