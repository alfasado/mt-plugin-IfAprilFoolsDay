<?php
function smarty_block_mtifaprilfoolsday ( $args, $content, $ctx, $repeat ) {
    require_once( "MTUtil.php" );
    $t = time();
    $ts = offset_time_list( $t, $ctx->stash( 'blog' ) );
    $date = sprintf( "%02d%02d", $ts[4]+1, $ts[3] ) ;
    if ( $date == '0401' ) {
        return $ctx->_hdlr_if( $args, $content, $ctx, $repeat, TRUE );
    } else {
        return $ctx->_hdlr_if( $args, $content, $ctx, $repeat, FALSE );
    }
}
?>