<?php

/* MigolCommonPagesBundle:Private:indexTemplate.html.twig */
class __TwigTemplate_f3bd89aff2ae23f087f15da0d8db41f5 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'firstCol' => array($this, 'block_firstCol'),
            'secondCol' => array($this, 'block_secondCol'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle:Private:3colsLayout.html.twig";
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
    <script>
            \$(function () {
              \$(\"a[rel=twipsy]\").twipsy({
                live: true,
                placement: 'below'
              });
              
            })
    </script>
";
    }

    // line 14
    public function block_firstCol($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:profilePhoto", array(), array());
        // line 16
        echo "                ";
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:leftMenu", array(), array());
        // line 17
        echo "                ";
        echo $this->env->getExtension('actions')->renderAction("SlooContactsBundle:Lists:listsWidget", array(), array());
        // line 18
        echo "                ";
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:followedCompetitions", array(), array());
        // line 19
        echo "                ";
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:followedTeams", array("user" => null, "user2" => null), array());
    }

    // line 22
    public function block_secondCol($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"span9 margin-top-standard\">
    
        
 
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:indexTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
