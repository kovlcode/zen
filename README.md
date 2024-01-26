PHP client library zen.com api

## Installation
```bash
composer require kovlcode/zen:@dev
```

### Example usage
```php
use Kovlcode\Zen\API\Requests\Terminals\Terminals;
use Kovlcode\Zen\Currencies\EUR;
use Kovlcode\Zen\Zen;

$zen = new Zen('apiKey');

$response = $zen->request(new Terminals(new EUR(185.33)));
```

### API Documentation
See the official zen.com [API documentation](https://www.zen.com/developer/)