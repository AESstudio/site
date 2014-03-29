<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
	array('label'=>'Список <?php echo $this->modelClass; ?>','icon'=>'list','url'=>array('index')),
	array('label'=>'Создать <?php echo $this->modelClass; ?>','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Редактировать <?php echo $this->modelClass; ?>','icon'=>'pencil','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Удалить <?php echo $this->modelClass; ?>','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
	array('label'=>'Управление <?php echo $this->modelClass; ?>','icon'=>'wrench','url'=>array('admin')),
);
?>

<h2>Просмотр <?php echo $this->modelClass." № <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h2>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
