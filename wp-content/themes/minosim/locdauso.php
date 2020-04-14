<?php
$menuDauSo = array();
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
	for ($i = 0; $i < count($menuDauSo); $i++) { ?>
			<ul>
                <li class="locdauso" data-value="">Tất cả đầu số</li>
				<?php
                $childMenu = wp_get_nav_menu_items($menuDauSo[$i]);
				foreach ($childMenu as $child) {?>
					<li class="locdauso" data-value="<?php $dauso = explode("/",explode("/dau-so-",$child->url)[1])[0]; echo trim($dauso);?>">
                        <?php echo $child->title;?>
					</li>
				<?php
				}
				?>
			</ul>
<?php } ?>