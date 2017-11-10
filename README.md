# Bokka Utilities

General utility classes for use in PHP-based projects.

## Usage

## Utilities

There is a general utilities class that creates the following constants:

* `BOKKA_ENV` equal to `local`, `staging`, or `production`

### Data

`Data::getStates()` returns an array of state name/abbreviation values

### Video

`Video::getIDFromVideoURL($url)` extracts a unique video ID from the URL

`Video::getEmbedURL($url)` provides an embeddable URL for CORS compatibility

### Text

`Text::limitWords($text, $limit)` truncate text word count to `$limit` value

## Testing

Install [PHPUnit](https://phpunit.de/getting-started.html). Run `phpunit` to run all tests.

See `phpunit.xml` and [documentation](https://phpunit.de/manual/6.4/en/appendixes.configuration.html) for configuration options.
