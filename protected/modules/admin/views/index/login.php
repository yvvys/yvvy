<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>美克美家 | 后台登录系统</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="/admin/css/login.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/admin/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

	<!-- BEGIN LOGO -->

	<div class="logo">

		<img src="/admin/image/logo-big.png" alt="" /> 

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->

		<?php $form=$this->beginWidget('CActiveForm'); ?>

			<h3 class="form-title">输入你的登录信息</h3>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>
						
						<?php echo $form->textField($model,'username',array('class'=>'m-wrap placeholder-no-fix','type'=>'text','placeholder'=>'Username')) ?>
						
					</div>

				</div>

			</div>

			<div class="control-group">


				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<?php echo $form->textField($model,'password',array('class'=>'m-wrap placeholder-no-fix','type'=>'"password','placeholder'=>'Password')) ?>

					</div>

				</div>

			</div>

			<div class="form-actions">

				<label class="checkbox">

				<input type="checkbox" name="remember" value="1"/> Remember me

				</label>
				
				<?php echo CHtml::submitButton('Login',array('class'=>"btn green pull-right",'type'=>'submit')); ?>         

			</div>

		<?php $this->endWidget(); ?>

		<!-- END LOGIN FORM -->      

	</div>

	<!-- END LOGIN -->

	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2013 &copy; Metronic. /admin Dashboard Template.

	</div>

	<!-- END COPYRIGHT -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/admin/js/excanvas.min.js"></script>

	<script src="/admin/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/admin/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/admin/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/admin/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/admin/js/jquery.validate.min.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/admin/js/app.js" type="text/javascript"></script>
    

	<!-- END PAGE LEVEL SCRIPTS --> 

	<script>

		jQuery(document).ready(function() {     

		  App.init();

		  Login.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>