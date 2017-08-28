If you've never run grunt on your system, chances are, you'll need to install
NODEJS
sudo apt-get install node

Grunt CLI
npm install -g grunt-cli

Ruby
sudo apt-get install ruby

SASS (as a ruby gem)
sudo su -c "gem install sass"

------------------------------

To start using this, go to development in terminal
and run 
$ npm install
To use SASS you'll also have to run
$ npm install sass

and

$ npm install grunt-postcss pixrem autoprefixer cssnano

This project is using Grunt as builder.
In future, I'am planning to transport it to webpack

Don't forget to copy the 'hidden' .gitignore file
