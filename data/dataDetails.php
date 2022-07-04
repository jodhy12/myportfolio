<?php

$projects = [
    (object)
    [
        'id' => 1,
        'title' => 'Coffee Shop (Point of Sale)',
        'tag' => 'Laravel Framework || VueJs || Javascript || MySql || Bootstrap ',
        'description' => "This Point of Sale website created with Laravel Framework, and MySql for backend. VueJs, Javascript, and Bootstrap for frontend. This web enforces access rights with 3 roles. The roles are superadmin, admin, and employee(user). For superadmin, it can do all access in website. For admin, its same look like superadmin, but admin can't delete and add another role admin in users. For employee, its only do transaction, create and view member, and view products. For other features can be seen below.",
        'images' =>
        [
            [
                'id' => 1,
                'img_title' => 'Login Page',
                'img_path' => 'img/project01/log-in.png',
                'description' => "This is view of login page before enter dashboard."
            ],
            [
                'id' => 2,
                'img_title' => 'Superadmin - Dashboard',
                'img_path' => 'img/project01/superadmin-dashboard.png',
                'description' => "This is view of dashboard for Superadmin and Admin. It can access all features in this web."
            ],
            [
                'id' => 3,
                'img_title' => 'Cart List',
                'img_path' => 'img/project01/cart-list.png',
                'description' => "This is view of Cart List. When user before create a new transaction, user must be add a product in cart. after cart not empty then user can next to create a new transaction."
            ],
            [
                'id' => 4,
                'img_title' => 'Checkout Cart List',
                'img_path' => 'img/project01/check-out.png',
                'description' => "This is view of Checkout Cart List. Before user confirm the transaction, user must be input the name first, and if the customer is a member, user must be choose the member first then confirm the transaction."
            ],
            [
                'id' => 5,
                'img_title' => 'Transaction Success',
                'img_path' => 'img/project01/transaction-success.png',
                'description' => "This is view of after confirm checkout transaction. Here, user can view transaction details and print the receipts."
            ],
            [
                'id' => 6,
                'img_title' => 'Print Receipt',
                'img_path' => 'img/project01/print-receipt.png',
                'description' => "This is view of Print Receipt. User can print a receipt from transactions."
            ],
            [
                'id' => 7,
                'img_title' => 'Superadmin - Users',
                'img_path' => 'img/project01/user-superadmin.png',
                'description' => "This is view of Users Menu for Superadmin. Superadmin can do all action in this Menu except delete itself."
            ],
            [
                'id' => 8,
                'img_title' => 'Employee - Dashboard',
                'img_path' => 'img/project01/employee-dashboard.png',
                'description' => "This is view of Dashboard for employee. This user can add, search by input, and search by choose category of the products."
            ],
            [
                'id' => 9,
                'img_title' => 'Employee - Products',
                'img_path' => 'img/project01/product-employee.png',
                'description' => "This is view of Product for employee. This user only can view all of products."
            ],
            [
                'id' => 10,
                'img_title' => 'Employee - Transaction',
                'img_path' => 'img/project01/employee-transaction.png',
                'description' => "This is view of transaction for employee. This user only can view current of day transaction."
            ],
            [
                'id' => 11,
                'img_title' => 'Employee - Member',
                'img_path' => 'img/project01/employee-member.png',
                'description' => "This is view of member for employee. This user only can add and view all of members."
            ],
            [
                'id' => 12,
                'img_title' => 'User - Admin',
                'img_path' => 'img/project01/user-admin.png',
                'description' => "This is view of user for admin. This user only do action with employee role."
            ],
            [
                'id' => 13,
                'img_title' => 'Create - Admin',
                'img_path' => 'img/project01/create-admin.png',
                'description' => "This is view of create a user for admin. This user only create a new user for employee role."
            ],
            [
                'id' => 14,
                'img_title' => 'Create - Superdmin',
                'img_path' => 'img/project01/create-superadmin.png',
                'description' => "This is view of create a user for superadmin. This user only create a new user for admin role."
            ],
            [
                'id' => 15,
                'img_title' => 'Transcaction All',
                'img_path' => 'img/project01/all-transactions.png',
                'description' => "This is view of transaction for except employee. Here, this user can see all of transaction history."
            ],
            [
                'id' => 16,
                'img_title' => 'Daily Report',
                'img_path' => 'img/project01/daily-report.png',
                'description' => "This is view of daily report. Except employee, other role can view this daily report."
            ],
            [
                'id' => 17,
                'img_title' => 'Monthly Report',
                'img_path' => 'img/project01/monthly-report.png',
                'description' => "This is view of monthly report. Except employee, other role can view this monthly report. Here, we can see the graphic from monthly transaction."
            ],
        ],

    ],
    (object)
    [
        'id' => 2,
        'title' => 'Project Planner (ToDo List)',
        'tag' => 'VueJs',
        'description' => "This is my second project about CRUD. I learn about how to create CRUD ToDo List using Vue.Js Framwork. For the features can be seen below.",
        'images' => [
            [
                'id' => 1,
                'img_title' => 'Index Page',
                'img_path' => 'img/project02/home.png',
                'description' => "This is view of index page. In index, we can filter the list, edit, delete, and completed the list."
            ],
            [
                'id' => 2,
                'img_title' => 'Create New List Page',
                'img_path' => 'img/project02/add.png',
                'description' => "This is view of create new list. Here, we create a new list."
            ],
            [
                'id' => 3,
                'img_title' => 'Edit List Page',
                'img_path' => 'img/project02/edit.png',
                'description' => "This is view of edit list. Here, we edit a list."
            ],
        ],
    ]
];

$project = [];
