<?php
/* @var $this MapaController */
/* @var $model Mapa */

$this->breadcrumbs=array(
	'Mapas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mapa', 'url'=>array('index')),
	array('label'=>'Create Mapa', 'url'=>array('create')),
	array('label'=>'View Mapa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mapa', 'url'=>array('admin')),
);
?>

<h1>Update Mapa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>