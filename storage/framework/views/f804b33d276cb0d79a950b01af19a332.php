<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <title>Hously </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="Real Estate Website Landing Page" name="description"/>
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords"/>
    <meta name="author" content="Shreethemes"/>
    <meta name="website" content="https://shreethemes.in"/>
    <meta name="email" content="support@shreethemes.in"/>
    <meta name="version" content="2.2.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/feather-icons"></link>
    <img src="your-image-url.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover">


    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>

    <style>
        .filter-search-form select.form-select {
            width: 100%;
            padding-left: 2.5rem; /* Left icon uchun joy ajratish */
            padding-right: 1rem;
        }

        .filter-search-form i.icons {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            color: #6b7280; /* Icon rangi */
        }
    </style>
    <style>
        #topnav img {
            height: 80px; /* O'lchamni o'zgartirish */
            margin-right: 10px; /* Rasm va menyu o'rtasida masofa */
        }
    </style>

    <style>
        h1 {
            display: flex;
            align-items: center;
            margin-left: -150px; /* Sarlavhani chap tomonga surish */
        }

        h1 img {
            margin: 0 5px; /* Matn va ikonkani ajratish uchun o'rtada bo'sh joy */
        }
    </style>

    <style>
        a {
            position: relative; /* Chiziqni joylashtirish uchun */
        }

        a.active {
            border-bottom: 2px solid black; /* Chiziqning balandligi va rangi */
            color: black; /* Faol tugma matnining rangi */
        }
    </style>


</head>

<body class="dark:bg-slate-900">


<?php /**PATH /var/www/resources/views/components/header.blade.php ENDPATH**/ ?>