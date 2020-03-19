<div class="card mb-3" style="border: 1px solid #ededed;">
  <div class="card-header text-white sim-type">
    CÁC LOẠI SIM SỐ ĐẸP
  </div>
  <ul style="display:flex;flex-wrap: wrap; list-style-type: none; padding: 10px;margin-bottom: 0px;">
<?php $typesim = wp_get_nav_menu_items('sim-theo-loai');
// var_dump($typesim);
foreach ($typesim as $type) { ?>
    
    <li class="sim-list">
     <a href="<?php echo $type->url;?>">
     <?php echo $type->title;?>
     </a>
    
    </li>
<?php
}
?>
</ul>
</div>