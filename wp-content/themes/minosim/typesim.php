<?php 
	$menus = array(29);
	$menuDauSo = array();
	$nhamangFlg = false;
	if(isset($typesim) && $typesim != "") {
		global $menuLoaiSim;
		$menus = $menuLoaiSim[$typesim];
	}
	if (isset($nhamang) && $nhamang != "") {
		$nhamangFlg = true;
		switch ($nhamang) {
			case VIETTEL:
				array_push($menuDauSo, 116);
				break;
			case MOBI:
				array_push($menuDauSo, 117);
				break;
			case VINA:
				array_push($menuDauSo, 118);
				break;
			case VIETNAM:
				array_push($menuDauSo, 119);
				break;
			case GMOBILE:
				array_push($menuDauSo, 120);
				break;
			case ITELECOM:
				array_push($menuDauSo, 121);
				break;
			default:
			break;
		}
	}
?>

<?php
	// Hiển thị các menu
	for ($i = 0; $i < count($menus); $i++) { ?>
		<div class="card my-2" style="border: 1px solid #ededed;">
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

<?php
	for ($i = 0; $i < count($menuDauSo); $i++) { ?>
		<div class="card mb-3" style="border: 1px solid #ededed;">
			<div class="card-header text-white sim-type">
				<?php 
				$menu = wp_get_nav_menu_object($menuDauSo[$i]);
				echo $menu->name;
				?>
			</div>
			<ul style="display:flex;flex-wrap: wrap; list-style-type: none; padding: 10px 10px 0px 5px;margin-bottom: 0px;">
				<?php
				$childMenu = wp_get_nav_menu_items($menuDauSo[$i]);
				foreach ($childMenu as $child) {?>
				
					<li class="sim-list">
						<a href="
						<?php 
							if ($nhamangFlg) {
								$dauso = explode("/",explode("/dau-so-",$child->url)[1])[0];
								echo("?nhamang=$nhamang&dauso=$dauso");
							} else {
								echo $child->url; }?>"> 
						
						<?php echo $child->title;?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
<?php } ?>
