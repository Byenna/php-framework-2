<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $_ENV['APP_NAME'] ?></title>

    <link rel="icon" href="/public/images/logo.png" sizes="32x32">

    <!-- have to search for w3 node module -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/users.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/admin_header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/products.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/register.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/home_text.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/details.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/volunteer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/about.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/css/footer.css'>
    <link rel="stylesheet" type='text/css' media='screen' href="/public/css/main.css">
    <link rel="stylesheet" type='text/css' media='screen' href="/public/css/cart.css">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/vue/dist/vue.min.js"></script>
    <script src="/node_modules/axios/dist/axios.min.js"></script>
    
    <script src="/public/js/components/cart.js"></script>
    <script src="/public/js/components/products.js"></script>
</head>
<body>    
    <main id="app" class="content">
        <div class="layer" @click="closeShoppingCart"></div>
        <div class="container-fluid p-0">
            