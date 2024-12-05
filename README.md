# Cydia Repo
Cydia/Sileo repo for some tweaks: 

- [iMaskPro](/tweaks/NoAppThinning): disable AppStore app thinning (iOS 11-13)
- [iMaskProD](/tweaks/Runaway): show network speed in status bar (iOS 13+)

## Setup
- Compile a tweak with `make package FINALPACKAGE=1` and add it to `debs` folder
- Run `sh update.sh` to update the repository's packages
