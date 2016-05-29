<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    
    <!-- Top Header Logos -->
    <div class="container">
        
        <!-- Logo Left -->
        <div class="col-xs-6 col-md-6 col-lg-6">
            <?= HTML::img('@web/img/logo.png', ['alt'   =>  'logoInstruct',
                                                'width' =>  '']); ?>
        </div>
        
        <!-- Logo Right -->
        <div class="col-xs-6 col-md-6 col-lg-6">
            <div class="col-xs-3 col-lg-3 col-md-3 pull-right">
                <span class="pull-right">Address, name, city</span><br />
                <span class="pull-right">Phone: 123-456-789</span>
            </div>            
            <div class="col-xs-2 col-md-2 col-lg-2 pull-right">
            <?= HTML::img('@web/img/camion.png', ['alt'     =>  'logoMaquina',
                                                  'width'   =>  '140',
                                                  'heigth'  =>  '140',
                                                  'class'   =>  'pull-right']); ?>
            </div>
        </div>    
    </div>
    <!-- End Top Header Logos -->
    
    <!-- Menu -->
        <?php
            NavBar::begin([
                'brandUrl'  => Yii::$app->homeUrl,
                'options'   => ['class'     => 'nav nav-pills nav-justified blue-line',],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'nav nav-pills nav-justified'],
                'items' => [
                    ['label' => 'INICIO', 'url'         => ['/site/index']],
                    ['label' => 'CURSOS', 'url'         => ['/site/cursos']],
                    ['label' => 'EMPRESA', 'url'        => ['/site/empresa']],
                    ['label' => 'QUIENES SOMOS', 'url'  => ['/site/qsomos']],
                    ['label' => 'CONTACTOS', 'url'      => ['/site/contact']],
                ],
            ]);
            NavBar::end();
        ?>
    
    <!-- End Menu -->
    
    
                
        <?php
//            NavBar::begin([
//                'brandLabel' => 'Logo Company',
//                'brandUrl' => Yii::$app->homeUrl,
//                'options' => [
//                    'class' => 'navbar navbar-fixed-top',
//                ],
//            ]);
//            echo Nav::widget([
//                'options' => ['class' => 'navbar-nav navbar'],
//                'items' => [
//                    ['label' => 'Home', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
//                    Yii::$app->user->isGuest ?
//                        ['label' => 'Login', 'url' => ['/site/login']] :
//                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
//                            'url' => ['/site/logout'],
//                            'linkOptions' => ['data-method' => 'post']],
//                ],
//            ]);
//            NavBar::end();
        ?>

        
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        
    

    <footer class="footer">
        <div class="footer_1">
          
            <p class="text-center orange"> IMP </p>
            <p class="text-center">Terminos de Uso | Políticas de Privacidad</p>
            <p class="text-center">Copyright &copy; 2014 <span class="orange">INSTRUCTORES DE MAQUINARIA PESADA</span></p>
            <p class="text-center">mail@demolink.org</p>
            
        </div>
        
        <div class=" container-fluid footer_2">
            <div class="col-lg-6 col-md-6 col-xs-6 pull-left">
                
                <p>IMP &copy; 2015 | Privacy Policy</p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                
                <?= HTML::img('@web/img/youtube.png',   ['alt'   =>  'youtube',
                                                         'width' =>  '40',
                                                         'class' =>  'pull-right']); ?>
                <?= HTML::img('@web/img/instagram.png', ['alt'   =>  'instagram',
                                                         'width' =>  '40',
                                                         'class' =>  'pull-right']); ?>
                <?= HTML::img('@web/img/in.png',        ['alt'   =>  'linkedin',
                                                         'width' =>  '40',
                                                         'class' =>  'pull-right']); ?>
                <?= HTML::img('@web/img/twitter.png',   ['alt'   =>  'twitter',
                                                         'width' =>  '40',
                                                         'class' =>  'pull-right']); ?>
                <?= HTML::img('@web/img/facebook.png',  ['alt'   =>  'facebook',
                                                         'width' =>  '38',
                                                         'class' =>  'pull-right']); ?>
                
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
