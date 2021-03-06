<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Areas;
use app\models\Actividades;
use app\models\AreasQuery;

?>

<div class="actividades-form">

    <?php $form = ActiveForm::begin(); 
		$modelosAreas=Areas::find()->all();
		$areas[0]="Sin área";
		foreach($modelosAreas as $modelo){
			$areas[$modelo->id]=$modelo->nombre;
		}
		
		if(!Yii::$app->user->identity){
			$id=0;
		}else{
			$id=Yii::$app->user->identity->id;
		}
		$disabled=false;
						
		$model->modi_usuario_id=$id;
		$model->modi_fecha=date("Y/m/d");
			

		
		
		
			
	?>

    <?= $form->field($model, 'titulo')->textarea(['rows' => 1, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 2, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'fecha_celebracion')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'duracion_estimada')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'detalles_celebracion')->textarea(['rows' => 2, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 3,'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'como_llegar')->textarea(['rows' => 6, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'notas_lugar')->textarea(['rows' => 6, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'area_id')->dropDownList($areas,['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6,'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 1,'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'imagen_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad_id')->dropDownList(Actividades::edades(),['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'publica')->checkbox(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'visible')->checkbox(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'terminada')->dropDownList(Actividades::terminada(),['disabled'=>$disabled])  ?>

		<?= $form->field($model, 'fecha_terminacion')->textInput(['disabled'=>$disabled])?>
		<?= $form->field($model, 'notas_terminacion')->textarea(['rows' => 6,'disabled'=>$disabled]) ?>
    <?= $form->field($model, 'num_denuncias')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'fecha_denuncia1')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'bloqueada')->checkbox(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'fecha_bloqueo')->textInput(['disabled'=>$disabled])?>

    <?= $form->field($model, 'notas_bloqueo')->textarea(['rows' => 6,'disabled'=>$disabled])?>

    <?= $form->field($model, 'max_participantes')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'min_participantes')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'reserva_participantes')->checkbox(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'formulario_participacion')->textarea(['rows' => 6, 'disabled'=>$disabled]) ?>

    <?= $form->field($model, 'votosOK')->textInput(['disabled'=>$disabled]) ?>

    <?= $form->field($model, 'votosKO')->textInput(['disabled'=>$disabled]) ?>
		<?php 
    echo $form->field($model, 'crea_usuario_id')->textInput(['maxlength' => true,'disabled'=>true]);

    echo $form->field($model, 'crea_fecha')->textInput(['disabled'=>true]) ;

    echo $form->field($model, 'modi_usuario_id')->textInput(['maxlength' => true,'disabled'=>true]);

    echo $form->field($model, 'modi_fecha')->textInput(['disabled'=>true]);

		echo $form->field($model, 'notas_admin')->textarea(['rows' => 6,'disabled'=>$disabled]);
	?>

    <div class="form-group">
	
        <?php if(!$disabled) echo Html::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
