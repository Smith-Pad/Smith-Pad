# update-to-export-branch.sh

git clone https://github.com/Smith-Pad/Smith-Pad/
cd Smith-Pad
git checkout shell-export-to-compile-branch
cd ../EXPORT-TO-COMPILE-TESTS
cp -R * ../Smith-Pad
cd Smith-Pad
git add *
git commit -m "Updated from branch: [Smith-Pad-OS-Shell]"