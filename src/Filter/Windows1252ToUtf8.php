<?php
/**
 * Filter to convert Windows 1252 to UTF-8 encoding
 *
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Filter;

use ForceUTF8\Encoding;

/**
 * Filter to convert Windows 1252 to UTF-8 encoding
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://github.com/mjaschen/collmex
 */
class Windows1252ToUtf8 implements FilterInterface
{
    /**
     * @param mixed $input string or array
     *
     * @return mixed
     */
    public function filter($input)
    {
        // The Encoding methods are array-aware so we can just drop our input
        // into the conversion method.

        return Encoding::toUTF8($input);
    }
}
