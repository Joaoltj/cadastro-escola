<?php

namespace app\controllers;

use Yii;
use app\models\AlunosProfessores;
use app\models\AlunosProfessoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AlunosProfessoresController implements the CRUD actions for AlunosProfessores model.
 */
class AlunosProfessoresController extends Controller
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
     * Lists all AlunosProfessores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunosProfessoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AlunosProfessores model.
     * @param integer $alunos_id
     * @param integer $professores_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($alunos_id, $professores_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($alunos_id, $professores_id),
        ]);
    }

    /**
     * Creates a new AlunosProfessores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AlunosProfessores();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'alunos_id' => $model->alunos_id, 'professores_id' => $model->professores_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AlunosProfessores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $alunos_id
     * @param integer $professores_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($alunos_id, $professores_id)
    {
        $model = $this->findModel($alunos_id, $professores_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'alunos_id' => $model->alunos_id, 'professores_id' => $model->professores_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AlunosProfessores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $alunos_id
     * @param integer $professores_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($alunos_id, $professores_id)
    {
        $this->findModel($alunos_id, $professores_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AlunosProfessores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $alunos_id
     * @param integer $professores_id
     * @return AlunosProfessores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($alunos_id, $professores_id)
    {
        if (($model = AlunosProfessores::findOne(['alunos_id' => $alunos_id, 'professores_id' => $professores_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
