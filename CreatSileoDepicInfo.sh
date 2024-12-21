#!/bin/bash

# Input file containing the packages information
PACKAGES_FILE="Packages"
# Output JSON file
OUTPUT_FILE="SileoDepicInfo.json"

# Start the JSON object
echo "{" > "$OUTPUT_FILE"

# Process each package block
gawk 'BEGIN { RS="\n\n"; FS="\n"; ORS="" } {
  name=""; version=""; author=""; arch=""; desc=""; depends="";
  for (i = 1; i <= NF; i++) {
    if ($i ~ /^Name: /) name = substr($i, 7);
    else if ($i ~ /^Version: /) version = substr($i, 10);
    else if ($i ~ /^Author: /) {
      author = substr($i, 9);
      gsub(/ <.*>$/, "", author);  # Remove any email in < >
    }
    else if ($i ~ /^Architecture: /) arch = substr($i, 15);
    else if ($i ~ /^Description: /) desc = substr($i, 13);
    else if ($i ~ /^Depends: /) depends = substr($i, 10);
  }
  if (name && version && arch) {
    key = name "_" version "_" arch;  # New key format: Name_Version_Architecture
    gsub(/ /, "", key); # Remove spaces from key
    printf "  \"%s\": \"%s|%s|%s|%s|%s|%s\",\n", key, name, version, author, arch, desc, depends;
  }
}' "$PACKAGES_FILE" >> "$OUTPUT_FILE"

# Remove the last comma and close the JSON object
sed -i '' -e '$ s/,$//' "$OUTPUT_FILE"
echo "}" >> "$OUTPUT_FILE"

# Inform the user
echo "packages.json has been created."

