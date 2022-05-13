<?php

namespace app\controllers;

use app\models\forms\Login;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\models\Pages;
use app\models\About;
use app\models\Mission;
use app\models\BaseModel;
use app\models\Partners;
use app\models\SertificateImages;
use app\models\SertificateTexts;
use app\models\History;
use app\models\News;
use app\models\Categories;
use app\models\Products;

use app\models\Video;
use app\models\Carousel;
use app\models\OurPartners;

use app\models\GalleryPhoto;
use app\models\OurWork;
use app\models\Phones;
use app\models\Contacts;
use app\models\ContactsForm;
use app\models\Socials;
use app\models\Team;
use app\models\Faq;
use app\models\ExportInfo;
use app\models\OurAdvantages;

class SiteController extends Controller
{
    public function init()
    {
      
        if (!empty(Yii::$app->request->cookies['language'])) {
            Yii::$app->language = Yii::$app->request->cookies['language'];
        } else {
            Yii::$app->language = 'ru';
        }
        parent::init();
    }
    public function beforeAction($action)
    {
        if($action->id!=='index'){
            $this->view->params['breadData'] = Pages::findOne(['title_en'=>$action->id])? Pages::findOne(['title_en'=>$action->id])->breadcrumb:'';
            $this->view->params['pageData'] = Pages::findOne(['title_en'=>$action->id])? Pages::findOne(['title_en'=>$action->id])->pageText:'';
            $this->view->params['breadTitle'] =  $this->view->params['breadData']? $this->view->params['breadData']->title:'';
            $this->view->params['breadImage'] =  $this->view->params['breadData']? $this->view->params['breadData']->image:'';
            $this->view->params['pageContent'] =  $this->view->params['pageData']? $this->view->params['pageData']->content:'';
            $this->view->params['pageTitle'] =  $this->view->params['pageData']? $this->view->params['pageData']->title:'';
        }
           return parent::beforeAction($action);
    }
    public function actionSetLanguage($l)
    {
        $langs = ['en', 'ru','uz'];
        if (in_array($l, $langs)) {
            Yii::$app->language = $l;
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'language',
                'value' => $l,
            ]));
        }
        // return Yii::$app->request->referrer;
        return $this->redirect(Yii::$app->request->referrer);

    }
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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




    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $about = About::find()->orderBy(['order'=>SORT_DESC])->published()->one();
        // $file =  Pages::findOne(['title_en'=>Yii::$app->controller->action->id])->breadcrumb->image;
        $carousel = Carousel::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        $advantage = OurAdvantages::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        $faq = Faq::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        $video = Video::find()->published()->orderBy(['order'=>SORT_ASC])->one();
        $categories = Categories::find()->published()->orderBy(['order'=>SORT_ASC])->limit(3)->all();
        return $this->render('index',[
            'carousel'=>$carousel,
            'advantage'=>$advantage,
            'faq'=>$faq,
            'video'=>$video,
            'categories'=>$categories,
            'about'=>$about,
        //     'file'=>$file,
        ]);
    }


   
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        // $model = new ContactForm();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');
        //     return $this->refresh();
        // }
        $phones = Phones::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        $contact = Contacts::find()->published()->orderBy(['order'=>SORT_ASC])->one();
        $socials = Socials::find()->published()->orderBy(['order'=>SORT_ASC])->one();
        
        return $this->render('contacts', [
        //     'model' => $model,
            'phones'=>$phones,
            'contact'=>$contact,
            'socials'=>$socials,

        ]);
    }

    public function actionCategories($id=1){
        $category= Categories::findOne(['id'=>$id]);
        return $this->render('categories',[
            'category'=>$category,
        ]);
    }



    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $about = About::find()->orderBy(['order'=>SORT_DESC])->published()->one();
        return $this->render('about',[
            'data'=>$about,
        ]);
    }

    public function actionCertificates(){
        $certificateImage = SertificateImages::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        // $certificateText = SertificateTexts::find()->orderBy(['order'=>SORT_DESC])->published()->one();
        return $this->render('certificates',[
            'certificateImage'=>$certificateImage,
            // 'certificateText'=>$certificateText,
        ]);
    }


    public function actionMilestones(){
        $history = History::find()->published()->orderBy(['year'=>SORT_DESC])->all();
        return $this->render('milestones',[
            'history'=>$history,
        ]);
    }

    public function actionTeam(){
        $team = Team::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('team',[
            'team'=>$team,
        ]);
    }

    public function actionNews(){
        $news = News::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('news',
        [
            'news'=>$news,
        ]
        );
    }
    public function actionNewsIn($id){
        $data = News::findOne(['id'=>$id]);
        $data->updateViews();
      
        return $this->render('news-in',[
            'data'=>$data,
        ]);
    }

    public function actionPartners(){
        $partners = Partners::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('partners',[
            'partners'=>$partners,
        ]);
    }
    public function actionPhoto(){
        $gallery = GalleryPhoto::find()->published()->orderBy(['order'=>SORT_ASC])->one();

        return $this->render('photo',[
            'gallery'=>$gallery,
        ]);
    }
    public function actionPhotoIn($id){
        $data = GalleryPhoto::findOne(['id'=>$id]);
        // $partners = OurPartners::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('photo-in',[
            'data'=>$data,
            // 'partners'=>$partners,
        ]);
    }
   
    public function actionProductIn($id=1){

        $product = Products::findOne(['id'=>$id]);
        return $this->render('product-in',[
            'product'=>$product,
        ]);
    }

    public function actionVideo(){
        $video = Video::find()->published()->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('video',[
            'video'=>$video,
        ]);
    }

    public function actionMap(){
        $country = ExportInfo::find()->published()->orderBy(['order'=>SORT_DESC])->all();
        return $this->render('map',[
            'country'=>$country,
        ]);
    }

    public function actionSendMessage(){
        if(Yii::$app->request->isAjax){
            $contact = new ContactsForm();
            $contact->name = $_GET['name'];
            $contact->phone = $_GET['phone'];
            $contact->body = $_GET['body'];
            if($contact->contact()){
                $res['title'] = 'success';
                $res['content'] = 'content';
                $res['button'] = 'hayr';
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return $res;
            }
        }
    }




}
