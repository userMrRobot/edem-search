# Search

Библиотека для проверки сбалансированности скобок в строках.

Пример использования

use Src\Search;

$result = Search::search('(1 + 2) * (3 / 4)');  // true

$result = Search::search('(1 + 2 * (3 / 4)');    // false
## Установка

Для того чтобы установить эту библиотеку, используйте Composer:

```bash
composer require edem/search