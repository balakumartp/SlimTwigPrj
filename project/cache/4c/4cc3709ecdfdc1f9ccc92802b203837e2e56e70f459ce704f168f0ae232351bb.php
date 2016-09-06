<?php

/* base.twig.html */
class __TwigTemplate_99af7b0862b71382086a3b982e8986460846c49a004bb1f73c27ffea72f78d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"\">
    ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 10
        echo "    <link rel=\"shortcut icon\" href=\"/assets/ico/favicon.ico\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Custom styles for this template -->
    <!--<link href=\"/css/app.css\" rel=\"stylesheet\">-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\">
\t<style>
\t    body
\t\t{
\t\t  background-color:#D3D3D3;
\t\t}
\t\t.container
\t\t{
\t\twidth:45%;
\t\t}
\t\tinput[type=text],.txtarea{
\t\tmargin-bottom: 10px;
\t\t}

\t\t.submitbtn
\t\t{
\t\tmargin-top: 10px !important;
\t\t}
\t\t#name_status
\t\t{
\t\tcolor:red;
\t\t}
\t\t#reg_status
\t\t{
\t\tcolor:green;
\t\t}
\t</style>
</head>
<body>
";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "<script type=\"text/javascript\" src=\"js/jquery-3.1.0.js\"></script>
<script type=\"text/javascript\">
function checkname()
{
 var username=document.getElementById(\"username\").value;
 if(username!=\"\")
 {
  \$.ajax({
  type: 'get',
  url: 'checkdata/'+username,
  success: function (response) {
    \$( '#name_status').html(response);
    if(\$('#name_status').html()!=\"\")\t
    {
      return false;\t
    }
    else
    {
      return true;\t
    }
  }
  });
 return true;
 }
else
 {
  \$( '#name_status' ).html(\"\");
  return false;
 }
}

function formsubmit()
{\t 
\t var name_status=\$('#name_status').html();
\t var firstname=document.getElementById(\"firstname\").value;
\t var lastname=document.getElementById(\"lastname\").value;
\t var username=document.getElementById(\"username\").value;
\t var password=document.getElementById(\"password\").value;
\t 
    if(firstname=='' && lastname==''  && username=='' && password=='' || name_status!=\"\" )
\t{ 
\t\t\t   
\t\t   return false;
\t}
    else
\t{
\t\t\t\$('#reg_status').html(\"Registered Successfully\");
\t\t   return true;  
\t}  
}
</script>
</body>
</html>
";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo "A Slim Framework application with Bootstrap 3";
    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Slim Project";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "<div class=\"container\">
";
        // line 50
        $this->displayBlock('container', $context, $blocks);
        // line 56
        echo "</div>
";
    }

    // line 50
    public function block_container($context, array $blocks = array())
    {
        echo " 
    <div class=\"row\">      
       <div class=\"col-sm-12\">
        </div> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  166 => 56,  164 => 50,  161 => 49,  158 => 48,  152 => 11,  147 => 9,  141 => 7,  84 => 58,  82 => 48,  42 => 11,  39 => 10,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{% block description %}A Slim Framework application with Bootstrap 3{% endblock %}">*/
/*     <meta name="author" content="">*/
/*     {% block meta %}{% endblock %}*/
/*     <link rel="shortcut icon" href="/assets/ico/favicon.ico">*/
/*     <title>{% block title %}Slim Project{% endblock %}</title>*/
/*     <!-- Custom styles for this template -->*/
/*     <!--<link href="/css/app.css" rel="stylesheet">-->*/
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">*/
/* 	<style>*/
/* 	    body*/
/* 		{*/
/* 		  background-color:#D3D3D3;*/
/* 		}*/
/* 		.container*/
/* 		{*/
/* 		width:45%;*/
/* 		}*/
/* 		input[type=text],.txtarea{*/
/* 		margin-bottom: 10px;*/
/* 		}*/
/* */
/* 		.submitbtn*/
/* 		{*/
/* 		margin-top: 10px !important;*/
/* 		}*/
/* 		#name_status*/
/* 		{*/
/* 		color:red;*/
/* 		}*/
/* 		#reg_status*/
/* 		{*/
/* 		color:green;*/
/* 		}*/
/* 	</style>*/
/* </head>*/
/* <body>*/
/* {% block content %}*/
/* <div class="container">*/
/* {% block container %} */
/*     <div class="row">      */
/*        <div class="col-sm-12">*/
/*         </div> */
/*     </div>*/
/* {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* <script type="text/javascript" src="js/jquery-3.1.0.js"></script>*/
/* <script type="text/javascript">*/
/* function checkname()*/
/* {*/
/*  var username=document.getElementById("username").value;*/
/*  if(username!="")*/
/*  {*/
/*   $.ajax({*/
/*   type: 'get',*/
/*   url: 'checkdata/'+username,*/
/*   success: function (response) {*/
/*     $( '#name_status').html(response);*/
/*     if($('#name_status').html()!="")	*/
/*     {*/
/*       return false;	*/
/*     }*/
/*     else*/
/*     {*/
/*       return true;	*/
/*     }*/
/*   }*/
/*   });*/
/*  return true;*/
/*  }*/
/* else*/
/*  {*/
/*   $( '#name_status' ).html("");*/
/*   return false;*/
/*  }*/
/* }*/
/* */
/* function formsubmit()*/
/* {	 */
/* 	 var name_status=$('#name_status').html();*/
/* 	 var firstname=document.getElementById("firstname").value;*/
/* 	 var lastname=document.getElementById("lastname").value;*/
/* 	 var username=document.getElementById("username").value;*/
/* 	 var password=document.getElementById("password").value;*/
/* 	 */
/*     if(firstname=='' && lastname==''  && username=='' && password=='' || name_status!="" )*/
/* 	{ */
/* 			   */
/* 		   return false;*/
/* 	}*/
/*     else*/
/* 	{*/
/* 			$('#reg_status').html("Registered Successfully");*/
/* 		   return true;  */
/* 	}  */
/* }*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
