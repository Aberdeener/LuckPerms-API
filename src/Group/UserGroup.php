<?php

namespace LuckPermsAPI\Group;

use LuckPermsAPI\Concerns\HasContexts;
use LuckPermsAPI\Concerns\HasExpiry;
use LuckPermsAPI\Context\ContextMapper;

class UserGroup extends Group {

    use HasContexts;
    use HasExpiry;

    public function __construct(
        string $name,
        string $displayName,
        int $weight,
        array $metadata,
        array $nodes,
        array $contexts,
        int $expiry,
    ) {
        parent::__construct($name, $displayName, $weight, $metadata, $nodes);
        $this->contexts = $contexts;
        $this->expiry = $expiry;
    }

}