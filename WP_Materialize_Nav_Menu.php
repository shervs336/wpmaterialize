<?php

class WP_Materialize_Nav_Menu extends Walker_Nav_Menu {
  	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		//$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}
  
  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $output .= "\n$indent<li role=\"link\" class=\"link\">\n";
    $output .= $item->title;
    print_r($item);
  }
  
  public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output .= "\n$indent</li>\n";
	}
  
  public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = str_repeat( "\t", $depth );
    //$output .= "\n$indent</ul>\n";
  }
}
