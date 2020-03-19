<form id="form-loc-sim" role="search" method="get" class="loc-sim-form" action="">
    <table class="tab-sim">
    <input type="hidden" name="nhamang" <?php if (isset($_GET['nhamang'])): echo 'value="'.$_GET['nhamang'].'"'; endif;?>>
    <input type="hidden" name="loaisim" <?php if (isset($_GET['loaisim'])): echo 'value="'.$_GET['loaisim'].'"'; endif;?>>
    <input type="hidden" name="giatu" <?php if (isset($_GET['giatu'])): echo 'value="'.$_GET['giatu'].'"'; endif;?>>
    <input type="hidden" name="giaden" <?php if (isset($_GET['giaden'])): echo 'value="'.$_GET['giaden'].'"'; endif;?>>
    <input type="hidden" name="loaithuebao" <?php if (isset($_GET['loaithuebao'])): echo 'value="'.$_GET['loaithuebao'].'"'; endif;?>>
    <input type="hidden" name="goicuoc" <?php if (isset($_GET['goicuoi'])): echo 'value="'.$_GET['goicuoi'].'"'; endif;?>>
    <input type="hidden" name="sapxep" <?php if (isset($_GET['sapxep'])): echo 'value="'.$_GET['sapxep'].'"'; endif;?>>
        <tbody>
            <tr>
                <td class="locnhanh" colspan="5">
                    <ul>
                    <?php if (!get_post_meta(get_the_ID(), 'nhamang', true)):?>
                        <li>
                        <?php if (isset($_GET['nhamang'])): echo $_GET['nhamang']; else: echo 'Nhà mạng'; endif;?>
                            <ul id="loc-1">
                                <li class="locnhamang" data-value="">Tất cả các mạng</li>
                                <li class="locnhamang" data-value="viettel">Viettel</li>
                                <li class="locnhamang" data-value="vinaphone">Vinaphone</li>
                                <li class="locnhamang" data-value="mobifone">Mobifone</li>
                                <li class="locnhamang" data-value="vietnamobile">Vietnamobile</li>
                                <li class="locnhamang" data-value="gmobile">Gmobile</li>
                                <li class="locnhamang" data-value="itelecom">Itelecom</li>
                            </ul>
                        </li>
                    <?php endif;?>

                    <?php if (!get_post_meta(get_the_ID(), 'loaisim', true)):?>
                        <li>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == '' || !isset($_GET['loaisim'])): echo 'Loại sim'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tu-quy'): echo 'Tứ quý'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-luc-quy'): echo 'lục quý'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-ngu-quy'): echo 'Ngũ quý'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-loc-phat'): echo 'Lộc phát'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-than-tai'): echo 'Thần tài'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tien-don'): echo 'Tiến đơn'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-tien-doi'): echo 'Tiến đôi'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-hai'): echo 'Taxi 2'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-ba'): echo 'Taxi 3'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-taxi-bon'): echo 'Taxi 4'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-lap'): echo 'Sim lặp'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-kep'): echo 'Sim kép'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-doi'): echo 'Sim đối'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-ganh'): echo 'Sim gánh'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-dac-biet'): echo 'Sim đặc biệt'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'sim-nam-sinh'): echo 'Năm sinh'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'dau-so-co'): echo 'Đầu số cổ'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'tam-hoa-don'): echo 'Tam hoa đơn'; endif;?>
                        <?php if (isset($_GET['loaisim']) && $_GET['loaisim'] == 'tam-hoa-kep'): echo 'Tam hoa kép'; endif;?>
                            <ul id="locloaisim">
                                <li class="locloaisim" data-value="">Tất cả loại sim</li>
                                <li class="locloaisim" data-value="sim-tu-quy">Sim Tứ Quý</li>
                                <li class="locloaisim" data-value="sim-luc-quy">Sim Lục Quý</li>
                                <li class="locloaisim" data-value="sim-ngu-quy">Sim Ngũ Quý</li>
                                <li class="locloaisim" data-value="sim-loc-phat">Sim Lộc Phát</li>
                                <li class="locloaisim" data-value="sim-than-tai">Sim Thần Tài</li>
                                <li class="locloaisim" data-value="sim-ong-dia">Sim ông địa</li>
                                <li class="locloaisim" data-value="sim-tien-don">Sim tiến đơn</li>
                                <li class="locloaisim" data-value="sim-tien-doi">Sim Tiến đôi</li>
                                <li class="locloaisim" data-value="sim-taxi-hai">Sim Taxi 2</li>
                                <li class="locloaisim" data-value="sim-taxi-ba">Sim Taxi 3</li>
                                <li class="locloaisim" data-value="sim-taxi-bon">Sim Taxi 4</li>
                                <li class="locloaisim" data-value="sim-lap">Sim Lặp</li>
                                <li class="locloaisim" data-value="sim-kep">Sim kép</li>
                                <li class="locloaisim" data-value="sim-doi">Sim đối</li>
                                <li class="locloaisim" data-value="sim-dao">Sim Đảo</li>
                                <li class="locloaisim" data-value="sim-ganh">Sim gánh</li>
                                <li class="locloaisim" data-value="sim-dac-biet">Sim Đặc Biệt</li>
                                <li class="locloaisim" data-value="sim-nam-sinh">Sim Năm Sinh</li>
                                <li class="locloaisim" data-value="dau-so-co">Sim đầu số cổ</li>
                                <li class="locloaisim" data-value="tam-hoa-don">Sim tam Hoa Đơn</li>
                                <li class="locloaisim" data-value="tam-hoa-kep">Sim tam hoa kép </li>
                            </ul>
                        </li>
                    <?php endif;?>

                    <?php if (!get_post_meta(get_the_ID(), 'giatu', true) && !get_post_meta(get_the_ID(), 'giaden', true)):?>
                        <li>
                        <?php if (isset($_GET['giaden']) && $_GET['giaden'] == '500000'): echo 'Dưới 500k'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '500000' && $_GET['giaden'] == '1000000'): echo '500k - 1tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '1000000' && $_GET['giaden'] == '3000000'): echo '1-3tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '3000000' && $_GET['giaden'] == '5000000'): echo '3-5tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '5000000' && $_GET['giaden'] == '10000000'): echo '5-10tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '10000000' && $_GET['giaden'] == '20000000'): echo '10-20tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '20000000' && $_GET['giaden'] == '50000000'): echo '20-50tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '50000000' && $_GET['giaden'] == '100000000'): echo '50-100tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '100000000' && $_GET['giaden'] == '200000000'): echo '100-200tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '200000000' && $_GET['giaden'] == '500000000'): echo '200-500tr'; endif;?>
                        <?php if (isset($_GET['giatu']) && isset($_GET['giaden']) && $_GET['giatu'] == '500000000' && $_GET['giaden'] == '1000000000'): echo '500-1tỷ'; endif;?>
                        <?php if (isset($_GET['giatu']) && $_GET['giatu'] == '1000000000'): echo 'Trên 1tỷ'; endif;?>
                        <?php if ((!isset($_GET['giatu']) && !isset($_GET['giaden']))): echo 'Khoảng giá'; endif;?>
                            <ul>
                                <li class="lockhoanggia" data-value="">Tất cả mức giá</li>
                                <li class="lockhoanggia" data-value=",500000">Dưới 500k</li>
                                <li class="lockhoanggia" data-value="500000,1000000">500k - 1 triệu</li>
                                <li class="lockhoanggia" data-value="1000000,3000000">1 - 3 triệu</li>
                                <li class="lockhoanggia" data-value="3000000,5000000">3 - 5 triệu</li>
                                <li class="lockhoanggia" data-value="5000000,10000000">5 - 10 triệu</li>
                                <li class="lockhoanggia" data-value="10000000,20000000">10 - 20 triệu</li>
                                <li class="lockhoanggia" data-value="20000000,50000000">20 - 50 triệu</li>
                                <li class="lockhoanggia" data-value="50000000,100000000">50 - 100 triệu</li>
                                <li class="lockhoanggia" data-value="100000000,200000000">100 - 200 triệu</li>
                                <li class="lockhoanggia" data-value="200000000,500000000">200 - 500 triệu</li>
                                <li class="lockhoanggia" data-value="500000000,1000000000">500 triệu - 1 tỷ</li>
                                <li class="lockhoanggia" data-value="1000000000,">Trên 1 tỷ</li>
                            </ul>
                        </li>
                    <?php endif;?>
                        <li id="locthem">
                            Lọc thêm
                        </li>
                    </ul>
                </td>
            <tr class="locthem" <?php echo (!isset($_GET['loaithuebao']) && !isset($_GET['sapxep']) && !isset($_GET['goicuoc'])) ? 'style="display: none"' : 'style="display: table-row"'?>>
                <td class="locnhanh" colspan="5">
                    <ul>
                        <li>
                        <?php if((isset($_GET['loaithuebao']) && $_GET['loaithuebao'] == '') || !isset($_GET['loaithuebao'])):echo 'Thuê bao'; endif;?>
                        <?php if((isset($_GET['loaithuebao']) && $_GET['loaithuebao'] == 'tt')):echo 'Trả trước'; endif;?>
                        <?php if((isset($_GET['loaithuebao']) && $_GET['loaithuebao'] == 'ts')):echo 'Trả sau'; endif;?>
                            <ul id="loc-1">
                                <li class="locthuebao" data-value="">Tất cả thuê bao</li>
                                <li class="locthuebao" data-value="tt">Trả trước</li>
                                <li class="locthuebao" data-value="ts">Trả sau</li>
                            </ul>
                        </li>
                        <li>
                        <?php if(isset($_GET['goicuoc'])): echo $_GET['goicuoc']; else: echo 'Khuyến mãi'; endif;?>
                            <ul id="loc-1">
                            <li class="lockhuyenmai" data-value="">Tất cả gói cước</li>
                            <?php
                                global $wpdb;
                                $goicuoc = $wpdb->get_results("SELECT goicuoc FROM $wpdb->posts where post_type = 'sim' group by goicuoc", ARRAY_A);
                            ?>
                            <?php
                                foreach ($goicuoc as $key => $value) {
                                    // $selected = (isset($_GET['goicuoc']) && $_GET['goicuoc'] == strtolower($value['goicuoc'])) ? ' selected' : '';
                                    // echo '<option' . $selected . ' value="' . strtolower($value['goicuoc']) . '">' . $value['goicuoc'] . '</option>';
                                    echo '<li class="lockhuyenmai" data-value="'.strtolower($value['goicuoc']).'">'.strtolower($value['goicuoc']).'</li>';
                                }
                            ?>
                            
                            </ul>
                        </li>
                        <li>
                        <?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 1): echo 'Thấp đến cao'; endif;?>
                        <?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 2): echo 'Cao đến thấp'; endif;?>
                        <?php if (isset($_GET['sapxep']) && $_GET['sapxep'] == 3): echo 'Mới cập nhật'; endif;?>
                        <?php if ((isset($_GET['sapxep']) && $_GET['sapxep'] == '') || !isset($_GET['sapxep'])): echo 'Sắp xếp'; endif;?>
                            <ul>
                                <li class="sapxep" data-value="">Sắp xếp ngẫu nhiên</li>
                                <li class="sapxep" data-value="1">Giá thấp đến cao</li>
                                <li class="sapxep" data-value="2">Giá cao đến thấp</li>
                                <li class="sapxep" data-value="3">Số mới cập nhật</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</form>