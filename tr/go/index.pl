#!/usr/bin/perl

print 'Location: ' . &url_decode($ENV{'QUERY_STRING'}) . "\n\n";

sub url_decode {
    local $_ = defined $_[0] ? $_[0] : '';
    tr/+/ /;
    s/%([a-fA-F0-9][a-fA-F0-9])/pack 'C', hex $1;/eg;
    return $_;
}
