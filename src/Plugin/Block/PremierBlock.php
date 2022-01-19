<?php

namespace Drupal\mm_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "mm_blocks_premier_block",
 *   admin_label = @Translation("My first block to display date"),
 * )
 */
class PremierBlock extends BlockBase
{
    
    public function build(): array 
    {
        return ['#markup' =>  strftime('%Y-%m-%d %H:%M'),];
    }
    
    protected function blockAccess(AccountInterface $account)
    {
        return AccessResult::allowedIfHasPermission($account, 'access content');
    }
  
}
