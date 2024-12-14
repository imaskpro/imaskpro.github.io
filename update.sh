#!/bin/bash

# Remove old package files
rm -f Packages Packages.bz2 Packages.gz

# Generate a new Packages file
dpkg-scanpackages -m ./debs > Packages

# Compress the Packages file into .bz2 and .gz formats
bzip2 -fks Packages  # Create Packages.bz2
gzip -fk Packages    # Create Packages.gz

echo "Packages, Packages.bz2, and Packages.gz have been generated successfully."
