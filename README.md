Virtual Sensitive web resources
=============

Resources list of Virtual Sensitive

#### Installation

    // Install composer : https://getcomposer.org/
    curl -sS https://getcomposer.org/installer | php
    
    // Install the vendors (Yaml parser)
    php composer.phar install

#### Edit

All the links are stored in the data/resources.yml file

Feel free to add, edit, remove some !

Be careful to respect the strict [Yaml][1] syntax

#### Style

    // Requires nodeJs and npm to be installed locally
    // Install gulp
    npm install -g gulp
    // Go into the assets folder
    cd assets
    // Install nodejs dependencies and bower components
    npm install & bower install
    // Launch gulp to watch the files and compile on-the-fly
    gulp
    // Edit the sass files to edit the CSS

[1]: http://en.wikipedia.org/wiki/YAML
