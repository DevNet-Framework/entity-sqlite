<?php declare(strict_types = 1);
/**
 * @author      Mohammed Moussaoui
 * @copyright   Copyright (c) Mohammed Moussaoui. All rights reserved.
 * @license     MIT License. For full license information see LICENSE file in the project root.
 * @link        https://github.com/artister
 */

namespace Artister\Entity\Sqlite;

use Artister\Entity\EntityOptions;

class SqliteEntityOptionsExtension
{
    public static function useSqlite(EntityOptions $options, string $connectionUri)
    {
        $options->useProvider(new SqliteDataProvider(new SqlitelConnection($connectionUri)));
    }
}