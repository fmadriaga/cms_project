<?php
/* @var $this EnlaceController */
/* @var $model Enlace */

$this->breadcrumbs=array(
	'Enlaces'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enlace', 'url'=>array('index')),
	array('label'=>'Create Enlace', 'url'=>array('create')),
	array('label'=>'View Enlace', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Enlace', 'url'=>array('admin')),
);
?>

<h1>Update Enlace <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>