<?php
/* @var $this GaleryController */
/* @var $model Galery */

$this->breadcrumbs=array(
	'Galeries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Galery', 'url'=>array('index')),
	array('label'=>'Create Galery', 'url'=>array('create')),
	array('label'=>'View Galery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Galery', 'url'=>array('admin')),
);
?>

<h1>Update Galery <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>