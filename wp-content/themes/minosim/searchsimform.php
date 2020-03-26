<form role="search" method="get" class="search-sim-form form-tim-sim">
  <div class="input-group">
    <input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Nhập số cần tìm hoặc thêm dấu * trước số cần tìm', 'placeholder' ) ?>" value="<?php echo get_search_sim_query() ?>" name="keyword" aria-describedby="search-form">
      <span class="input-group-append">
        <button type="submit" class="btn btn-primary" id="search-form"><?php echo esc_attr_x( 'Search', 'submit button' ) ?>
        </button>
      </span>
  </div>
  <div>
  </div>
</form>