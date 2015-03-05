<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- Bootstrap CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="page">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-12">
            <nav class="navbar-default" id="mainmenu">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" id="logo" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                    </div>  
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php $this->widget('zii.widgets.CMenu',array(
                                'items'=>array(
                                    array('label'=>'Home', 'url'=>array('/site/index')),
                                    array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'about')),
                                    array('label'=>'Contato', 'url'=>array('/site/contact')),
                                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                ),
                            )); ?>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav><!-- mainmenu -->
        </div><!--./col-->
    </div><!--/.row-->
    
    <div id="header">
	<div class="container">
	</div>
    </div>
    
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    <div class="row">
	<?php echo $content; ?>
    </div>
	<div class="clear"></div>

    <div class="row">
        <div id="footer" class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <p><strong>Dúvidas quanto ao acesso?</strong><br />
                    Consulte o <a href="#">Tutorial</a> ou entre em <a href="#">Contato</a>.</p>
                </div>
                <div class="col-lg-4">
                    <p>Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.</p>
                </div>
                <div class="col-lg-4">
                    <p><?php echo Yii::powered(); ?></p>
                </div>
            </div>
        </div><!-- footer -->
    </div>
</div>
</div><!-- page -->
    
    <!-- jQuery (necessário para os plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>