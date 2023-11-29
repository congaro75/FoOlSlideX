<?php

$theme = [
    "plugins" => [
        "SleekDB",
        "dbLists",
        "menu",
        "session",
        "customTags",
        "readChapters",
        "readingMode",
    ],
    "lists" => [
        "dbLists" => [
            "dbl_default",
            "dbl_euphoria",
            "dbl_session",
        ],
        "customTags" => [
            "ct_default",
            "ct_euphoria",
        ],
    ],
    "config" => [
        "last" => [
            "title" => 5,
            "chapter" => 20,
        ],
        "perpage" => [
            "title" => 15,
            "chapter" => 50,
        ],
        "sleek" => [
            "dir" => "/database/euphoria", // From the root-dir
            "config" => [
                "auto_cache" => true,
                "cache_lifetime" => null,
                "timeout" => false, // deprecated! Set it to false!
                "primary_key" => "id",
                "search" => array(
                    "min_length" => 2,
                    "mode" => "or",
                    "score_key" => "scoreKey",
                ),
                "folder_permissions" => 0777,
            ],
        ],
    ],
];
