## Reproducer for an issue with PHP-CS-Fixer's no_unused_import

### The issue

The line 13 `use Brick\DateTime\Month;` should be removed, but it is not. The issue was discovered [here](https://github.com/brick/date-time/pull/99#pullrequestreview-1956452269)


### How to reproduce

The [CI](https://github.com/gnutix/php-cs-fixer-no-unused-import-fixer-reproducer/actions) shows the issue.

If you want to do it yourself, run the following commands :
1. Checkout this repository
2. Run `composer install`
3. Run `vendor/bin/php-cs-fixer -vvv fix`

