<?php
/**
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Bex\Monolog\Formatter\Bitrix24;

/**
 * Record formatter for b24.
 *
 * @author GSU <gsu1234@mail.ru>
 */
class Bitrix24BlogpostFormatter extends \Bex\Monolog\Formatter\BitrixIblockFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        $record = parent::format($record);
        if(empty($record['data'])) $record['data'] = $record['title'];

        return $record;
    }

}
