<?php
/**
 *
 * Duration for Kirby 3
 *
 * @version   0.0.1
 * @author    James Steel <https://hashandsalt.com>
 * @copyright James Steel <https://hashandsalt.com>
 * @link      https://github.com/HashandSalt/kirby3-duration
 * @license   MIT <http://opensource.org/licenses/MIT>
 */

@include_once __DIR__ . '/vendor/autoload.php';

use Gamez\Duration;

Kirby::plugin('hashsandsalt/kirby3-duration', [

    'pageMethods' => [
        'duration' => function ($time) {
          $time = Duration::make($time);
          return $time;
        }
    ],

]);
