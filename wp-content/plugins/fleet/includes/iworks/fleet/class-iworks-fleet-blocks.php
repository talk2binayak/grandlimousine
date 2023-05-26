<?php

class iworks_fleet_blocks {

    private $fleet;
    private $options;


    public function __construct( $fleet ) {
        $this->fleet = $fleet;
		$this->options    = iworks_fleet_get_options_object();
		/**
		 * block
		 */
        add_action( 'init', array( $this, 'register_blocks' ) );
    }

	/**
	 * register blocs & blocs patterns
	 *
	 * @since 1.0.0
	 */
	public function register_blocks() {
		if ( ! function_exists( 'register_block_type' ) ) {
			// Block editor is not available.
			return;
		}
		register_block_type(
			'iworks-fleet/statistics',
			array(
				'title'           => __( 'Statistics', 'fleet' ),
				'category'        => 'fleet',
				'icon'            => 'money-alt',
				'description'     => __( 'Show statistics.', 'fleet' ),
				'keywords'        => array(
					__( 'statistics', 'fleet' ),
					__( 'table', 'fleet' ),
				),
				'textdomain'      => 'fleet',
				'attributes'      => array(
					'kind' => array(
						'type' => 'string',
						'enum' => array( 'all', 'this-month', 'this-year', 'last-7-days' ),
					),
				),
				'render_callback' => array( $this, 'render_callback_block_statistics' ),
				'style'           => $this->options->get_option_name( 'blocks-statistics' ),
				'editor_script'   => $this->options->get_option_name( 'admin-block-statistics' ),
			)
		);
		register_block_pattern(
			'fleet/statistics-pattern',
			array(
				'category'    => 'fleet',
				'title'       => __( 'Statistics with header', 'fleet' ),
				'description' => _x( 'Show statistics with header.', 'Block pattern description', 'fleet' ),
				'content'     => '<!-- wp:group --><div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading --><h2></h2><!-- /wp:heading --><!-- wp:fleet/statistics --><div data-kind="all" class="wp-block-fleet-statistics"></div><!-- /wp:fleet/statistics --></div></div><!-- /wp:group -->',
			)
		);
    }

	public function render_callback_block_statistics( $atts ) {
		$attr = wp_parse_args(
			$atts,
			array(
				'kind' => 'all',
			)
		);
		$args = array(
			'post_type'  => $this->post_type_name,
			'nopaging'   => true,
			'orderby'    => 'meta_value_num',
			'order'      => 'DESC',
			'meta_query' => array(
				array(
					'key'     => $this->options->get_option_name( 'details_date_start' ),
					'compare' => 'EXISTS',
				),
			),
		);
		switch ( $attr['kind'] ) {
			case 'this-month':
				$args['meta_query'] = array(
					array(
						'key'     => $this->options->get_option_name( 'details_date_start' ),
						'compare' => '>=',
						'value'   => strtotime( date( 'Y-m-01 00:00:00' ) ),
					),
				);
				break;
			case 'this-year':
				$args['meta_query'] = array(
					array(
						'key'     => $this->options->get_option_name( 'details_date_start' ),
						'compare' => '>=',
						'value'   => strtotime( date( 'Y-01-01 00:00:00' ) ),
					),
				);
				break;
			case 'last-7-days':
				$args['meta_query'] = array(
					array(
						'key'     => $this->options->get_option_name( 'details_date_start' ),
						'compare' => '>=',
						'value'   => strtotime( date( 'Y-m-d 00:00:00' ) ) - 7 * DAY_IN_SECONDS,
					),
				);
				break;
		}
		ob_start();
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			$this->load_template( 'build-a-house/block/statistics', 'table-header' );
			$i           = 1;
			$sum         = 0;
			$date_format = get_option( 'date_format' );
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$data = array(
					'i'          => $i++,
					'cost'       => intval( get_post_meta( get_the_ID(), $this->options->get_option_name( 'details_cost' ), true ) ),
					'date_start' => date_i18n( $date_format, get_post_meta( get_the_ID(), $this->options->get_option_name( 'details_date_start' ), true ) ),
					'date_end'   => date_i18n( $date_format, get_post_meta( get_the_ID(), $this->options->get_option_name( 'details_date_end' ), true ) ),
				);
				$sum += $data['cost'];
				$this->load_template( 'build-a-house/block/statistics', 'table-body-row', $data );
			}
			$this->load_template( 'build-a-house/block/statistics', 'table-footer', array( 'sum' => $sum ) );
		}
		wp_reset_postdata();
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
}
