<?php

declare(strict_types=1);

namespace Drupal\anytown\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a hello world block.
 *
 * @Block(
 *   id = "anytown_hello_world",
 *   admin_label = @Translation("Hello World"),
 *   category = @Translation("Custom"),
 * )
 */
class HelloWorldBlock extends BlockBase
{

  public function build(): array
  {
    $build['content'] = [
      '#markup' => $this->t('Hello, World!'),
    ];

    return $build;
  }
}
