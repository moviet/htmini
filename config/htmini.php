<?php

return [
    "enable" => env("HTMINI_ENABLE", true),
    "css_core" => env("HTMINI_CSS", true),
    "js_core" => env("HTMINI_JS", true),
    "no_comments" => env("HTMINI_HTML", false),
    "anti_js" => env("HTMINI_ANTI_JS", false),
    "ignore" => [
        // Public/Folder
    ],
];
