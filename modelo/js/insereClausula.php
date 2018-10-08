<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/conteudo.css" rel="stylesheet">
    <style type="text/css">
    ul>li, a{
	cursor: pointer;
	}
	.pagination li
{
	float:left;
	text-align:right;
}

    </style>
    <title>Cadastra Nova Cláusula</title>

  
  <script language="javascript" type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
	<script language="javascript" type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "mytextarea",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

 // Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		file_browser_callback : "ajaxfilemanager",
 // Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});


		function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = "/Content/model/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
			switch (type) {
				case "image":
					break;
				case "media":
					break;
				case "flash": 
					break;
				case "file":
					break;
				default:
					return false;
			}
            tinyMCE.activeEditor.windowManager.open({
                url: "/Content/model/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
                width: 782,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });
            

		}
	</script>
    
    
</head>
<script language="JavaScript">
</script>
<body>
<?php 
$hoje = date('d/m/Y H:m:s');

require_once($_SERVER['DOCUMENT_ROOT'].'/configuration.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/pegacodigo.php');

?>
<div class="conteudoprincipal">
<?php include("menu.php"); ?>
 <div class="panel panel-primary" ng-controller="propostaCrtl" style="height:; border:1;">
  <div class="panel-heading">Cadastra Nova Cláusula</div>
 <div class="panel-body">
  <form action="gravaClausula.php" method="post" name="gravaClausula" id="gravaClausula" enctype="multipart/form-data">   
    <div class="col-md-12"> 
		  <div class="col-md-8">
		  titulo: <input  name="titulo" id="titulo"  class="form-control"  type="text"  value="" placeholder="Entre com o titulo da Cláusula" />
      <br>
		  </div>
    </div>  
    <div class="col-md-12"> 
      <div class="col-md-10">
		 <textarea  name="mytextarea" id="mytextarea"  class="form-control" /></textarea>  
		  </div>
    </div>
   <div class="col-md-12">  
       <div class="col-md-4">
  	 <br />
  	 <br />
      <a href="listaClausulas.php"><input name="Voltar"  class="btn btn-primary" value="Voltar a listagem" /></a>
      </div>
      <div class="col-md-2">
  	 <br />
  	 <br />
  	  
      <input name="Cadastrar Cláusula"  type="submit" class="btn btn-success" value="Cadastrar Cláusula" />
      </div>
      <div class="col-md-2">
  	  </div>
      <div class="col-md-2">
  	  </div>
       <div class="col-md-2">
  	  </div> 
      
  </div>
 
   
   </form>  
   </div>
  </div> 
</div>
  
</body>
</html>

  




