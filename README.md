[![Latest Stable Version](https://poser.pugx.org/carbon/filecontent/v/stable)](https://packagist.org/packages/carbon/filecontent)
[![Total Downloads](https://poser.pugx.org/carbon/filecontent/downloads)](https://packagist.org/packages/carbon/filecontent)
[![License](https://poser.pugx.org/carbon/filecontent/license)](LICENSE)
[![GitHub forks](https://img.shields.io/github/forks/CarbonPackages/Carbon.FileContent.svg?style=social&label=Fork)](https://github.com/CarbonPackages/Carbon.FileContent/fork)
[![GitHub stars](https://img.shields.io/github/stars/CarbonPackages/Carbon.FileContent.svg?style=social&label=Stars)](https://github.com/CarbonPackages/Carbon.FileContent/stargazers)
[![GitHub watchers](https://img.shields.io/github/watchers/CarbonPackages/Carbon.FileContent.svg?style=social&label=Watch)](https://github.com/CarbonPackages/Carbon.FileContent/subscription)

# Carbon.FileContent Package for Neos CMS

**Deprecated. Please use [Carbon.Eel](https://github.com/CarbonPackages/Carbon.Eel#filecontent-helper)**

| Version | Neos        |
| ------- | ----------- |
| 0.5\*   | 2.\*        |
| > 1.1   | 3.\* + 4.\* |

## Fusion Prototypes

### [Carbon.FileContent:FileContent](Resources/Private/Fusion/FileContent.fusion)

This prototype read a file from a `path` or `resource`. Used for including the files inline.

### [Carbon.FileContent:HashOfFile](Resources/Private/Fusion/HashOfFile.fusion)

This prototype read a file from a `path` or `resource` and return a md5 based string.

## Installation

Most of the time you have to make small adjustments to a package (e.g., the configuration in `Settings.yaml`). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under `Packages/Sites/`. To install it correctly go to your theme package (e.g.`Packages/Sites/Foo.Bar`) and run following command:

```bash
composer require carbon/filecontent --no-update
```

To install the package under Neos 2.\* you have to enter

```bash
composer require "carbon/filecontent:^0.5"--no-update
```

The `--no-update` command prevent the automatic update of the dependencies. After the package was added to your theme `composer.json`, go back to the root of the Neos installation and run `composer update`. Et voilà! Your desired package is now installed correctly.

## License

Licensed under MIT, see [LICENSE](LICENSE)
