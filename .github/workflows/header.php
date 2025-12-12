<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Tailwind CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom CSS (FireBoss + Scrollbar + Global) -->
    <style>
        /* Custom CSS (same as above) */
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class('scrollbar-hide'); ?>>
