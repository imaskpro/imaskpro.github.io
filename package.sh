rm ./Packages.bz2
dpkg-scanpackages -m ./debs > Packages
cp -f Packages Packages_old
bzip2 Packages
cp -f Packages_old Packages
git add .
git commit -m "zz"
git push origin main                
