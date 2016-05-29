<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'IMP (Contacto)';
?>

<div class="wrap">
    <div class="site-contact">
       <div class="container">                          
          <br />
          <br />
           <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                    <span class="impact_large orange_high">CCNTACTO <span class="hidden-xs hidden-sm hidden-md">__________________________________________</span></span>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

            <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
                <?php endif; ?>
            </p>

            <?php else: ?>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <h2 class="text-center acens_medium">Address:<br />
                       Maracaibo edo Zulia<br />
                       Urb. Los Modines<br />
                       calle 91 #76-23
                </h2>                    
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 class="text-center acens_medium">Phones:<br />
                       Tlf. 58-0261.778.69.54<br />                       
                </h2>                    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 class="text-center acens_medium">Email:<br />
                       Insmapeca@gmail.com<br />                       
                </h2>                                    
            </div>
                          

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="col-lg-4"><?= $form->field($model, 'name') ?></div>
                        <div class="col-lg-4"><?= $form->field($model, 'email') ?></div>
                        
                        <div class="col-lg-12"><?= $form->field($model, 'body')->textArea(['rows' => 6]) ?></div>
                        
                      
                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</div>
