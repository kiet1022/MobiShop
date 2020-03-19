 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_search_sim_form(); ?>
	<header class="entry-header">
		<h1 class="entry-title sim-title">Bán sim <?php the_title();?> - Sim <?=str_replace('.', '', get_the_title())?> giá rẻ</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="row my-3">
			<div class="col-md-12 vcenter text-center p-md-0">
			    <?php global $image; ?>
			    <img class="single-image" src="<?php echo $image;?>" alt="<?php the_title()?>">
			</div>

			<div class="col-md-12 vcenter sim-info mt-3">
				<table class="table table-bordered table-hover">
				<tr>
					<td>Sim số: </td>
					<td class="text-danger" style="font-size: 20px;"><?php the_title();?></td>
				</tr>
				<tr>
					<th>Giá bán: </th>
					<td>
						<?php
							$gia = getGia(get_the_ID());
							echo $gia;
						?>
					</td>
				</tr>
				<tr>
					<th>Nhà mạng: </th>
					<td>
					<?php
						global $nhaMang;
						echo ucfirst($nhaMang);
					?>
					</td>
				</tr>
				<tr>
					<th>Loại thuê bao: </th>
					<td>
					<?php
						$loaithuebao = get_post_field('loaithuebao', get_the_ID());
						
						if ($loaithuebao == 'tt') echo 'Trả trước';
						elseif ($loaithuebao == 'ts') echo 'Trả sau';
						else echo 'Không xác định';
					?>
					</td>
				</tr>

				<tr>
					<th>Ưu đãi khuyến mãi: </th>
					<td>
					<?php
							$goicuoc = get_post_field('goicuoc', get_the_ID());
						?>
						<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="<?php echo $goicuoc ?>" href="<?php echo home_url('/') . strtolower($goicuoc)?>"><?php echo $goicuoc ?> <span style="color: #c4161c;font-size: 15px">(Xem chi tiết)</span></a>
						
						<!-- <a data-toggle="modal" data-target="#modalGoiCuoc" title="<?php echo $goicuoc ?>" href="<?php echo home_url('/') . strtolower($goicuoc)?>"><?php echo $goicuoc ?> <span style="color: #c4161c;font-size: 15px">(Xem chi tiết)</span></a> -->
					</td>
				</tr>
				</table>
				<div class="collapse" id="collapseExample" style="font-weight: initial;">
							<div class="card card-body">
								<?php
									$page = get_page_by_path( strtolower($goicuoc) );
									echo get_the_content( null, false, $page );
								?>
							</div>
						</div>
			</div>
		</div>

		<?php
			global $post;
			$agencyID = $post->agency;
			$agencyName = getAgency($agencyID);
			echo do_shortcode('[contact-form-7 id="85"
				order_code="' . time() . '"
				title="Form liên hệ 1"
				order_number="' . get_the_title() . '"
				order_agency_id="' . $agencyID . '"
				order_agency_name="' . $agencyName . '"
				order_goi_cuoc="' . $goicuoc . '"
				order_mang="' . ucfirst($nhaMang) .'"
				order_price="' . $gia . '"]');
		?>
		<div class="row mb-2">
			<div class="col-12">
			    <?php if (!get_the_content()): ?>
    				Mua bán sim <?php the_title();?> giá rẻ giao hàng quốc. <br>
    				Sim <?=$nhaMang?> miễn phí giao sim tại <?php echo $_SERVER['SERVER_NAME']?> <br>
    				Sim số <?=str_replace('.', '', get_the_title())?> đăng ký thông tin sim chính chủ.
				<?php else: ?>
				    <?php the_content() ?>
				<?php endif; ?>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<!-- Link trigger modal -->

<!-- Default bootstrap modal example -->
<div class="modal fade" id="modalGoiCuoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php
            $page = get_page_by_path( strtolower($goicuoc) );
            echo get_the_content( null, false, $page );
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>