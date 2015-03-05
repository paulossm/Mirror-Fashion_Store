<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
    
        <div class="col-lg-12 col-sm-12" id="welcome">
        <h1>Bem vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
        <p>A sua melhor ferramenta para gerenciar atividades acadêmicas.<br />
        Pensada para estudantes universitários que desejam ter controle sobre todo conteúdo relacionado ao seu curso em um só lugar.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                    <div class="col-lg-4">
                        <figure class="destaque">
                            <img src="images/studentwithablet.jpg" class="img-responsive" alt="Estudante com Tablet" />
                            <figcaption>
                                <h3>Acesse datas e horários das aulas, provas e entrega de trabalhos.</h3>
                                <p>O Sistema Web te deixa por dentro de todas as atividades da sua disciplina. você pode receber avisos sobre datas de provas e lembretes de entrega de trabalhos via e-mail.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="destaque">
                            <img src="images/university.jpg" class="img-responsive" alt="Universidade" />
                            <figcaption>
                                <h3>Integração com o sistema de gestão de atividades acadêmicas da Universidade.</h3>
                                <p>com apenas um cadastro, você tem acesso a todos os recursos disponíveis pelo sistema.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4" id="explicit">
                        <h3>Recursos</h3>
                        <ul>
                            <li>Turmas, Horários e Calendário Acadêmico</li>
                            <li>Relatório de notas e desempenho</li>
                            <li>Chat da turma</li>
                            <li>Acesso mobile</li>
                            <li>Integração com o sistema da universidade</li>
                        </ul>
                        <p>Para mais detalhes sobre esta aplicação, por favor leia
                        a <a href="http://www.yiiframework.com/doc/">documentação</a>.
                        Você também pode perguntar em nosso <a href="http://www.yiiframework.com/forum/">forum</a>.</p>
                    </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
