Development system setup
========================
(Using GRUNT and SASS)

If you've never run grunt on your system, chances are, you'll need to install
NODEJS
sudo apt-get install node

Grunt CLI
npm install -g grunt-cli

Ruby (needed for SASS)
sudo apt-get install ruby

SASS (as a ruby gem)
sudo su -c "gem install sass"

------------------------------

To start using this, go to development in terminal
and run (maybe with sudo) 
$ npm install
To use SASS you'll also have to run
$ npm install sass

and

$ npm install grunt-postcss pixrem autoprefixer cssnano