<!DOCTYPE>
<html>
    <head>
        <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="public/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon-16x16.png">
        <link rel="manifest" href="public/images/manifest.json">

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700|Google+Sans:400,500|Product+Sans:400&lang=" rel="stylesheet">
        <!-- Required Stylesheets -->

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">        

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132758189-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-132758189-2');
        </script>
    </head>
    <body>
        <div id="app">
            <?php if($header) { echo $header;}?>
            <div class="content">
                <?php if($page){ echo $page;}?>   
            </div>      
            <?php if($footer) { echo $footer;}?>
        </div>
        <script src="https://unpkg.com/@babel/polyfill@latest/dist/polyfill.min.js"></script>
        <?php echo $head; ?>
    </body>
</html>