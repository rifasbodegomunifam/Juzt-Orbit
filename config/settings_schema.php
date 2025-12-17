<?php

return [
  "schema" => "https://json-schema.org/draft-07/schema#",
  "title" => "Theme general settings",
  "description" => "Global settings for Juzt Orbit theme",
  "type" => "object",

  "properties" => [
    "site_logo" => [
      "type" => "file",
      "label" => "Site logo"
    ],
    "site_favicon" => [
      "type" => "file",
      "label" => "Site Favicon"
    ],
    "main_menu" => [
      "type" => "menu",
      "label" => "Main Menu"
    ]
  ]
];