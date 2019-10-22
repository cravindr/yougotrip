<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Invoice</title>
   
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
    .body {
    margin-left: 10px;
    padding: 0 0 0 20px;
    position: relative;
    }
    </style>
    <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->      
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>    
    
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="js/plugins/select/select2.min.js"></script>
    
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='js/plugins/highlight/jquery.highlight-4.js'></script>
    <script type='text/javascript' src='js/plugins/other/faq.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    
</head>
<body >    
    <!--<div id="loader"><img src="img/loader.gif"/></div>-->
    <div class="wrapper">
        <div class="body">
            <div class="content">
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-dollar"></span>
                    </div>
                    <h1>Invoice #{$invoiceno} <small>Date: {$invoicedate}</small></h1>
                    <img src="{$agentlogo}" height="100" width="100" class="pull-right" >
                </div>
                
                <div class="row-fluid">
                    <div class="span12">                

                        <div class="block">
                            <div class="data invoice">

                                <div class="row-fluid">
                                    <div class="span3">
                                        <h4>From</h4>
                                        <address>
                                            <strong>{$companyname}</strong><br>
                                            {$companyaddress}
                                        </address>
                                    </div>
                                    <div class="span3">
                                        <h4>To</h4>
                                        <address>
                                            <strong>{$customername}</strong><br>
                                            {$customeraddress}
                                        </address>                                
                                    </div>
                                    <div class="span3"></div>
                                    <div class="span3">
                                        <h4>Invoice</h4>
                                        <p><strong>Date invoice:</strong> {$invoicedate}</p>
                                        <p><strong>Payment due:</strong> {$invoiceduedate}</p>
                                        <div class="highlight">
                                            <strong>Amount Due:</strong> {$invoice_amount} <em>{$currencysymbal}</em>
                                        </div>
                                    </div>
                                </div>

                                <h3>Description</h3>
                                <table class="table" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="70%">Description</th>
                                            <th width="10%">Price</th>
                                            <th width="10%">Quantity</th>
                                            <th width="10%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>