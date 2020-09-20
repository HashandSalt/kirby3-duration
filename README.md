# Kirby 3 Duration

This plugin is for easily generating durations from a time. This is useful for structured data like JSON Schema.

## Install

### Download

Download and copy this repository to `/site/plugins/kirby3-duration`.

### Composer

```
composer require hashandsalt/kirby3-duration
```

****

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to

- [make a donation 🍻](https://paypal.me/hashandsalt?locale.x=en_GB) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/36141?link=1170)

****


## Usage

To turn 2 hours, 30 minutes, and 47 seconds into `PT2H30M47S`.

```
$page->duration('02:30:47')
```
