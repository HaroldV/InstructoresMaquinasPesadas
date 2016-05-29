<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * ActionHola se dedica a redireccionar a una vista 
     * y a mostrar el popular Hola Mundo
     * @param string $param
     * @return render view
     */
    public function actionHola($param = 'Tutorial Yii'){
        
        $mensaje = 'Hola Mundo';
        $numeros = [0,1,2,3,4,5,6,6,7,8,9,10];
        
        return $this->render('holamundo',['mensaje' =>  $mensaje,
                                          'numeros' =>  $numeros,
                                          'param'   =>  $param,  ]);
        
    }
  
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
                
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
      
    public function actionIndex()
    {
        return $this->render('index');
    }
        
    public function actionCursos()
    {
        return $this->render('cursos');
    }
    
    public function actionQsomos()
    {
        return $this->render('qsomos');    
    }
    
    public function actionEmpresa()
    {
        return $this->render('empresa');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
