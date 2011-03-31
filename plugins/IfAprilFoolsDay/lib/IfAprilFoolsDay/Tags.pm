package IfAprilFoolsDay::Tags;

use strict;
use MT::Util qw( offset_time_list );

sub _hdlr_if_aprilfoolsday {
    my ( $ctx, $args, $cond ) = @_;
    my $t = time;
    my @ts = offset_time_list( $t, $ctx->stash( 'blog_id' ) );
    my $date = sprintf "%02d%02d", $ts[4]+1, @ts[3];
    if ( $date eq '0401' ) {
        return 1;
    } else {
        return 0;
    }
}

1;