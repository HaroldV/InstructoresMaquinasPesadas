<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'IMP';
?>


<div class="wrap">

    <div class="site-index">    
        <div class="body-content">
        <?php
            echo Carousel::widget([
                'items' => [
                    [
                        'content' => '<img src="img/slider-de-home.png"/>',
                        'caption' => '<div class="box_smoke">Grow your Business</div>',                    
                    ],
                ],        
            ]);
        ?>

           <div class="container">
              <br />
               <hr>
                <div class="row">
                    <div class="col-lg-6">

                        <h2 class="impact_large box_blue" style="width: 223px" >Nuestro Servicio</h2>   

                        <span class="impact_large orange_high"> Te Traemos una <br />innovacion ilimitada</span>
                        <p>Nuestro objetivo principal es que las personas <br />
                        que estudian, trabajan o estan relacionadas a este mundo <br />
                        maravilloso, puedan tener acceso a la mejor informacion  <br /> 
                        de la forma mas facil, sin necesidad de registro ni nada a cambio.</p>

                    </div>
                    <div class="col-lg-6">    
                        <h2 class="impact_large box_blue"  style="width: 240px">Por que Elegirnos</h2>

                        <p class="text-justified">Entendemos perfectamente que a la hora de elegir una empresa <br /> 
                        para el desarrollo de sus proyectos y conocimientos usted encontrara <br />
                        varias empresas que le pareceran "parecidas" a la nuestra, y es 
                            por eso que exponemos varias razones de por que elegir a<strong> INSTRUCTORES DE MAQUINARIA PESADA</strong> asi 
                         entendera que pueden ser parecidas, pero no iguales. Nuestro equipo esta integrado por profesionales idoneos y entusiastas que desempeñan sus tareas   con talento, eficiencia, seriedad y esmero.<br />
                         Trabajamos para alcanzar la satisfacción de nuestros clientes y la optimizacion y perfeccionamiento
                         de los servicios que brindamos.<br />
                         Estamos siempre disupuestos a atenderte y escucharte, para lograr comprender y resolver tus inquietudes e
                         inconvenientes.</p>
                    </div>            
                </div>
            </div>

            <hr>

            <div class="clear"></div>

            <div class="container machine_background"
                  <br />
                  <p class="box_blue impact_medium col-lg-offset-3" style="width:140px;">Por qué Elegirnos </p>
                  <div class="hidden-xs col-lg-2 col-lg-offset-3">
                      <img src="" alt="LOGO USER">
                  </div>
                  <div class="col-lg-7 well">
                    <ol>
                        <li> Excelente equipo de profesionales a su servicio. </li>
                        <li> Compromiso con la satisfaccion del cliente.      </li>
                        <li> Trayectoria y experiencia.                       </li>
                        <li> Confiabilidad.                                   </li>
                    </ol>                 
                 </div>
            </div>

            <div class="clear"></div>

            <!--  Cursos de Maquinaria Pesada      -->
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
                            <p ><a href="#" class="btn btn-orange col-lg-offset-8" role="button">Leer Mas</a></p>
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
                            <p ><a href="#" class="btn btn-orange col-lg-offset-8" role="button">Leer Mas</a></p>
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
                            <p ><a href="#" class="btn btn-orange col-lg-offset-8" role="button">Leer Mas</a> <p>
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
