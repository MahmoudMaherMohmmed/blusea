<?php

return [
    'plural' => 'Categories',
    'singular' => 'Category',
    'empty' => 'There are no categories',
    'select' => 'Select category',
    'perPage' => 'Count Results Per Page',
    'actions' => [
        'plural' => 'Actions',
        'list' => 'List categories',
        'show' => 'Show category',
        'create' => 'Create new category',
        'new' => 'New',
        'edit' => 'Edit category',
        'delete' => 'Delete category',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The category has been created successfully',
        'updated' => 'The category has been updated successfully',
        'deleted' => 'The category has been deleted successfully',
        'retrieved' => 'The category has been retrieved successfully',
        'image_dimensions' => '* Image dimensions must be 64x64 pixels',
    ],
    'attributes' => [
        'id' => 'ID',
        'title' => 'Title',
        'description' => 'Description',
        'image' => 'Image',
        'status' => 'Status',
        'created_at' => 'Created at',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the category ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ]
    ],
    'status' => [
        'ACTIVE' => 'Active',
        'INACTIVE' => 'In active',
    ]
];
