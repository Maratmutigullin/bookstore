<?php

namespace App\Service\Recommendation\Exception;

use Throwable;

final class AccessDeniedException extends RecommendationException
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct("access denied", $code, $previous);
    }
}