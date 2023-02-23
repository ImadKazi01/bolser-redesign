<?php

namespace Drupal\carousel_blocks\Plugin\Block;

use Drupal\base_block\Plugin\Block\BaseLayoutBuilder;

/**
 * Class CarouselSlide
 * @package Drupal\carousel_blocks\Plugin\Block
 *
 * @Block(
 *   id = "carousel_slide_block",
 *   admin_label = @Translation("Carousel slide"),
 *   category = @Translation("Carousel blocks"),
 * )
 */
class CarouselSlide extends BaseLayoutBuilder {
  /**
   * The theme used for rendering the block
   *
   * @var string
   */
  protected $theme = 'carousel_slide_block';

  /**
   * The entity type for the block
   *
   * @var string
   */
  protected $entityTypeId = 'block_content:carousel_slide_block';

  /**
   * Gets the fields for the block
   *
   * @var array
   */
  protected $fields = [
    'image'       => [
      '#type'              => 'managed_file',
      '#required'          => TRUE,
      '#upload_location'   => 's3://',
      '#upload_validators' => [
        'file_validate_extensions' => ['png jpg jpeg'],
        'file_validate_size'       => [self::MAX_IMAGE_FILE_SIZE],
      ],
    ],
    'image_alt'   => [
      '#type'     => 'textfield',
    ],
    'title'       => [
      '#type'     => 'textfield',
      '#required' => TRUE,
    ],
    'jobTitle'       => [
      '#type'     => 'textfield',
    ],
    'description' => [
      '#type'     => 'textarea',
    ],
  ];

}
