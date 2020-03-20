<?php 
	$menus = array(29);
	if(isset($typesim) && $typesim != '') {
		global $menuLoaiSim;
		$menus = $menuLoaiSim[$typesim];
	} 
?>

<?php
	for ($i = 0; $i < count($menus); $i++) { ?>
		<div class="card mb-3" style="border: 1px solid #ededed;">
			<div class="card-header text-white sim-type">
				<?php 
				$menu = wp_get_nav_menu_object($menu[$i]);
				echo $menu->name;
				?>
			</div>
			<ul style="display:flex;flex-wrap: wrap; list-style-type: none; padding: 10px 10px 0px 5px;margin-bottom: 0px;">
				<?php
				
				$childMenu = wp_get_nav_menu_items($menu[$i]);
				foreach ($childMenu as $child) { ?>
					<li class="sim-list">
						<a href="<?php echo $child->url;?>"> <?php echo $child->title;?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
<?php  
	}
?>
