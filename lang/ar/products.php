<?php

return [
    'plural' => 'المنتجات',
    'singular' => 'المنتج',
    'empty' => 'لا توجد منتجات',
    'select' => 'اختر المنتج',
    'perPage' => 'عدد النتائج في الصفحة',
    'actions' => [
        'plural' => 'الإجراءات',
        'list' => 'كل المنتجات',
        'show' => 'عرض',
        'create' => 'إضافة منتج جديد',
        'new' => 'إضافة',
        'edit' => 'تعديل المنتج',
        'delete' => 'حذف المنتج',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم إضافة المنتج بنجاح',
        'updated' => 'تم تعديل المنتج بنجاح',
        'deleted' => 'تم حذف المنتج بنجاح',
        'retrieved' => 'تم أسترجاع بيانات المنتج بنجاح',
        'image_dimensions' => '* يجب أن تكون أبعاد الصورة 585x565 بكسل',
    ],
    'attributes' => [
        'id' => 'الرقم التسلسلي',
        'title' => 'الاسم',
        'short_description' => 'وصف قصير',
        'description' => 'الوصف',
        'category_id' => 'القسم',
        'brand_id' => 'الماركة',
        'price' => 'السعر',
        'price_after_discount' => 'السعر بعد الخصم',
        'special' => 'منتج مميز',
        'best_seller' => 'الأكثر مبيعاً',
        'image' => 'الصورة الرئيسية',
        'images' => 'معرض الصور',
        'status' => 'الحالة',
        'created_at' => 'تاريخ الإضافة',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذه المنتج ؟',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ]
    ],
    'special' => [
        'YES' => 'نعم',
        'NO' => 'لا',
    ],
    'best_seller' => [
        'YES' => 'نعم',
        'NO' => 'لا',
    ],
    'status' => [
        'ACTIVE' => 'مفعل',
        'INACTIVE' => 'غير مفعل',
    ],
    'price_status' => [
        'ACTIVE' => 'مفعل',
        'INACTIVE' => 'غير مفعل',
    ],
];
