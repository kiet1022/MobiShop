<form id="form-loc-sim" role="search" method="get" class="loc-sim-form" action="">
    <div class="row text-center">
        <?php
            $class = (get_post_meta(get_the_ID(), 'nhamang', true)
                || get_post_meta(get_the_ID(), 'giatu', true)
                || get_post_meta(get_the_ID(), 'loaisim', true)
                || get_post_meta(get_the_ID(), 'giaden', true))
                ? 'col-md-6 col-xs-6 col-sm-6 col-6'
                : 'col-md-4 col-xs-4 col-sm-4 col-4';
        ?>
        <?php if (!get_post_meta(get_the_ID(), 'nhamang', true)):?>
            <div class="<?=$class?> pr-0 mb-1 mb-md-0">
                <select class="form-control" name="nhamang">
                    <option value="">Chọn mạng</option>
                    <option value="viettel"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'viettel'): echo ' selected'; endif;?>>Viettel</option>
                    <option value="vinaphone"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'vinaphone'): echo ' selected'; endif;?>>Vinaphone</option>
                    <option value="mobifone"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'mobifone'): echo ' selected'; endif;?>>Mobifone</option>
                    <option value="vietnamobile"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'vietnamobile'): echo ' selected'; endif;?>>Vietnamobile</option>
                    <option value="gmobile"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'gmobile'): echo ' selected'; endif;?>>Gmobile</option>
                    <option value="itelecom"<?php if (isset($_GET['nhamang']) && $_GET['nhamang'] == 'itelecom'): echo ' selected'; endif;?>>iTelecom</option>
                </select>
            </div>
        <?php endif;?>
        <?php if (!get_post_meta(get_the_ID(), 'loaisim', true)):?>
            <div class="<?=$class?> <?php if (get_post_meta(get_the_ID(), 'nhamang', true)):?>pr-md-1<?php else: ?>px-0<?php endif?> mb-1 mb-md-0">
                <select name="loaisim" class="form-control" id="loaisim"<?php if (get_post_meta(get_the_ID(), 'giatu', true) || get_post_meta(get_the_ID(), 'giaden', true)):?> style="width: calc(100% - 65px); float: left;"<?php endif;?>>
                    <option value="">Chọn loại sim</option>
                    <option value="sim-tu-quy" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tu-quy' ) ? 'selected' : '' ?>>Sim Tứ Quý</option>
                    <option value="sim-luc-quy" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-luc-quy' ) ? 'selected' : '' ?>>Sim Lục Quý</option>
                    <option value="sim-ngu-quy" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-ngu-quy' ) ? 'selected' : '' ?>>Sim Ngũ Quý</option>
                    <option value="sim-loc-phat" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-loc-phat' ) ? 'selected' : '' ?>>Sim Lộc Phát</option>
                    <option value="sim-than-tai" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-than-tai' ) ? 'selected' : '' ?>>Sim Thần Tài</option>
                    <option value="sim-ong-dia" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-ong-dia' ) ? 'selected' : '' ?>>Sim ông địa</option>
                    <option value="sim-tien-don" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tien-don' ) ? 'selected' : '' ?>>Sim tiến đơn</option>
                    <option value="sim-tien-doi" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tien-doi' ) ? 'selected' : '' ?>>Sim Tiến đôi</option>
                    <option value="sim-taxi-hai" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-hai' ) ? 'selected' : '' ?>>Sim Taxi 2</option>
                    <option value="sim-taxi-ba" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-ba' ) ? 'selected' : '' ?>>Sim Taxi 3</option>
                    <option value="sim-taxi-bon" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-bon' ) ? 'selected' : '' ?>>Sim Taxi 4</option>
                    <option value="sim-lap" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-lap' ) ? 'selected' : '' ?>>Sim Lặp</option>
                    <option value="sim-kep" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-kep' ) ? 'selected' : '' ?>>Sim kép</option>
                    <option value="sim-doi" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-doi' ) ? 'selected' : '' ?>>Sim đối</option>
                    <option value="sim-dao" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-dao' ) ? 'selected' : '' ?>>Sim Đảo</option>
                    <option value="sim-ganh" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-ganh' ) ? 'selected' : '' ?>>Sim gánh</option>
                    <option value="sim-dac-biet" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-dac-biet' ) ? 'selected' : '' ?>>Sim Đặc Biệt</option>
                    <option value="sim-nam-sinh" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-nam-sinh' ) ? 'selected' : '' ?>>Sim Năm Sinh</option>
                    <option value="dau-so-co" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'dau-so-co' ) ? 'selected' : '' ?>>Sim đầu số cổ</option>
                    <option value="tam-hoa-don" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'tam-hoa-don' ) ? 'selected' : '' ?>>Sim tam Hoa Đơn</option>
                    <option value="tam-hoa-kep" <?php echo (isset($_GET['loaisim']) && $_GET['loaisim'] == 'tam-hoa-kep' ) ? 'selected' : '' ?>>Sim tam Hoa Kép</option>
                </select>
				<?php if (get_post_meta(get_the_ID(), 'giatu', true) || get_post_meta(get_the_ID(), 'giaden', true)):?>
					<button type="button" class="btn btn-primary" id="loc-them"><svg style="width: 18px;fill:#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.9 321.9" style="enable-background:new 0 0 321.9 321.9;" xml:space="preserve"> <g> <g> <g> <path d="M128.25,175.6c1.7,1.8,2.7,4.1,2.7,6.6v139.7l60-51.3v-88.4c0-2.5,1-4.8,2.7-6.6L295.15,65H26.75L128.25,175.6z"/> <rect x="13.95" y="0" width="294" height="45"/> </g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></button>
				<?php endif;?>
            </div>
        <?php endif;?>
        <?php if (!get_post_meta(get_the_ID(), 'giatu', true) && !get_post_meta(get_the_ID(), 'giaden', true)):?>
            <div class="<?=$class?> pl-0 mb-1 mb-md-0">
                <select class="form-control" id="gia" style="width: calc(100% - 50px);">
                    <option value="">Chọn khoảng giá</option>
                    <option value=",500000"<?php if (isset($_GET['giaden']) && $_GET['giaden'] == '500000'): echo ' selected'; endif;?>>Dưới 500k</option>
                    <option value="500000,1000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '500000' && $_GET['giaden'] == '1000000'): echo ' selected'; endif;?>>500k - 1 triệu</option>
                    <option value="1000000,3000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '1000000' && $_GET['giaden'] == '3000000'): echo ' selected'; endif;?>>1 - 3 triệu</option>
                    <option value="3000000,5000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '3000000' && $_GET['giaden'] == '5000000'): echo ' selected'; endif;?>>3 - 5 triệu</option>
                    <option value="5000000,10000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '5000000' && $_GET['giaden'] == '10000000'): echo ' selected'; endif;?>>5 - 10 triệu</option>
                    <option value="10000000,20000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '10000000' && $_GET['giaden'] == '20000000'): echo ' selected'; endif;?>>10 - 20 triệu</option>
                    <option value="20000000,50000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '20000000' && $_GET['giaden'] == '50000000'): echo ' selected'; endif;?>>20 - 50 triệu</option>
                    <option value="50000000,100000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '50000000' && $_GET['giaden'] == '100000000'): echo ' selected'; endif;?>>50 - 100 triệu</option>
                    <option value="100000000,200000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '100000000' && $_GET['giaden'] == '200000000'): echo ' selected'; endif;?>>100 - 200 triệu</option>
                    <option value="200000000,500000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '200000000' && $_GET['giaden'] == '500000000'): echo ' selected'; endif;?>>200 - 500 triệu</option>
                    <option value="500000000,1000000000"<?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '500000000' && $_GET['giaden'] == '1000000000'): echo ' selected'; endif;?>>500 triệu - 1 tỷ</option>
                    <option value="1000000000,"<?php if (isset($_GET['giatu']) && $_GET['giatu'] == '1000000000'): echo ' selected'; endif;?>>Trên 1 tỷ</option>
                </select>
				<button type="button" class="btn btn-primary" id="loc-them" style="width: 50px;"><svg style="width: 18px;fill:#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.9 321.9" style="enable-background:new 0 0 321.9 321.9;" xml:space="preserve"> <g> <g> <g> <path d="M128.25,175.6c1.7,1.8,2.7,4.1,2.7,6.6v139.7l60-51.3v-88.4c0-2.5,1-4.8,2.7-6.6L295.15,65H26.75L128.25,175.6z"/> <rect x="13.95" y="0" width="294" height="45"/> </g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></button>
            </div>
        <?php endif;?>
        
    </div>

    <div class="row mt-2 loc-them text-center" <?php echo (!isset($_GET['loaithuebao']) && !isset($_GET['sapxep']) && !isset($_GET['goicuoc'])) ? 'style="display: none"' : ''?> >
        <div class="col-md-4 col-4 pr-0 mb-1 mb-md-0">
            <select class="form-control" name="loaithuebao">
                <option value="">Chọn thuê bao</option>
                <option value="tt" <?php echo (isset($_GET['loaithuebao']) && $_GET['loaithuebao'] == 'tt' ) ? 'selected' : '' ?>>Trả trước</option>
                <option value="ts" <?php echo (isset($_GET['loaithuebao']) && $_GET['loaithuebao'] == 'ts' ) ? 'selected' : '' ?>>Trả sau</option>
            </select>
        </div>
        <div class="col-md-4 col-4 px-0 mb-1 mb-md-0">
            <?php
                global $wpdb;
                $goicuoc = $wpdb->get_results("SELECT goicuoc FROM $wpdb->posts where post_type = 'sim' group by goicuoc", ARRAY_A);
            ?>
            <select class="form-control" name="goicuoc">
                <option value="">Chọn khuyến mại</option>
                <?php
                    foreach ($goicuoc as $key => $value) {
                        $selected = (isset($_GET['goicuoc']) && $_GET['goicuoc'] == strtolower($value['goicuoc'])) ? ' selected' : '';
                        echo '<option' . $selected . ' value="' . strtolower($value['goicuoc']) . '">' . $value['goicuoc'] . '</option>';
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4 col-4 pl-0">
            <select class="form-control" name="sapxep">
                <option value="">Sắp xếp</option>
                <option value="1"<?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 1): echo ' selected'; endif;?>>Giá thấp đến cao</option>
                <option value="2" <?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 2): echo ' selected'; endif;?>>Giá cao đến thấp</option>
				<option value="3" <?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 3): echo ' selected'; endif;?>>Số mới cập nhật</option>
            </select>
        </div>
    </div>
</form>