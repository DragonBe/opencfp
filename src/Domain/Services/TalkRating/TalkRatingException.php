<?php

declare(strict_types=1);

/**
 * Copyright (c) 2013-2019 OpenCFP
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/opencfp/opencfp
 */

namespace OpenCFP\Domain\Services\TalkRating;

class TalkRatingException extends \RuntimeException
{
    public static function invalidRating($rating): self
    {
        return new self(\sprintf('Invalid talk rating: %s', $rating));
    }
}
