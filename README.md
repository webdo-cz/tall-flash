# Laravel Flash Messages with livewire support
## Installation

install via composer

```bash
composer require webdo-cz/tall-flash
```

## Setup

add before `</body>`

```html
<livewire:flash-messages />
```

## Usage

make a call to the `flash()` function.

```php
$flash = [
    'type' => 'success',
    'title' => 'Success',
    'message' => 'Post added to our database',
];

flash($flash, $this);
```
($this is used for livewire support)

There are two types: success, error
You can use this short function

```php
flashSuccess([
    'title' => 'Success',
    'message' => 'Post added to our database',
], $this);
```

and

```php
flashError([
    'title' => 'Error',
    'message' => 'Something bad happen',
], $this);
```
