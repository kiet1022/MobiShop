<?php
/**
 * Template Name: Danh sách sim
 *
 * @package MinoSim
 */
$keyword = get_query_var('keyword');
if ($keyword) {
    function filter_wpseo_canonical($canonical) {
        global $keyword;
        return $canonical . $keyword . '/';
    }
    add_filter( 'wpseo_canonical', 'filter_wpseo_canonical', 10, 1 );
    add_filter( 'wpseo_opengraph_url', 'filter_wpseo_canonical', 10, 1 );

    function filter_wpseo_title($title) {
        global $keyword;
        if ($keyword) {
            $title = 'Tìm sim ' . $keyword . ' - Sim số ' . $keyword . ' giá rẻ';
        }
        return $title;
    }
    add_filter( 'wpseo_title', 'filter_wpseo_title', 10, 1 );

    function filter_wpseo_metadesc($desc) {
        global $keyword;
        if ($keyword) {
            $desc = 'Tìm sim ' . $keyword . ' - Sim số ' . $keyword . ' giá rẻ';
        }
        return $desc;
    }
    add_filter( 'wpseo_metadesc', 'filter_wpseo_metadesc', 10, 1 );
}

get_header();

?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 order-md-2">
                <main id="main" class="site-main p-2 bg-white" role="main" >
                    <?php 
                        $getLoaiSim = isset($_GET['loaisim']) ? $_GET['loaisim'] : get_post_meta(get_the_ID(), 'loaisim', true );
                        $getNhaMang = isset($_GET['nhamang']) ? $_GET['nhamang'] : get_post_meta(get_the_ID(), 'nhamang', true );
                        $dauso = isset($_GET['dauso']) ? $_GET['dauso'] : get_post_meta(get_the_ID(), 'dauso', true );
                        $getGoiCuoc = isset($_GET['goicuoc']) ? $_GET['goicuoc'] : get_post_meta(get_the_ID(), 'goicuoc', true );
                        $duoiso = isset($_GET['duoiso']) ? $_GET['duoiso'] : get_post_meta(get_the_ID(), 'duoiso', true );
                        $namsinh = isset($_GET['namsinh']) ? $_GET['namsinh'] : '';
                        $ngaysinh = isset($_GET['ngaysinh']) ? $_GET['ngaysinh'] : '';
                    ?>

                    <!-- Show search sim form  -->
                    <?php get_search_sim_form(); ?>
                    <!-- Show slider  -->
                    <?php masterslider(1); ?>
                    <!-- Show cac menu con  -->
                    <?php get_type_sim($getLoaiSim, $getNhaMang, $dauso); ?>
                    <!-- Show menu nam sinh  -->
                    <?php 
                        if(strlen($duoiso) >= 4 && $getLoaiSim == SIM_NAM_SINH) {
                            get_menu_nam_sinh($duoiso);
                        } else if ($namsinh != '') {
                            get_menu_nam_sinh($namsinh);
                        } ?>
                    
                    <?php if (!is_front_page()):
                        $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    ?>
                        <header class="entry-header">
                            <h1 class="entry-title">
                            <?php
                                if ($dauso) {
                                    the_title(); echo " đầu số $dauso"; 
                                } else {
                                    the_title();
                                }
                            ?>
                            </h1>
                        </header><!-- .entry-header -->
                    <?php else:
                        $page = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
                    ?>
                    <?php endif; ?>

                    <?php get_filter_sim_form($getGoiCuoc); ?>
                    <?php
                    $args = array(
                        'post_type' => 'sim',
                        'post_status' => 'publish',
                        'paged' => $page,
                        'update_post_term_cache' => false,
                        'update_post_meta_cache' => false,
                        'cache_results'          => false,
                        'posts_per_page' => 50
                    );

                    $query = '';

                    $keyword = $keyword ? $keyword : get_post_meta(get_the_ID(), 'keyword', true );
                    if ($keyword) {
                        if (strpos($keyword, '*') !== false) {
                            $keyword = str_replace('*', '%', $keyword);
                        } else {
                            $keyword = '%' . $keyword . '%';
                        }
                        $query .= " AND simso LIKE '$keyword'";
                    }

                    
                    global $loaiSim;
                    if ($getLoaiSim && isset($loaiSim[$getLoaiSim]) && !isset($_GET['ngaysinh'])) {
                        if (is_array($loaiSim[$getLoaiSim])) {
                            $query .= " AND (" . join(" AND ", $loaiSim[$getLoaiSim]) . ")";
                        } else {
                            $query .= " AND (" . $loaiSim[$getLoaiSim] . ")";
                        }
                    }

                    $getLoaiThueBao = isset($_GET['loaithuebao']) ? $_GET['loaithuebao'] : get_post_meta(get_the_ID(), 'loaithuebao', true );
                    if ($getLoaiThueBao) {
                        $query .= " AND loaithuebao = '$getLoaiThueBao'";
                    }

                    
                    if ($getGoiCuoc) {
                        $query .= " AND goicuoc = '$getGoiCuoc'";
                    }

                    
                    global $nhaMang;
                    if (isset($getNhaMang) && isset($nhaMang[$getNhaMang])) {
                        $query .= " AND (" . $nhaMang[$getNhaMang] . ")";
                    }

                    
                    if ($dauso) {
                        $len = strlen($dauso);
                        $query .= " AND (LEFT(`simso`, $len) = $dauso)";
                    }

                    
                    if ($duoiso) {
                        $len = strlen($duoiso);
                        $query .= " AND (RIGHT(`simso`, $len) = $duoiso)";
                    }
                    
                    $giaTu = isset($_GET['giatu']) ? $_GET['giatu'] : get_post_meta(get_the_ID(), 'giatu', true );
                    $giaDen = isset($_GET['giaden']) ? $_GET['giaden'] : get_post_meta(get_the_ID(), 'giaden', true );

                    if (isset($giaTu) || isset($giaDen)) {
                        if ($giaTu) {
                            $query .= " AND price >= $giaTu";
                        }
                        if ($giaDen) {
                            $query .= " AND price <= $giaDen";
                        }
                    }
                    if (isset($_GET['sapxep'])) {
                        $sapxep = $_GET['sapxep'];
                        if ($sapxep == 1) {
                            $order   = 'ASC';
							$query .= " ORDER BY wpsim_posts.price $order";
                        } elseif($sapxep == 2) {
                            $order   = 'DESC';
							$query .= " ORDER BY wpsim_posts.price $order";
                        } elseif($sapxep == 3) {
							$query .= " ORDER BY wpsim_posts.post_date DESC";
						}
                        $args['orderby'] = 'none';
                    }

                    if ($query) {
                        $args['timsim'] = $query;
                    }
                    
                    $wp_query = new WP_Query( $args );
                    // var_dump($query);
                    if ( $wp_query->have_posts() ) :
                    ?>
                        <table class="table table-striped table-bordered table-hover text-center" style="margin-bottom: 7px;">
                            <thead>
                                <tr>
                                    <!-- <th class="d-none d-md-table-cell"></th> -->
                                    <th>Số sim</th>
									<th class="d-md-table-cell"><span class="d-none d-md-inline">Nhà </span>Mạng</th>
                                    <th>Giá bán</th>
                                    <th class="d-none d-md-table-cell">Loại sim</th>
									<th><span class="d-none d-md-inline">Đặt </span>Mua</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        /* Start the Loop */
                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                            get_template_part( 'template-parts/content', 'sim' );

                        endwhile;

                    ?>
                            </tbody>
                        </table>
                    <?php
                        wpbs_pagination();
                    else :

                        get_template_part( 'template-parts/single-sim', 'none' );

                    endif; ?>
                    <?php
                        // wp_reset_postdata();
                        // wp_reset_query();
                        // while ( have_posts() ) : the_post();
                        //     the_content();
                        // endwhile;
                    ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        <?php
            get_sidebar('right');
        ?>
<?php
get_footer();
