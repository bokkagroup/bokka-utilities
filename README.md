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

`Text::limitWords($text, $limit)` truncate text

## Testing

Install [PHPUnit](https://phpunit.de/getting-started.html). Change directory to `/tests` and run `phpunit .` to run all tests.
