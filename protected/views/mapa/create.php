<?php
/* @var $this MapaController */
/* @var $model Mapa */

$this->breadcrumbs=array(
	'Mapas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mapa', 'url'=>array('index')),
	array('label'=>'Manage Mapa', 'url'=>array('admin')),
);
?>

<h1>Create Mapa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>