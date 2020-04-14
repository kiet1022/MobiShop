<?php 
	$menus = array(29);
	$nhamangFlg = false;
	if(isset($typesim) && $typesim != "") {
		global $menuLoaiSim;
		$menus = $menuLoaiSim[$typesim];
	}
?>

<?php
	// Hiển thị các menu
	for ($i = 0; $i < count($menus); $i++) { ?>
		<div class="card mb-2" style="border: 1px solid #ededed;">
			<div class="card-header text-white sim-type">
				<?php 
				$menu = wp_get_nav_menu_object($menus[$i]);
				echo $menu->name;
				?>
			</div>
			<ul style="display:flex;flex-wrap: wrap; list-style-type: none; padding: 10px 10px 0px 5px;margin-bottom: 0px;">
				<?php
				$childMenu = wp_get_nav_menu_items($menus[$i]);
				foreach ($childMenu as $child) {?>
				
					<li class="sim-list">
						<a href="
						<?php 
							if ($nhamangFlg) {
								echo("$child->url?nhamang=$nhamang&dauso=$dauso");
							} else {
								echo $child->url; }?>"> 
						
						<?php echo $child->title;?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
<?php  
	}
?>
