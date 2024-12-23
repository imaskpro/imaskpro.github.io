#!/bin/bash

# Input file containing the packages information
PACKAGES_FILE="ORG_Packages"
# Output file with modified packages information
OUTPUT_FILE="Packages"

# Process each package block
gawk 'BEGIN { RS="\n\n"; FS="\n"; ORS="\n" } {
  # Initialize variables
  name=""; version=""; author=""; arch=""; desc=""; depends=""; maintainer=""; section=""; icon="";

  # Process each line of the package block
  for (i = 1; i <= NF; i++) {
  
    if ($i ~ /^Package: /) Package_ = substr($i, 10);
    else if ($i ~ /^Name: /) name = substr($i, 7);
    else if ($i ~ /^Version: /) version = substr($i, 10);
    else if ($i ~ /^Author: /) author = substr($i, 9);
    else if ($i ~ /^Architecture: /) arch = substr($i, 15);
    else if ($i ~ /^Description: /) desc = substr($i, 13);
    else if ($i ~ /^Depends: /) depends = substr($i, 10);
    else if ($i ~ /^Maintainer: /) maintainer = "Maintainer: fn";
    else if ($i ~ /^Section: /) section = "Section: Tweaks";
    
    else if ($i ~ /^Installed-Size: /) InstalledSize_ = substr($i, 17);
    else if ($i ~ /^Size: /) Size_ = substr($i, 7);
    else if ($i ~ /^Filename: /) Filename_ = substr($i, 11);
    else if ($i ~ /^MD5sum: /) MD5sum_ = substr($i, 9);
    else if ($i ~ /^SHA1: /) SHA1_ = substr($i, 7);
    else if ($i ~ /^SHA256: /) SHA256_ = substr($i, 9);
    
    else if ($i ~ /^Icon: /) icon = "";  # Skip the Icon line
  }

  # Output the modified package block
  if (name && version) {
    # Add a newline before the Name line and print it
    print "\nPackage: " Package_;
    print "Name: " name;
    print "Version: " version;
    print "Author: " author;
    print "Architecture: " arch;
    print "Description: " desc;
    print "Depends: " depends;


    print "Installed-Size: " InstalledSize_;
    print "Size: " Size_;
    print "Filename: " Filename_;
    print "MD5sum: " MD5sum_;
    print "SHA1: " SHA1_;
    print "SHA256: " SHA256_;


    # Replace spaces with underscores in Name, Version, and Architecture for Depiction and SileoDepiction
    dep_name = gensub(/ /, "_", "g", name);
    dep_version = gensub(/ /, "_", "g", version);
    dep_arch = gensub(/ /, "_", "g", arch);

    # Print the first SileoDepiction as Depiction
    print "Depiction: https://kiiimrepo.com/SileoDepic.php?info=" dep_name "_" dep_version "_" dep_arch;
    
    # Print the second SileoDepiction as SileoDepiction
    print "Sileodepiction: https://kiiimrepo.com/SileoDepic.php?info=" dep_name "_" dep_version "_" dep_arch;
    
    print maintainer;
    print section;
  }
}' "$PACKAGES_FILE" > "$OUTPUT_FILE"

# Inform the user
echo "Packages_ file has been created with the necessary modifications."

