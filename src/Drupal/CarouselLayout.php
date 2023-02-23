<?php

namespace Drupal\custom_layouts\Plugin;

use Drupal\base_layout\Plugin\BaseLayout;

/**
 * Class CarouselLayout
 *
 * @package Drupal\custom_layouts\Plugin
 */
class CarouselLayout extends BaseLayout
{
  /**
   * Custom carousel layout fields to add if required
   *
   * @var array
   */
  protected $fields = [
    'bg_color' => [
      '#type' => 'select',
      '#title' => 'Background Colour',
      '#options' => [
        'white' => 'White',
        'light-grey' => 'Light grey',
        'dark-grey' => 'Dark grey',
        'black' => 'Black',
        'one' => 'Blue',
        'two' => 'Navy',
        'three' => 'Yellow',
        'four' => 'Pink',
        'five' => 'Purple',
      ],
      '#default_value' => 'white',
    ],

    'text_color' => [
      '#type' => 'select',
      '#title' => 'Text Colour',
      '#options' => [
        'black' => 'Black',
        'white' => 'White',
      ],
      '#default_value' => 'black',
    ],
  ];
}
