<tr>
	<td><?php if ($data->active === false) echo 'Expired'; ?></td>
	<td><a href="<?php echo $data->url; ?>"><?php echo $data->name; ?></a></td>
	<td><?php echo $data->datetime_start; ?></td>
	<td><?php echo $data->duration; ?></td>
	<td><?php if ($data->location != null) echo $data->location->name; ?></td>
	<td><?php echo '$'.$data->price; ?></td>
	<td><?php echo count($data->users); ?> / <?php echo $data->capacity; ?></td>
</tr>


<?php /*
<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'sanitized'=>$data->sanitized)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sanitized')); ?>:</b>
	<?php echo CHtml::encode($data->sanitized); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime_start')); ?>:</b>
	<?php echo CHtml::encode($data->datetime_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime_end')); ?>:</b>
	<?php echo CHtml::encode($data->datetime_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_location')); ?>:</b>
	<?php echo CHtml::encode($data->id_location); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_map')); ?>:</b>
	<?php echo CHtml::encode($data->id_map); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacity')); ?>:</b>
	<?php echo CHtml::encode($data->capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('information')); ?>:</b>
	<?php echo CHtml::encode($data->information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reminder')); ?>:</b>
	<?php echo CHtml::encode($data->reminder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agreement')); ?>:</b>
	<?php echo CHtml::encode($data->agreement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_age')); ?>:</b>
	<?php echo CHtml::encode($data->min_age); ?>
	<br />

</div>
	*/ ?>
