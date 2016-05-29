<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'IMP (Cursos)';
?>

<div class="wrap">
    <div class="site-index">    

        <div class="body-content">

           <?php
                echo Carousel::widget([
                    'items' => [
                        [
                            'content' => '<img src="img/slider-de-cursos.png" width="100%" />',                                                

                        ],                    

                    ],        
                ]);
            ?>

            <br />

            <div class="container">
                <br />
                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                    <span class="impact_large orange_high">Cursos de Maquinaria Pesadas <span class="hidden-xs hidden-sm hidden-md">__________________________________________</span></span>

                    <br /><br />
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/1.png',['class'=>'img-responsive','alt'=>'one_machine']); ?>
                          <div class="caption silver line-top-orange line-top-orange text-justified" >
                            <p class="acens_small orange"><strong>Motoniveladoras</strong></p>
                            <p class="impact_small">Seguridad.</p>
                            <p class="impact_small">Objetivo del curso.</p>                                                                                    
                            <p class="impact_small">Caracteristicas.</p>                                                                                                 
                            <p class="impact_small">Categorias de Advertencia.</p>                                             
                            <p class="impact_small">Mandos, controles, y aplicacion.</p>                                                                                                           <p class="impact_small">Inspeccion alrededor del equipo.</p>                                                                                    
                            <p class="impact_small">Niveles de fluidos.</p>                                                                                                
                            <p class="impact_small">Procedimientos antes del arranque.</p>                
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/2.png',['class'=>'img-responsive','alt'=>'two_machine']); ?>
                           <div class="caption silver line-top-orange text-justified">
                            <p class="acens_small orange"><strong>Palas Hidraulicas</strong></p>
                            <p class="impact_small">Sistema de monitoreo.</p>
                            <p class="impact_small">Categorias de advertencia.</p>                                                                                    
                            <p class="impact_small">Procedimiento seguro.</p>   
                            <p class="impact_small">Procedimiento antes, durante <br />y despues del arranque del motor.</p>                                             
                            <p class="impact_small">Tecnicas de operacion.</p>
                            <p class="impact_small">Cierre seguro de la operacion.</p>  
                            <p class="impact_small">Apagado de motor.</p>                                                                                                
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/3.png',['class'=>'img-responsive','alt'=>'three_machine']); ?>
                           <div class="caption silver line-top-orange text-justified">
                            <p class="acens_small orange"><strong>Camion de acarreo</strong></p>
                            <p class="impact_small">Seguridad.</p>
                            <p class="impact_small">Objetivo del curso.</p>                                                                                    
                            <p class="impact_small">Caracteristicas.</p>   
                            <p class="impact_small">VIMS.</p>                                             
                            <p class="impact_small">Categorias de advertencia.</p>
                            <p class="impact_small">Mandos, controles y aplicacion.</p>  
                            <p class="impact_small">Inspeccion alrededor del equipo.</p>               
                            <p class="impact_small">Niveles de fluidos.</p>               
                            <p class="impact_small">Procedimientos antes del arranque.</p>               
                            <p class="impact_small">Procedimientos despues del arranque.</p>               
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/6.png',['class'=>'img-responsive','alt'=>'one_machine']); ?>
                          <div class="caption silver line-top-orange line-top-orange text-justified" >
                            <p class="acens_small orange"><strong>Tractor</strong></p>
                            <p class="impact_small">Seguridad.</p>
                            <p class="impact_small">Caracteristicas.</p>                                                                                    
                            <p class="impact_small">Inspección alrededor de la maquina.</p>   
                            <p class="impact_small">Subida y bajada de la maquina.</p>                                             
                            <p class="impact_small">Mandos y controles de la maquina.</p>    
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/5.png',['class'=>'img-responsive','alt'=>'two_machine']); ?>
                           <div class="caption silver line-top-orange text-justified">
                            <p class="acens_small orange"><strong>Cargador</strong></p>
                            <p class="impact_small">Seguridad.</p>
                            <p class="impact_small">Objetivo del curso.</p>                                                                                    
                            <p class="impact_small">Características.</p>                                             
                            <p class="impact_small">VIMS.</p>                                             
                            <p class="impact_small">Categorías de advertencia.</p>
                            <p class="impact_small">Mandos, controles y aplicacion.</p>  
                            <p class="impact_small">Inspeccion alrededor del equipo.</p>               
                            <p class="impact_small">Niveles de fluidos.</p>               
                            <p class="impact_small">Procedimientos antes del arranque.</p>               
                            <p class="impact_small">Procedimientos despues del arranque.</p>                                                                              
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= Html::img('img/4.png',['class'=>'img-responsive','alt'=>'three_machine']); ?>
                           <div class="caption silver line-top-orange text-justified">
                            <p class="acens_small orange"><strong>Electricas</strong></p>
                            <p class="impact_small">Seguridad.</p>
                            <p class="impact_small">Caracteristicas.</p>                                                                                    
                            <p class="impact_small">Inspección alrededor de la maquina.</p>   
                            <p class="impact_small">Subida y bajada de la maquina.</p>                                             
                            <p class="impact_small">Mandos y controles de la maquina.</p>                          
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

             <br />
             <hr>

            </div>
        </div>

    </div>
</div>