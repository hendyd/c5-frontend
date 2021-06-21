<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="./favicon.png">
        <title>C5 Frontend</title>

        <style>
            body {
                opacity: 0;
                transition: opacity 200ms ease-in-out;
            }

            body.loaded {
                opacity: 1;
            }
        </style>

        <link rel="preload" href="./dist/site.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <noscript>
            <link href="./dist/site.css" type="text/css" rel="stylesheet" media="screen, print, projection" />
        </noscript>
    </head>
<body>
    <div class="ccm-page">
        <h4><code>kitchen-sink.php</code></h4>
    </div>

    <script async defer src="./dist/site.js"></script>
</body>
</html>
