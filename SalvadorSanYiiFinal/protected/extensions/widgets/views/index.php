
	<ul class="listCategoria" style="list-style-image:url(<?php echo Yii::app()->baseUrl;?>/images/vicategoria.png);">
		<?php
		/* @var $this CategoriaController */
		/* @var $data Categoria */

foreach ($categorias as $data):?>
		<li class="itemCategoria"><a style="color:black;" href="index.php?r=productos/index&categoria_idCategoria=<?php echo CHtml::encode($data->idCategoria);?>&marca_idMarca=<?php echo $idMarca;?>">
				<?php echo CHtml::encode($data->categoria); ?>
		</a></li>
		<?php endforeach;?>
	</ul>

