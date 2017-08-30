#! /usr/bin/env bash

# Compile Pattern Lab.
cd vendor/phase2/pattern-lab-starter
npm install
npm run setup
npm run compile

# Symlink the bits we need into the Grav theme.
cd ../../../
rm -rf ./app/user/themes/gravpl/fonts
rm -rf ./app/user/themes/gravpl/dest
rm -rf ./app/user/themes/gravpl/templates/_patterns
cp -r vendor/phase2/pattern-lab-starter/fonts ./app/user/themes/gravpl/fonts || true
cp -r vendor/phase2/pattern-lab-starter/dest ./app/user/themes/gravpl/dest || true
cp -r vendor/phase2/pattern-lab-starter/source/_patterns ./app/user/themes/gravpl/templates/_patterns || true
