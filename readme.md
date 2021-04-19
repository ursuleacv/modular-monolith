# Structure

root-folder
    packages - source code for each package
        package-one
            vendor
            src
            composer.json
        package-two
            vendor
            src
            composer.json
    vendor
    composer.json - the main composer file
    index.php

PackageOne is loaded using composer path
PackageTwo is loaded using composer autoload

# Resources

https://fetzi.dev/developing-composer-packages-locally/

https://getcomposer.org/doc/05-repositories.md#path

# PHPStorm

To solve multiple definitions of a class in IDE:

Settings->PHP-> remove from Include Path the vendor libraries that are in the local package vendor 

https://youtrack.jetbrains.com/issue/WI-57392