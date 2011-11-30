<?php

/* MigolCommonPagesBundle:Private:menu.html.twig */
class __TwigTemplate_d71236fe007c7bcf689174f1445dc5e0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['navigation'] = array(0 => array("id" => 1, "href" => $this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_dashboard"), "label" => "dashboard", "icon" => "icon-dashboard", "iconactive" => "icon-dashboard-active"), 1 => array("id" => 2, "href" => "#", "label" => "events", "icon" => "icon-events", "iconactive" => "icon-events-active"), 2 => array("id" => 3, "href" => "#", "label" => "pictures", "icon" => "icon-pictures", "iconactive" => "icon-pictures-active"), 3 => array("id" => 4, "href" => "#", "label" => "videos", "icon" => "icon-videos", "iconactive" => "icon-videos-active"), 4 => array("id" => 5, "href" => $this->env->getExtension('routing')->getUrl("MigolUserBundle_showProfile", array("username" => $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false))), "label" => "profile", "icon" => "icon-profile", "iconactive" => "icon-profile-active"), 5 => array("id" => 6, "href" => $this->env->getExtension('routing')->getUrl("SlooContactsBundle_allContacts", array("username" => $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false))), "label" => "contacts", "icon" => "icon-contacts", "iconactive" => "icon-contacts-active"));
        // line 10
        echo "
<div class=\"row margin-top-half\">
    <div class=\"span4\">
        <ul class=\"left-menu\">
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'navigation'));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 15
            echo "                <li ";
            if (($this->getAttribute($this->getContext($context, 'item'), "href", array(), "any", false) == $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "uri", array(), "any", false))) {
                echo " class=\"active\" ";
            }
            echo ">
                    <span ";
            // line 16
            if (($this->getAttribute($this->getContext($context, 'item'), "href", array(), "any", false) == $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "uri", array(), "any", false))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "iconactive", array(), "any", false), "html");
                echo "\" ";
            } else {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "icon", array(), "any", false), "html");
                echo "\" ";
            }
            echo "></span>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "href", array(), "any", false), "html");
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'item'), "label", array(), "any", false)), "html");
            echo "</strong></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "        </ul>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
