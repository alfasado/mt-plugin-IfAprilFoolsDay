<?php
function smarty_block_mtifaprilfool ( $args, $content, $ctx, $repeat ) {
    require_once( "block.mtifaprilfoolsday.php" );
    return smarty_block_mtifaprilfoolsday( $args, $content, $ctx, $repeat );
}
?>