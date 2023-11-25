<?php

declare(strict_types=1);

/**
 * This file is part of Veyoze CLI.
 *
 * (c) Mehran Rasulian <mehran.rasulian@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class GenerateDomainName
{
    use AsAction;

    public function handle(string $domain, string $branch): string
    {
        return str($branch)
            ->append('.', $domain)
            ->toString();
    }
}
