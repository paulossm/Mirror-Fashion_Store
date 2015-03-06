<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>
<div class="col-lg-3 col-sm-12 col-md-3">
    <div class="media" id="user">
      <div class="media-left">
        <a href="#">
          <img class="media-object" style="width: 64px;" src="../../images/profile2.jpg" alt="Mark Thompson">
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
    <div id="charts-progress" style="width:100%; height:400px;"></div>
    <script type="text/javascript">
        $(function () { 
            $('#charts-progress').highcharts({
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
<div class="col-lg-9 col-sm-12 col-md-9">
    <form class="form-inline" id="user_discipline">
    <div class="form-group">
    <!--
    <div class="input-group">
    <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
    -->
    <label for="disciplinas">Selecione uma disciplina</label>
    <select class="form-control" name="disciplinas">
        <option>Fundamentos Matemáticos da Computação II</option>
        <option>Cálculo Diferencial e Integral I</option>
        <option>Estrutura de Dados Básicas I</option>
        <option>Arquitetura de Computadores</option>
    </select>
    </div>
    <!--</div>-->
    <div class="form-group pull-right">
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-arrow-down pull-right"></span>    
        Mostrar
    </button>
    </div>
    </form>
    <div class="col-lg-8 col-sm-12 col-md-8">
    <!-- column charts -->
    <div id="charts-grade" style="width:100%;"></div>
    <script type="text/javascript">
        $(function () { 
            $('#charts-grade').highcharts({
                chart: {
                    type: 'column',
                    backgroundColor: 'transparent'
                },
                title: {
                    text: 'Notas'
                },
                xAxis: {
                    categories: ['Unidade 1', 'Unidade 2', 'Unidade 3']
                },
                yAxis: {
                    title: {
                        text: 'Porcentagem'
                    }
                },
                series: [{
                    name: 'Mark Thompson',
                    data: [96, 88, 90]
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
    
    <!-- pie charts -->
    <div id="charts-frequency" style="width:100%;"></div>
    <script type="text/javascript">
        $(function () {
            $('#charts-frequency').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Frequência'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Porcentagem',
                    data: [
                        ['Presente',   88.0],
                        {
                            name: 'Ausente',
                            y: 12.0,
                            sliced: true,
                            selected: true
                        }
                    ]
                }]
            });
        });
    </script>
    </div><!--/middle-column-->
    
    <!-- right column -->
    <div class="col-lg-4 col-sm-12 col-md-4">
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a href="#">
            <span class="glyphicon glyphicon-file"></span>
            <!--Arquivos--></a>
        </li>
        <li role="presentation" class="active"><a href="#">
            <span class="glyphicon glyphicon-cloud-download"></span>
            <!--Downloads--></a>
        </li>
        <li role="presentation" class="active"><a href="#">
            <span class="glyphicon glyphicon-cloud-upload"></span>
            <!--Upload--></a>
        </li>
    </ul>
    <div class="media">
      <div class="media-left media-middle">
        <a href="#">
          <img class="media-object short-icon" src="../../images/pdf_file.png" alt="arquivo .pdf">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Middle aligned media</h4>
        ...
      </div>
    </div>    
    
    </div>
</div>
