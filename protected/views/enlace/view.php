<?php
/* @var $this EnlaceController */
/* @var $model Enlace */

$this->breadcrumbs=array(
	'Enlaces'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Enlace', 'url'=>array('index')),
	array('label'=>'Create Enlace', 'url'=>array('create')),
	array('label'=>'Update Enlace', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Enlace', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enlace', 'url'=>array('admin')),
);
?>

<h1>View Enlace #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'url',
	),
)); ?>
