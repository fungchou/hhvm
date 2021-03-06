<?php
/* Prototype: bool symlink ( string $target, string $link );
   Description: creates a symbolic link to the existing target with the specified name link

   Prototype: bool is_link ( string $filename );
   Description: Tells whether the given file is a symbolic link.

   Prototype: bool link ( string $target, string $link );
   Description: Create a hard link

   Prototype: int linkinfo ( string $path );
   Description: Gets information about a link
*/

/* Variation 2 : Create hard link to non-existent file */

$file_path = dirname(__FILE__);
// non-existing filename
$non_existent_file = "$file_path/non_existent_file_variation2.tmp";
// non-existing linkname
$non_existent_linkname = "$file_path/non_existent_linkname_variation2.tmp";

echo "*** Creating a hard link to a non-existent file ***\n";
// creating hard link to non_existent file
var_dump( link($non_existent_file, $non_existent_linkname) ); // expected false

// checking linkinfo() and is_link() on the link; expected: false
var_dump( linkinfo($non_existent_linkname) );
var_dump( is_link($non_existent_linkname) );

echo "Done\n";
?>
