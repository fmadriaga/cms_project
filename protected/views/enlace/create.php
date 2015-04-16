<?php
/* @var $this EnlaceController */
/* @var $model Enlace */

$this->breadcrumbs=array(
	'Enlaces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Enlace', 'url'=>array('index')),
	array('label'=>'Manage Enlace', 'url'=>array('admin')),
);
?>

<h1>Create Enlace</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>