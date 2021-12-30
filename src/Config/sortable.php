<?php

return [

    'types' => [
        'alpha' => [
            'fields'                => ['description', 'email', 'name', 'slug'],
            'icon'                  => 'fa fa-sort-alpha',
        ],
        'amount' => [
            'fields'                => ['amount', 'price'],
            'icon'                  => 'fa fa-sort-amount',
        ],
        'numeric' => [
            'fields'                => ['created_at', 'updated_at', 'level', 'id', 'phone_number'],
            'icon'                  => 'fa fa-sort-numeric',
        ],
    ],

    'icons' => [
        'enabled'                   => true,

        'wrapper'                   => '<i class="{icon}"></i>',

        'default'                   => 'fa fa-sort',

        // Icon that shows when generating sortable link for columns not sorted by, not applied if value is null
        'sortable'                  => 'fa fa-sort',

        'clickable'                 => false,

        'prefix'                    => '&nbsp;',

        'suffix'                    => '',
    ],

    // Suffix class that is appended when ascending direction is applied
    'asc_suffix'                    => '-asc',

    // Suffix class that is appended when descending direction is applied
    'desc_suffix'                   => '-desc',

    // Default anchor class, not applied if value is null
    'anchor_class'                  => null,

    // Default active anchor class, not applied if value is null
    'active_anchor_class'           => null,

    // Default sort direction anchor class, not applied if value is null
    'direction_anchor_class_prefix' => null,

    // Relation - column separator ex: author.name means relation "author" and column "name"
    'relation_column_separator'     => '.',

    // Formatting function applied to name of column, use null to turn formatting off
    'formatting_function'           => 'ucfirst',

    // Apply formatting function to custom titles as well as column names
    'format_custom_titles'          => true,

    // Inject title parameter in query strings, use null to turn injection off
    // Example: 'inject_title' => 't' will result in ..user/?t="formatted title of sorted column"
    'inject_title_as'               => null,

    // Allow request modification, when default sorting is set but is not in URI (first load)
    'allow_request_modification'    => true,

    // Default direction for: $user->sortable('id') usage
    'default_direction'             => 'asc',

    // Default direction for non-sorted columns
    'default_direction_unsorted'    => 'asc',

    // Use the first defined sortable column (Model::$sortable) as default
    // Also applies if sorting parameters are invalid for example: 'sort' => 'name', 'direction' => ''
    'default_first_column'          => false,

    // Join type: join vs leftJoin
    'join_type'                     => 'leftJoin',

];
