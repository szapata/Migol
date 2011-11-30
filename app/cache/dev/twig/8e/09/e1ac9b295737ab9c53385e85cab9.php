<?php

/* SlooContactsBundle:Default:showContacts.html.twig */
class __TwigTemplate_8e09e1ac9b295737ab9c53385e85cab9 extends Twig_Template
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
        $parent = "MigolUserBundle:Profile:show.html.twig";
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
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/jquery.bootstrappopover.js"), "html");
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sloocontacts/js/jquery-ui-1.8.16.custom.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
<script>
  //Global variables
  var showFollowers = '";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'showFollowers'), "html");
        echo "';
  var showContactsURL = '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_showContacts"), "html");
        echo "';
  var showProfileURL = '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolUserBundle_showProfile", array("username" => "")), "html");
        echo "';
  var showListURL = '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_showUserInLists"), "html");
        echo "';
  var saveListURL = '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_saveList"), "html");
        echo "';
  var saveUserInListsURL = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_saveInLists"), "html");
        echo "';
  var username = '";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
        echo "';
  var page = 0;
  var loadingMessage= '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("loading.contacts"), "html");
        echo "';
  var unfollowMessage = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unfollow"), "html");
        echo "';
  var followMessage = '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("follow.infinitive"), "html");
        echo "';
  var showlistMessage='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add.to.list"), "html");
        echo "';
  var noMoreContactsMessage= '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("loading.no.more.contacts"), "html");
        echo "';
  var yourListsMessage= '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("your.lists"), "html");
        echo "';
  var followURL = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_follow"), "html");
        echo "';
  var unfollowURL = '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SlooContactsBundle_unfollow"), "html");
        echo "';
  var includeMessage = '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("include.to"), "html");
        echo "';
  var inMessage = '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("in"), "html");
        echo "';
  var createListMessage = '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("create.new.list"), "html");
        echo "';
  var saveListMessage= '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.list"), "html");
        echo "'; 
  var newListMessage= '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("new.list"), "html");
        echo "';
  var loadingImageURL = '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/gifs/loading.gif"), "html");
        echo "';
  var initialContactList = new Array();
  ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'contacts'));
        foreach ($context['_seq'] as $context['_key'] => $context['contact']) {
            // line 32
            echo "                initialContactList.push({
                                    username: '";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'contact'), "user", array(), "any", false), "username", array(), "any", false), "html");
            echo "',
                                    firstname:   '";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'contact'), "user", array(), "any", false), "firstname", array(), "any", false), "html");
            echo "',
                                    lastname: '";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'contact'), "user", array(), "any", false), "lastname", array(), "any", false), "html");
            echo "',
                                    following: '";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "following", array(), "any", false), "html");
            echo "'
                          });
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "</script>

";
    }

    // line 42
    public function block_secondCol($context, array $blocks = array())
    {
        // line 43
        echo "
<div class=\"span12 margin-top-standard\">
    <span>&LeftArrow;</span> <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolUserBundle_showProfile", array("username" => $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false))), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("backprofile"), "html");
        echo "</a>
    <div class=\"row\">
        <div class=\"span12\">
            <h1>";
        // line 48
        if ($this->getContext($context, 'showFollowers')) {
            if (($this->getContext($context, 'user') != $this->getContext($context, 'user2'))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followers.of"), "html");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followers.of.you"), "html");
            }
        } else {
            if (($this->getContext($context, 'user') != $this->getContext($context, 'user2'))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("people.followed.by"), "html");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("people.followed.by.you"), "html");
            }
            echo " ";
        }
        echo " </h1>
        </div>
    </div>
    <div id=\"contacts\">
        
    </div>

</div>
";
    }

    // line 57
    public function block_backbone($context, array $blocks = array())
    {
        // line 58
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sloocontacts/js/contactlist.js"), "html");
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "SlooContactsBundle:Default:showContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
