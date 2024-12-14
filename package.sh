#!/bin/bash

# Remove existing compressed Packages file
rm -f ./Packages.bz2

# Scan deb files and generate Packages file
dpkg-scanpackages -m ./debs > Packages

# Backup Packages file
cp -f Packages Packages_old

# Add metadata to Packages file
cat <<EOL >> Packages
Origin: FrankyNouva
Label: FrankyNouva
Suite: stable
Version: 1.0
Codename: ios
Architectures: iphoneos-arm iphoneos-arm64 iphoneos-arm64e
Components: main
Description: FrankyNouva - iOS Remote Tweaks
EOL

# Compress the Packages file
bzip2 Packages

# Calculate MD5 checksums and append to metadata
{
  echo "MD5Sum:"
  md5sum Packages.bz2 | awk '{printf " %s %d Packages.bz2\n", $1, $2}'
  md5sum Packages_old | awk '{printf " %s %d Packages\n", $1, $2}'
} >> Packages

# Restore the original uncompressed Packages file
cp -f Packages_old Packages

# Commit and push changes to the repository
git add .
git commit -m "Updated Packages metadata"
git push origin main
