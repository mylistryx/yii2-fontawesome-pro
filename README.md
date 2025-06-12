# FontAwesome PRO asset bundle for Yii 2.0 Framework #

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <a href="https::/fontawesome.io">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Font_Awesome_logomark_blue.svg/768px-Font_Awesome_logomark_blue.svg.png?20220809042108" width="100px">
    </a>
</p>

## Installation #

___

[Changelog](CHANGELOG.md)

The preferred way to install this extension is through [composer ](http://getcomposer.org/download/)

Either run:

`composer require mylistryx/yii2-fontawesome-pro`  or add `"mylistryx/yii2-fontawesome-pro": "~6.0.0"` into your `composer.json` file. 

Then register assets in your view file:

`FontAwesomeAsset::register($this)` OR `FontAwesomeCdnAsset::register($this)` to use CDN files.

and use:

`<?= FAS::icon('gear') ?>` - Solid

`<?= FADS::icon('gear') ?>` - Duotone Solid

`<?= FASS::icon('gear') ?>` - Shape Solid

`<?= FASDS::icon('gear') ?>` - Shape Duotone Solid


`<?= FAL::icon('gear') ?>` - Light

`<?= FADL::icon('gear') ?>` - Duotone Light

`<?= FASL::icon('gear') ?>` - Shape Light

`<?= FASDL::icon('gear') ?>` - Shape Duotone Light

`<?= FAR::icon('gear') ?>` - Regular

`<?= FADR::icon('gear') ?>` - Duotone Regular

`<?= FASR::icon('gear') ?>` - Shape Regular

`<?= FASDR::icon('gear') ?>` - Shape Duotone Regular

`<?= FAT::icon('gear') ?>` - Thin

`<?= FADT::icon('gear') ?>` - Duotone Thin

`<?= FAST::icon('gear') ?>` - Shape Thin

`<?= FASDT::icon('gear') ?>` - Shape Duotone Thin


... and so on. Full list of free icons see on fontawesome home page:  https://fontawesome.com/icons

Some animations are represented:

`<?= FA::i('gear')->animate((new Beat(3.0))) ?>`

`<?= FA::i('gear')->animate((new Shake())) ?>`

`<?= FA::i('gear')->animate((new Spin())) ?>`

`<?= FA::i('gear')->animate((new Flip())) ?>`

`<?= FA::i('gear')->animate((new Bounce())) ?>`

see source files for more.