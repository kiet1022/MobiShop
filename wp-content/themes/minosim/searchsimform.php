<form id="form-tim-sim" role="search" method="get" class="search-sim-form">
  <div class="input-group">
    <input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Nhập số sim bạn cần tìm', 'placeholder' ) ?>" value="<?php echo get_search_sim_query() ?>" name="keyword" aria-describedby="search-form">
      <span class="input-group-append">
        <button type="submit" class="btn btn-primary" id="search-form"><?php echo esc_attr_x( 'Search', 'submit button' ) ?>
        </button>
      </span>
  </div>
  <div>
    <p class="mt-2" style="margin: 0;">Mẹo: Tìm sim số có đuôi <b>79</b> hãy nhâp <b>*79</b>, tìm sim có đầu 09 hãy nhập <b>09*</b>
    </p>
  </div>
</form>