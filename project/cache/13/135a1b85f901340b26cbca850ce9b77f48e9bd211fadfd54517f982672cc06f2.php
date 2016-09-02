<?php

/* register.twig.html */
class __TwigTemplate_c5d0205fb420fdc20d956a26ede2a65ed4c3b10db435473a77aa9b86a0ef9d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "register.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
\t ";
        // line 5
        $this->displayBlock('container', $context, $blocks);
        // line 51
        echo "\t   
 </div>
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "\t <div class=\"row\">
               <div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h2>User Registration ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "username", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<span id=\"reg_status\"></span>
\t\t\t\t\t<form id=\"RegForm\" method=\"POST\" action =\"register\" onsubmit=\"return formsubmit();\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">First Name</label>
                        <div class=\"col-sm-9\">
                            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"First Name\" />
                        </div>
                        
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Last Name</label> 
                        <div class=\"col-sm-9\">
                            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Last Name\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">User Name</label> 
                        <div class=\"col-sm-9\">
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"User Name\" onmouseout=\"return checkname();\" onkeyup=\"return checkname();\" />
\t\t\t\t\t\t\t<span id=\"name_status\"></span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Password</label> 
                        <div class=\"col-sm-9\">
                   <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\"  />
                        </div>
                    </div>

                   <div class=\"form-group\">
                        <div class=\"col-sm-9 col-sm-offset-6\">
                            <input type=\"submit\"   id=\"submit\" name=\"submit\"  value=\"submit\"  class=\"submitbtn\"  >  
                        </div>
                    </div>
                    </form>
               </div>  
       </div>
       ";
    }

    public function getTemplateName()
    {
        return "register.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 6,  50 => 5,  44 => 51,  42 => 5,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig.html" %}*/
/* {% block title %}{{ page.title }}{% endblock %}*/
/* {% block content %}*/
/* <div class="container">*/
/* 	 {% block container %}*/
/* 	 <div class="row">*/
/*                <div class="col-sm-12">*/
/* 					<div class="page-header">*/
/* 						<h2>User Registration {{page.username}}</h2>*/
/* 					</div>*/
/* 					<span id="reg_status"></span>*/
/* 					<form id="RegForm" method="POST" action ="register" onsubmit="return formsubmit();">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">First Name</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" />*/
/*                         </div>*/
/*                         */
/*                     </div> */
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">Last Name</label> */
/*                         <div class="col-sm-9">*/
/*                             <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" />*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">User Name</label> */
/*                         <div class="col-sm-9">*/
/*                             <input type="text" class="form-control" id="username" name="username" placeholder="User Name" onmouseout="return checkname();" onkeyup="return checkname();" />*/
/* 							<span id="name_status"></span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">Password</label> */
/*                         <div class="col-sm-9">*/
/*                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"  />*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                    <div class="form-group">*/
/*                         <div class="col-sm-9 col-sm-offset-6">*/
/*                             <input type="submit"   id="submit" name="submit"  value="submit"  class="submitbtn"  >  */
/*                         </div>*/
/*                     </div>*/
/*                     </form>*/
/*                </div>  */
/*        </div>*/
/*        {% endblock %}	   */
/*  </div>*/
/* {% endblock %}*/
/* */
