<?php

namespace app\controllers;

use Yii;
use app\models\Matnru;
use app\models\MatnruSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\UploadedFile;


/**
 * MatnruController implements the CRUD actions for Matnru model.
 */
class MatnruController extends Controller
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
     * Lists all Matnru models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MatnruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Matnru model.
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

    public function actionVieww($id)
    {
        $model=$this->findModel($id);
        $model->kurish=$model->kurish+1;
        $model->save();
        return $this->redirect($model->izoh);
    }

    /**
     * Creates a new Matnru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Matnru();

        if ($model->load(Yii::$app->request->post())&&$model->save()) {
            $imgID=$model->id;
            $img1=UploadedFile::getInstance($model,'rasm');

            if (!empty($img1)) {
                $imgName1='matnru' . $imgID . '.png';
                $img1->saveAs(Url::to('@app/web/img/') . $imgName1);
                $model->rasm =$imgName1;
            }
            $model->save();
            return $this->redirect(['view','id'=> $model->id]);
        }
        return $this->render('create',[
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Matnru model.
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
                $imgName1='matnru' . $id . '.png';
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
     * Deletes an existing Matnru model.
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

    /**
     * Finds the Matnru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Matnru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Matnru::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
