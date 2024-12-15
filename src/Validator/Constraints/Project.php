<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_CLASS)]
final class Project extends Constraint
{
    public const END_BEFORE_BEGIN_ERROR = 'kimai-project-00';
    public const PROJECT_NUMBER_EXISTING = 'kimai-project-01';

    protected const ERROR_NAMES = [
        self::END_BEFORE_BEGIN_ERROR => 'End date must not be earlier then start date.',
        self::PROJECT_NUMBER_EXISTING => 'The number %number% is already used.',
    ];

    public string $message = 'This project has invalid settings.';

    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}
