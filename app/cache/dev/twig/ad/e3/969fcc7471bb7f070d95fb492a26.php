<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ade3969fcc7471bb7f070d95fb492a26 extends Twig_Template
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
        $parent = "MigolCommonPagesBundle:Private:profileTemplate.html.twig";
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
            //Global variables
            var showListURL = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_showLists"), "html");
        echo "';
            var saveListURL = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_saveList"), "html");
        echo "';
            var saveUserInListsURL = '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_saveInLists"), "html");
        echo "';
            var followURL = '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_follow"), "html");
        echo "';
            var unfollowURL = '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_unfollow"), "html");
        echo "';
            var initialList = new Array();
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'lists'));
        foreach ($context['_seq'] as $context['_key'] => $context['list']) {
            // line 14
            echo "                initialList.push({
                                    name: '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "name", array(), "any", false), "html");
            echo "',
                                    id:   '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "id", array(), "any", false), "html");
            echo "',
                                    checked: '";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "checked", array(), "any", false), "html");
            echo "'
                          });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "            \$(function () {
              \$(\"#follow\").click(function(){
                  var self = this;
                  \$.ajax({
                      type: \"POST\",
                      url: followURL,
                      data: \"user=";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
        echo "\",
                      success: function(msg){
                            \$(\"#showlist\").toggle();
                            \$(self).hide();
                            \$(\"#unfollow\").show();
                      },
                      error: function(objeto, quepaso, otroobj){
                            //show error
                      }
\t
\t\t  });
                  
                  
              });
              \$(\"#unfollow\").click(function(){
                  var self = this;
                  \$.ajax({
                      type: \"POST\",
                      url: unfollowURL,
                      data: \"user=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
        echo "\",
                      success: function(msg){
                            \$(\"#showlist\").toggle();
                            \$(self).hide();
                            \$(\"#follow\").show();
                      },
                      error: function(objeto, quepaso, otroobj){
                            //show error
                      }
\t
\t\t  });
                  
              });
              \$(\".modal-footer > .cancel\").click(function(){
                  \$(\"#user-lists\").modal('hide');
              });
              \$(\".modal-footer > .save\").click(function(){
                  
                  \$.ajax({
                      type: \"POST\",
                      url: saveUserInListsURL,
                      data: \$(\"#contact-in-lists\").serialize(),
                      success: function(msg){
                            \$(\"#user-lists\").modal('hide');
                      },
                      error: function(objeto, quepaso, otroobj){
                            //show error
                      }
\t
\t\t  });
                  //on success
                  
              });
                           
            });     
            
    </script>
";
    }

    // line 84
    public function block_secondCol($context, array $blocks = array())
    {
        // line 85
        echo "
<div class=\"span12 margin-top-standard\">
";
        // line 87
        echo $this->renderParentBlock("secondCol", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"span8\">
                <h1>";
        // line 90
        if (twig_test_empty($this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false))) {
            // line 91
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
            echo "
                        ";
        } else {
            // line 93
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "lastname", array(), "any", false), "html");
            echo "    
                        ";
        }
        // line 94
        echo "</h1>
            </div>
            
            <div class=\"span4\">
                ";
        // line 98
        if (($this->getContext($context, 'user') == $this->getContext($context, 'user2'))) {
            // line 99
            echo "                <a href=\"#\" class=\"btn orange\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit.profile"), "html");
            echo "</a>
                ";
        } elseif (($this->getContext($context, 'followed') == false)) {
            // line 101
            echo "                <a href=\"#\" class=\"btn success\" id=\"follow\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("follow"), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
            echo "</a>
                <a href=\"#\" class=\"btn danger hidden\" id=\"unfollow\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unfollow"), "html");
            echo "</a>
                <span class=\"help-inline hidden\" id=\"showlist\"><a href=\"#\" data-controls-modal=\"user-lists\" data-backdrop=\"static\">";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add.to.list"), "html");
            echo "</a></span>
                
                ";
        } else {
            // line 106
            echo "                <a href=\"#\" class=\"btn danger\" id=\"unfollow\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unfollow"), "html");
            echo "</a>
                <a href=\"#\" class=\"btn success hidden\" id=\"follow\">";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("follow"), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
            echo "</a>
                <span class=\"help-inline\"><a href=\"#\" id=\"showlist\" data-controls-modal=\"user-lists\" data-backdrop=\"static\">";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add.to.list"), "html");
            echo "</a></span>
                
                ";
        }
        // line 111
        echo "                <!-- Modal Lists -->
                <div id=\"user-lists\" class=\"modal hide fade in\">
                    <div class=\"modal-header\">
                        <a href=\"#\" class=\"close\">x</a>
                        <h3>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("lists"), "html");
        echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        
                        <form action=\"\" id=\"contact-in-lists\">
                            <input type=\"hidden\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
        echo "\" name=\"user\" id=\"username2\"/>
                        <ul class=\"inputs-list\" id=\"lists\">
                            
                        </ul>
                        </form>
                        
                            <input type=\"text\" id=\"newlist\" class=\"span3\" placeholder=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("new.list"), "html");
        echo "\"/>
                            <a href=\"#\" class=\"btn\" id=\"addlist\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.list"), "html");
        echo "</a><span id=\"list-error\" class=\"help-inline red-text\"></span>
                        
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"#\" class=\"btn success save\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save"), "html");
        echo "</a>
                        <a href=\"#\" class=\"btn secondary cancel\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cancel"), "html");
        echo "</a>
                        <span class=\"help-block\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.scape.toclose"), "html");
        echo "</span>
                    </div>
                </div>
                <!-- End Modal Lists -->
            </div>
            
        </div>
</div>
";
    }

    // line 142
    public function block_backbone($context, array $blocks = array())
    {
        // line 143
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sloocontacts/js/managelists.js"), "html");
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
