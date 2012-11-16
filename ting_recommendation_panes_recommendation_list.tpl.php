<?php if ($models && (sizeof($models) > 0)) :?>
<ul class="list adhl">
  <?php foreach ($models as $i => $model) : ?>
    <li class="list-item <?php echo (($i % 2) == 0) ? 'odd' : 'even' ?>">
      <?php echo theme('ting_recommendation_panes_recommendation_list_entry', array("model" => $model)); ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
