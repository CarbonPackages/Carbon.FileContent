[![Latest Stable Version](https://poser.pugx.org/carbon/filecontent/v/stable)](https://packagist.org/packages/carbon/filecontent)
[![Total Downloads](https://poser.pugx.org/carbon/filecontent/downloads)](https://packagist.org/packages/carbon/filecontent)
[![License](https://poser.pugx.org/carbon/filecontent/license)](LICENSE)
[![GitHub forks](https://img.shields.io/github/forks/jonnitto/Carbon.FileContent.svg?style=social&label=Fork)](https://github.com/jonnitto/Carbon.FileContent/fork)
[![GitHub stars](https://img.shields.io/github/stars/jonnitto/Carbon.FileContent.svg?style=social&label=Stars)](https://github.com/jonnitto/Carbon.FileContent/stargazers)
[![GitHub watchers](https://img.shields.io/github/watchers/jonnitto/Carbon.FileContent.svg?style=social&label=Watch)](https://github.com/jonnitto/Carbon.FileContent/subscription)
[![GitHub followers](https://img.shields.io/github/followers/jonnitto.svg?style=social&label=Follow)](https://github.com/jonnitto/followers)
[![Follow Jon on Twitter](https://img.shields.io/twitter/follow/jonnitto.svg?style=social&label=Follow)](https://twitter.com/jonnitto)

Carbon.FileContent Package for Neos CMS
=======================================

Fusion Prototypes
-----------------

### [Carbon.FileContent:FileContent](Resources/Private/Fusion/FileContent.fusion)
This prototype read a file from a `path` or `resource`. Used for including the files inline.

### [Carbon.FileContent:HashOfFile](Resources/Private/Fusion/HashOfFile.fusion)
This prototype read a file from a `path` or `resource` and return a md5 based string.


Installation
------------
Most of the time you have to make small adjustments to a package (e.g., the configuration in `Settings.yaml`). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under `Packages/Sites/`. To install it correctly go to your theme package (e.g.`Packages/Sites/Foo.Bar`) and run following command:
```bash
composer require carbon/filecontent --no-update
```

The `--no-update` command prevent the automatic update of the dependencies. After the package was added to your theme `composer.json`, go back to the root of the Neos installation and run `composer update`. Et voilà! Your desired package is now installed correctly.


License
-------
Licensed under MIT, see [LICENSE](LICENSE)
