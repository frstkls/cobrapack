# Kirby-Bootstrap-Starterkit

Personal starterkit for website projects made with **Kirby**, **Bootstrap-Sass** and **Gulp**. Install guide below.

### Requirements

1. git
2. npm
3. bower

It is not possible to just download this repository and run it locally: It includes Kirby as Git submodules. You need to manually add Kirby to this starterkit if just downloading. Also note that this repository is intended to be used with Git, Gulp & Co.

****

#### Buy a Kirby license

Don't forget that Kirby is not for free: Please support the Kirby project by buying a license when going live with a site.

http://getkirby.com/buy

****

## Cloning

Clone this repository **recursively**, as it includes Kirby as submodules:

    git clone --recursive https://github.com/NECKRHINOS/kirby-bootstrap-starterkit.git

Configure Git's ```.config``` file to your own needs, i. e. your own remote origin.

## Installing

    cd kirby-bootstrap-starterkit/

    npm install && bower install

## Running

    gulp

This task does the following:

- Copies (Bower) components into "assets"
- Creates minified asset and sourcemap files
- Creates minified stylesheet file from Scss files
- Does autoprefixing
- Runs Kirby locally

Editing Scss and PHP files (in "site") refreshes the browser.

## Updating

Updating Kirby:

    git submodule foreach --recursive git checkout master
    git submodule foreach --recursive git pull

Updating Bootstrap and jQuery:

    bower update --save

Updating node modules:

    npm update --save

## Kudos

Kudos to all good people mentioned in [humans.txt](https://github.com/NECKRHINOS/kirby-bootstrap-starterkit/blob/master/humans.txt)
