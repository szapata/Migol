<?php

/* SlooContactsBundle:Lists:showall.html.twig */
class __TwigTemplate_ac210fff4f03fc9d7e4845f3661eaf85 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'secondCol' => array($this, 'block_secondCol'),
            'backbone' => array($this, 'block_backbone'),
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

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->renderParentBlock("scripts", $context, $blocks);
        echo "
<script>
  var saveListURL = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_saveList"), "html");
        echo "';
  var deleteListURL = '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_deleteList"), "html");
        echo "';
  var dashboardURL = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_dashboard"), "html");
        echo "';
  var initialList = new Array();
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'lists'));
        foreach ($context['_seq'] as $context['_key'] => $context['list']) {
            // line 10
            echo "      initialList.push({
                id: '";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "id", array(), "any", false), "html");
            echo "',
                name:   '";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "name", array(), "any", false), "html");
            echo "'
      });
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</script>
";
    }

    // line 17
    public function block_secondCol($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"span9 margin-top-standard\">
    <div class=\"row\">
        <div class=\"span5\">
            <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("lists"), "html");
        echo "</h1>
        </div>
        <div class=\"span4\">
            <a href=\"javascript:void(0);\" data-controls-modal=\"new-list\" data-backdrop=\"static\" class=\"btn\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("create.new.list"), "html");
        echo "</a>
        </div>
    </div>
    <div id=\"user-lists\">
        

    
    </div>   
        <!-- Modal Lists -->
        <div id=\"new-list\" class=\"modal hide fade in\">
            <div class=\"modal-header\">
                <a href=\"javascript:void(0);\" class=\"close\">x</a>
                <h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("create.new.list"), "html");
        echo "</h3>
            </div>
            <div class=\"modal-body\">
               <input type=\"text\" id=\"newlist\" class=\"span4\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("new.list"), "html");
        echo "\"/>
               <a href=\"javascript:void(0);\" class=\"btn success\" id=\"addlist\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.list"), "html");
        echo "</a><span id=\"list-error\" class=\"help-inline red-text\"></span>
            </div>
            <div class=\"modal-footer\">
                
            </div>
        </div>
        <!-- End Modal Lists -->
   
</div>
";
    }

    // line 50
    public function block_backbone($context, array $blocks = array())
    {
        // line 51
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sloocontacts/js/manageAllLists.js"), "html");
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "SlooContactsBundle:Lists:showall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
