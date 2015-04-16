<?php
/* @var $this EnlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enlaces',
);

$this->menu=array(
	array('label'=>'Create Enlace', 'url'=>array('create')),
	array('label'=>'Manage Enlace', 'url'=>array('admin')),
);
?>

<h1>Enlaces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
