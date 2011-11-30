<?php

/* MigolCommonPagesBundle:Private:profileTemplate.html.twig */
class __TwigTemplate_699b20dd25e4715e3d38daa09f31a93d extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'firstCol' => array($this, 'block_firstCol'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle:Private:2colsLayout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->renderParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_firstCol($context, array $blocks = array())
    {
        // line 7
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:profileBigPhoto", array(), array());
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('actions')->renderAction("SlooContactsBundle:Contacts:contactsWidget", array("followers" => true, "user2" => $this->getContext($context, 'user2')), array());
        // line 10
        echo $this->env->getExtension('actions')->renderAction("SlooContactsBundle:Contacts:contactsWidget", array("followers" => false, "user2" => $this->getContext($context, 'user2')), array());
        // line 11
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:followedTeams", array("user" => $this->getContext($context, 'user'), "user2" => $this->getContext($context, 'user2')), array());
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:profileTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
