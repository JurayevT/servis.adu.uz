<?php

namespace app\controllers;

use Yii;
use app\models\Matnuz;
use app\models\MatnuzSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * MatnuzController implements the CRUD actions for Matnuz model.
 */
class MatnuzController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Matnuz models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MatnuzSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Matnuz model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model=$this->findModel($id);
        $model->kurish=$model->kurish+1;
        $model->save();
        return $this->render('view', [
            'model' => $model
        ]);
    }

    /**
     * Creates a new Matnuz model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Matnuz();
        
        if ($model->load(Yii::$app->request->post())&&$model->save()) {
            $imgID=$model->id;
            $img=UploadedFile::getInstance($model,'rasm');

            if (!empty($img)) {
                $imgName='matnuz' . $imgID . '.png';
                $img->saveAs(Url::to('@app/web/img/') . $imgName);
                $model->rasm =$imgName;
            }
            $model->save();
            
            return $this->redirect(['view','id'=> $model->id]);
        }
        return $this->render('create',[
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Matnuz model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model=$this->findModel($id);
        $oldPhoto1 = $model->rasm;

        if ($model->load(Yii::$app->request->post())) {
            $img1 = UploadedFile::getInstance($model,'rasm');
            
            if (!empty($img1)) {
                $file1 = Url::to('@app/web/img/').$oldPhoto1;
                if (file_exists($file1)) {
                    @unlink($file1);
                }
                $imgName1='matnuz' . $id . '.png';
                $img1->saveAs(Url::to('@app/web/img/') . $imgName1);
                $model->rasm=$imgName1;
            }
            else
                $model->rasm = $oldPhoto1;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }

    /**
     * Deletes an existing Matnuz model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $oldmodel = $this->findModel($id);

        if(!empty($oldmodel->rasm)){
            $imgPath=__DIR__.'/../web/img/';
            $model=$this->findModel($id);
            $file=$imgPath.$model->rasm;
            if(file_exists($file)) {
                unlink($file);
            }
            $model->delete();
            return $this->redirect(['index']);
        }
        else {
            $oldmodel->delete();
            return $this->redirect(['index']);
        }
    }

    public function actionAboutus() {
        return $this->render('aboutus');
    }

    /**
     * Finds the Matnuz model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Matnuz the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Matnuz::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
