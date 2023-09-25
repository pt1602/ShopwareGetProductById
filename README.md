[![PHP](https://img.shields.io/badge/--blue?logo=php&logoColor=fff)](https://www.php.net/)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-blue.svg)](https://github.com/pt1602/ShopwareGetProductById/graphs/commit-activity)
[![github forks](https://badgen.net/github/forks/pt1602/ShopwareGetProductById/)](https://github.com/pt1602/ShopwareGetProductById/network/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-blue.svg)](http://makeapullrequest.com)
[![github stars](https://img.shields.io/github/stars/pt1602/ShopwareGetProductById.svg?style=social&label=Star&maxAge=2592000)](https://github.com/pt1602/ShopwareGetProductById/stargazers/)

---

# Twig _getProductByID_-Function for Shopware 6

A simple Shopware 6 plugin which adds a twig function to get the all about information about the product when you only
got the id.

__This plugin is only a demo for quick tests.__

---

## Installation

### Git

Clone this repository into custom/plugins of your Shopware 6 installation.

```shell
git clone https://github.com/pt1602/ShopwareGetProductById.git
```

### Composer

```shell
composer require pt1602/getproductbyid
```

## Example

```twig
{{ getProductByID('86da6b3c52064b928ee19c2cab2698be', context).name|raw }}
```
---

[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)
![Open Source? Yes!](https://badgen.net/badge/Open%20Source%20%3F/Yes%21/blue?icon=github)
