<?php

return [
    'plural' => 'المسئولين',
    'singular' => 'المسئول',
    'empty' => 'لا توجد مسئولين',
    'select' => 'اختر المسئول',
    'perPage' => 'عدد النتائج في الصفحة',
    'actions' => [
        'actions' => 'الإجراءات',
        'list' => 'كل المسئولين',
        'show' => 'عرض',
        'create' => 'إضافة مسئول جديد',
        'new' => 'إضافة',
        'edit' => 'تعديل المسئول',
        'delete' => 'حذف المسئول',
        'save' => 'حفظ',
        'filter' => 'بحث',
        'latest' => 'أحدث المسئولين',
    ],
    'messages' => [
        'created' => 'تم إضافة المسئول بنجاح',
        'updated' => 'تم تعديل المسئول بنجاح',
        'deleted' => 'تم حذف المسئول بنجاح',
        'retrieved' => 'تم أسترجاع بيانات المسئول بنجاح',
    ],
    'attributes' => [
        'id' => 'الرقم التسلسلي',
        'name' => 'الاسم',
        'phone' => 'رقم الهاتف',
        'email' => 'البريد الإلكتروني',
        'created_at' => 'تاريخ الإنضمام',
        'old_password' => 'كلمة المرور القديمة',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'avatar' => 'الصورة الشخصية',
        'status' => 'الحالة'
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا المسئول ؟',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ]
    ],
    'status' => [
        'ACTIVE' => 'مفعل',
        'INACTIVE' => 'غير مفعل',
    ],
];
