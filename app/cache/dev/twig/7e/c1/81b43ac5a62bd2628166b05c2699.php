<?php

/* MigolCommonPagesBundle:Private:index.html.twig */
class __TwigTemplate_7ec181b43ac5a62bd2628166b05c2699 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'secondCol' => array($this, 'block_secondCol'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle:Private:indexTemplate.html.twig";
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

    // line 3
    public function block_secondCol($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span9 margin-top-standard\">
    
        
 
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
