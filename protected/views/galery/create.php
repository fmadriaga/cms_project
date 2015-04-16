<?php
/* @var $this GaleryController */
/* @var $model Galery */

$this->breadcrumbs=array(
	'Galeries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Galery', 'url'=>array('index')),
	array('label'=>'Manage Galery', 'url'=>array('admin')),
);
?>

<h1>Create Galery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>