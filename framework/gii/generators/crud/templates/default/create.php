<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Создать',
);\n";
?>

$this->menu=array(
	array('label'=>'Список <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Управление <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h2>Создать <?php echo $this->modelClass; ?></h2>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>