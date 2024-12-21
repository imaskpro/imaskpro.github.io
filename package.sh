#!/bin/bash

# Remove existing compressed Packages file
#rm -f ./Packages.bz2

# Scan deb files and generate Packages file
#dpkg-scanpackages -m ./debs > Packages


rm Packages Packages.bz2
dpkg-scanpackages -m ./debs > ORG_Packages
./CreatPackagesShort.sh
./CreatSileoDepicInfo.sh
#bzip2 -fks Packages


# Backup Packages file
#cp -f Packages Packages_old


# Compress the Packages file
bzip2 -k Packages  # Use -k to keep the original Packages file intact

# Calculate MD5 checksums and file sizes dynamically
PACKAGES_MD5=$(md5sum Packages | awk '{print $1}')
PACKAGES_SIZE=$(stat --format="%s" Packages)

PACKAGES_BZ2_MD5=$(md5sum Packages.bz2 | awk '{print $1}')
PACKAGES_BZ2_SIZE=$(stat --format="%s" Packages.bz2)

# Create or overwrite the Release file
cat <<EOL > Release
Origin: A Kiiim Repo 🔥🔥🔥🔥🔥
Label: A Kiiim Repo 🔥🔥🔥🔥🔥
Suite: stable
Version: 1.0
Codename: ios
Architectures: iphoneos-arm iphoneos-arm64 iphoneos-arm64e
Components: main
Description: A Kiiim Repo 🔥🔥🔥🔥🔥
MD5Sum:
 $PACKAGES_MD5 $PACKAGES_SIZE Packages
 $PACKAGES_BZ2_MD5 $PACKAGES_BZ2_SIZE Packages.bz2
EOL

# # Commit and push changes to the repository
# git add .
# git commit -m "Updated Packages metadata"
# git push origin main
