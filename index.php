<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$data = Yaml::parse('data/resources.yml');

?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <meta name='description' content='Virtual Sensitive resources' />
        <meta name='author' content='Florent Schildknecht' />
        <title>Virtual Sensitive resources</title>
        <link rel='stylesheet' href='assets/css/bootstrap.min.css' />
        <link rel='stylesheet' href='assets/css/app.min.css' />
        <link rel='icon' href='favicon.ico' sizes='16x16' type='image/vnd.microsoft.icon' />
        <link rel='icon' href='favicon.png' sizes='32x32' type='image/png' />
    </head>
    <body>
        <div class='container'>
            <h1 class='page-header'>Virtual Sensitive Resources <small><img id='logo' src='assets/images/logo.png' class='pull-right' alt='Virtual Sensitive' /></small></h1>
            <div class='row text-center'>
                <?php foreach ($data['resources'] as $name => $resource): ?>
                    <div class='col-lg-3 col-md-4 col-sm-4 col-xs-6 link-container'>
                        <div class='thumbnail'>
                            <?php if ($resource['logo']): ?>
                                <a href='<?php echo $resource['link']; ?>' target='_blank'>
                                    <img src='<?php echo $resource['logo']; ?>' alt='<?php echo $name; ?>' />
                                </a>
                            <?php endif; ?>
                            <div class='caption'>
                                <p>
                                    <a href='<?php echo $resource['link']; ?>' target='_blank'>
                                        <?php echo $resource['description']; ?>
                                    </a>
                                </p>
                                <div>
                                    <a href='<?php echo $resource['link']; ?>' class='btn btn-sm btn-primary' target='_blank'>Accéder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src='assets/js/vendor/jquery-2.1.1.min.js'></script>
        <script src='assets/js/vendor/bootstrap-3.2.0.min.js'></script>
    </body>
</html>
