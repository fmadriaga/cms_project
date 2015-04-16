<?php
/* @var $this MapaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mapas',
);

$this->menu=array(
	array('label'=>'Create Mapa', 'url'=>array('create')),
	array('label'=>'Manage Mapa', 'url'=>array('admin')),
);
?>

<h1>Mapas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
