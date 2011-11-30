<?php

/* SlooContactsBundle:Default:widgetContact.html.twig */
class __TwigTemplate_bbf642b06c281098c6c34d001693d978 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"row margin-top-standard\">
    <div class=\"span4\">
        ";
        // line 3
        if ((twig_length_filter($this->env, $this->getContext($context, 'contacts')) > 0)) {
            // line 4
            echo "        <p><strong>";
            if ($this->getContext($context, 'followers')) {
                // line 5
                echo "                        ";
                if (($this->getContext($context, 'user') != $this->getContext($context, 'user2'))) {
                    // line 6
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followers.of"), "html");
                    echo " 
                            ";
                    // line 7
                    if (twig_test_empty($this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false))) {
                        // line 8
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
                        echo "
                            ";
                    } else {
                        // line 10
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false), "html");
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "lastname", array(), "any", false), "html");
                        echo "    
                            ";
                    }
                    // line 12
                    echo "                        ";
                } else {
                    // line 13
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("followers.of.you"), "html");
                    echo "
                        ";
                }
                // line 15
                echo "                   ";
            } else {
                // line 16
                echo "                        ";
                if (($this->getContext($context, 'user') != $this->getContext($context, 'user2'))) {
                    // line 17
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("people.followed.by"), "html");
                    echo "
                            ";
                    // line 18
                    if (twig_test_empty($this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false))) {
                        // line 19
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false), "html");
                        echo "
                            ";
                    } else {
                        // line 21
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "firstname", array(), "any", false), "html");
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user2'), "lastname", array(), "any", false), "html");
                        echo "    
                            ";
                    }
                    // line 23
                    echo "                        ";
                } else {
                    // line 24
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("people.followed.by.you"), "html");
                    echo "
                        ";
                }
                // line 26
                echo "                   ";
            }
            // line 27
            echo "           </strong></p>
        <p>
        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'contacts'));
            foreach ($context['_seq'] as $context['_key'] => $context['contact']) {
                // line 30
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MigolUserBundle_showProfile", array("username" => $this->getAttribute($this->getContext($context, 'contact'), "username", array(), "any", false))), "html");
                echo "\" rel=\"twipsy\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "username", array(), "any", false), "html");
                echo "\"><img src=\"//lh6.googleusercontent.com/-h2ItMrLEMww/AAAAAAAAAAI/AAAAAAAAAx0/qRp2UhNuryU/photo.jpg?sz=48\" alt=\"Foto del perfil de Salvador\" width=\"40\" height=\"40\"/></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "        </p>
        ";
            // line 33
            if ($this->getContext($context, 'followers')) {
                // line 34
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SlooContactsBundle_followers", array("username" => $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false))), "html");
                echo "\" class=\"seemore\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html");
                echo " &raquo;</a>
        ";
            } else {
                // line 36
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SlooContactsBundle_followeds", array("username" => $this->getAttribute($this->getContext($context, 'user2'), "username", array(), "any", false))), "html");
                echo "\" class=\"seemore\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html");
                echo " &raquo;</a>
        ";
            }
            // line 38
            echo "        
        ";
        }
        // line 40
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SlooContactsBundle:Default:widgetContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
