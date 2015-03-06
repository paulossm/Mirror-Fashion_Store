<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<div class="col-lg-3 col-xs-12 col-md-3">
    <div class="media" id="user">
      <div class="media-left">
        <a href="#">
          <img class="media-object" style="width: 64px;" src="../../images/profile2.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Mark Thompson</h4>
        <em>Ciências da Computação<br />
            DIMAP | UFRN</em>
      </div>
    </div>
    <div class="list-group" id="user-options">
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-envelope"></span>
            <span class="badge">3</span>
            mensagens
        </a>
        <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-flag"></span>
            <span class="badge">14</span>
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
    <!-- Bar Chart -->
    <div id="container" style="width:100%; height:400px;"></div>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        $(function () { 
            $('#container').highcharts({
                chart: {
                    type: 'bar',
                    backgroundColor: 'transparent'
                },
                title: {
                    text: 'Conclusão de curso'
                },
                xAxis: {
                    categories: ['Obrigatórias', 'Estágio', 'Optativas']
                },
                yAxis: {
                    title: {
                        text: 'Porcentagem'
                    }
                },
                series: [{
                    name: 'Mark Thompson',
                    data: [80, 22, 34]
                }],
                plotOptions: {
                    series: {
                        color: '#c74732'
                    }
                },
                legend: {
                    enabled: false
                }
            });
        });
    </script>
</div><!--/left-column-->
<!--middle column-->
<div class="col-lg-6 col-xs-12 col-md-6">
    <select class="form-control">
        <option >Selecione uma disciplina...</option>
        <option>Fundamentos Matemáticos da Computação II</option>
        <option>Cálculo Diferencial e Integral I</option>
        <option>Estrutura de Dados Básicas I</option>
        <option>Arquitetura de Computadores</option>
    </select>
</div>
<!-- right column -->
<div class="col-lg-3 col-xs-12 col-md-3">
    
</div>
