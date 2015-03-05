<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<div class="col-lg-3 col-xs-12 col-md-4">
    <div class="media" id="user">
      <div class="media-left">
        <a href="#">
          <img class="media-object" style="width: 64px;" src="../../images/profile.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Caroline Thompson</h4>
        <em>Ciências da Computação<br />
            DIMAP | UFRN</em>
      </div>
    </div>
    <div class="list-group" id="user-options">
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-envelope"></span>
            mensagens
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-flag"></span>
            novidades
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-calendar"></span>
            calendário
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-cog"></span>
            configuração da conta</a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-info-sign"></span>
            ajuda
        </a>
    </div>
</div>
<div class="col-lg-6 col-xs-12 col-md-6">
    <h2>Dash</h2>
</div>
<div class="col-lg-3 col-xs-12 col-md-4">
</div>
