<?php

return [
    'plural' => 'Collections',
    'singular' => 'Collection',
    'empty' => 'There are no collections',
    'select' => 'Select collection',
    'perPage' => 'Count Results Per Page',
    'actions' => [
        'plural' => 'Actions',
        'list' => 'List collections',
        'show' => 'Show collection',
        'create' => 'Create new collection',
        'new' => 'New',
        'edit' => 'Edit collection',
        'delete' => 'Delete collection',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The collection has been created successfully',
        'updated' => 'The collection has been updated successfully',
        'deleted' => 'The collection has been deleted successfully',
        'retrieved' => 'The collection has been retrieved successfully',
        'dimensions' => '* Image dimensions must be :dimensions pixels',
    ],
    'attributes' => [
        'id' => 'ID',
        'title' => 'Title',
        'description' => 'Description',
        'products_ids' => 'Products',
        'image' => 'Image',
        'status' => 'Status',
        'created_at' => 'Created at',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the collection ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ]
    ],
    'status' => [
        'ACTIVE' => 'Active',
        'INACTIVE' => 'In active',
    ]
];
