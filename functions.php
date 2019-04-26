<?php
/**
  * Modifying Headers
  *
  * Add to your theme functions.php
*/
add_filter( 'pdf_template_table_headings','custom_pdf_template_table_headings' );
function custom_pdf_template_table_headings( $headers ) {
    $headers =  '<table class="shop_table orderdetails" width="100%">' .
    '<thead>' .
    '<tr><th colspan="7" align="left"><h2>' . esc_html__('Order Details', PDFLANGUAGE) . '</h2></th></tr>' .
    '<tr>' .
    '<th width="50%" valign="top" align="left">'  . __( 'Product', PDFLANGUAGE ) . '</th>' .
    '<th width="6%" valign="top" align="right">'.
    '<th width="12%" valign="top" align="right">' . __( 'Price', PDFLANGUAGE ) . '</th>' .
    '<th width="6%" valign="top" align="right">'.
    '<th width="12%" valign="top" align="right">'  . __( 'Quantity', PDFLANGUAGE ) . '</th>' .
    '<th width="14%" valign="top" align="right">' . __( 'Line Total', PDFLANGUAGE ) . '</th>' .
    '</tr>' .
    '</thead>' .
    '</table>';
    
    return $headers;
}

add_filter( 'pdf_template_line_output' , 'custom_pdf_template_line_output', 10, 2 );
function custom_pdf_template_line_output( $pdflines, $order_id ) {
    global $woocommerce;
    $order      = new WC_Order( $order_id );
    
    $order_currency = $pre_wc_30 ? $order->get_order_currency() : $order->get_currency();
    
    $pdflines  = '<table width="100%">';
    $pdflines .= '<tbody>';
    
    if ( sizeof( $order->get_items() ) > 0 ) :
        
        foreach ( $order->get_items() as $item ) {
            
            if ( $item['qty'] ) {
                
                $line = '';
                // $item_loop++;
                
                $_product     = $order->get_product_from_item( $item );
                $item_name     = $item['name'];
                $item_meta     = new WC_Order_Item_Meta( $item['item_meta'] );
                
                if ( $meta = $item_meta->display( true, true ) )
                    $item_name .= ' ( ' . $meta . ' )';
                
                $line =      '<tr>' .
                '<td valign="top" width="50%" align="left">' .  $item_name . '</td>' .
                '<th valign="top" width="6%" align="right">'.
                '<td valign="top" width="12%" align="right">' .  wc_price( ( $item['line_subtotal'] + $item['line_tax'] ) / $item['qty'], array( 'currency' => $order_currency ) ) . '</td>' .
                '<th valign="top" width="6%" align="right">'.
                '<td valign="top" width="12%" align="right">' . $item['qty'] . ' x</td>' .
                '<td valign="top" width="14%" align="right">' .  wc_price( $item['line_subtotal'] + $item['line_tax'], array( 'currency' => $order_currency ) ) . '</td>' .
                '</tr>' ;
                
                $pdflines .= $line;
            }
        }
    
    endif;
    
    $pdflines .=    '</tbody>';
    $pdflines .=    '</table>';
    
    return $pdflines;
}
/* Close Modifying Headers */
