#! /usr/bin/env bash

# Compile Pattern Lab.
cd vendor/phase2/pattern-lab-starter
npm install
npm run compile

# Symlink the bits we need into the Grav theme.
cd ../../../
ln -s vendor/phase2/pattern-lab-starter/fonts app/user/themes/gravpl/fonts
ln -s vendor/phase2/pattern-lab-starter/dest app/user/themes/gravpl/dest
ln -s vendor/phase2/pattern-lab-starter/source/_patterns app/user/themes/gravpl/templates/_patterns
