<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ SERVER_ROOT }}/public/assets/css/styles.css">
    <link rel="stylesheet" href="{{ SERVER_ROOT }}/public/assets/css/forms.css">
    {@ if (isset($user)): }}
        <link rel="stylesheet" href="{{ SERVER_ROOT }}/public/assets/css/app.css">
        <link rel="stylesheet" href="{{ SERVER_ROOT }}/public/assets/css/menu.css">
    {@ endif }}
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
    
    <title>bookmarks</title>
</head>

<body class={{ isset($user)? 'app' : 'default' }}>

