<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedJsExtremeLazyLoadAdminUi\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class DelayScriptEvents implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'label' => __('Scroll event'),
                'value' => 'scroll'
            ],
            [
                'label' => __('Mousemove event'),
                'value' => 'mousemove'
            ],
            [
                'label' => __('Touch event'),
                'value' => 'touchstart'
            ],
        ];
    }
}
