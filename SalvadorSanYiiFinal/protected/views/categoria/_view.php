<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>

<div class="view">
	<ul style="list-style: none; padding-left: 12px; font-size: 15px">
		<li><a
			href="index.php?r=<?php echo CHtml::encode($data->categoria); ?>"><?php echo CHtml::encode($data->categoria); ?>
		</a>
		</li>
	</ul>
</div>
