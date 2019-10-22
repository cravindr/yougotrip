<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>{$webtitle}</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='js/plugins/validationEngine/jquery.validationEngine.js'></script> 
      
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    
</head>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
       
    <div class="login">

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>Login <small>{$webpagename}</small></h1>
        </div>        
        {$loginerror}
        <form method="post" action="logincheck.php" name="validate" id="validate" >
        
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="username" placeholder="login" class="validate[required]" />
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" name="password" placeholder="password" class="validate[required]"/>
                </div>            
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> Keep me signed in
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <button class="btn">Sign in <span class="icon-arrow-next icon-white"></span></button>
                    
                </div>                
            </div>
        </div>
        
        </form>
        
    </div>
    
</body>
</html>
