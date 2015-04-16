<?php
/* @var $this GaleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galeries',
);

$this->menu=array(
	array('label'=>'Create Galery', 'url'=>array('create')),
	array('label'=>'Manage Galery', 'url'=>array('admin')),
);
?>

<h1>Galeries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
