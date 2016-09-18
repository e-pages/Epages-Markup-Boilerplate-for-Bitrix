<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sitemap</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style>
        * {
            font-family: "Ubuntu", sans-serif;
        }
        html,
        body {
            max-width: 100%;
            overflow: hidden;
        }
        .block {
            display: inline-block;
            vertical-align: top;
            float: left;
            margin: 10px 40px;
        }
        ul {
            list-style: none;
            padding-left: 25px;
        }
        a {
            text-transform: lowercase;
        }
    </style>
</head>
<body>
    <?php
    function getDirMap($dirName)
    {
        // read page directory
        $dirMap = array();
        if ($handle = opendir('./' . $dirName)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && $file != 'favicon.ico') {
                    $dirMap[] = array(
                        'url' => $dirName . "/" . $file,
                        'name' => (($ext_index = strripos($file, ".php", -1)) === false ? $file
                            : substr_replace($file, "", $ext_index, 4)),
                    );
                }
            }
            closedir($handle);
        }

        return $dirMap;
    }
    ?>
    <div class="block">
        <h1>Pages</h1>
        <ul>
            <?php foreach (getDirMap('markup/pages') as $value) { ?>
                <li>
                    <a href="<?= $value['url']; ?>">
                        <?= $value['name']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="block">
        <h1>Other</h1>
        <ul>
            <?php foreach (getDirMap('markup/demo-pages') as $value) { ?>
                <li>
                    <a href="<?= $value['url']; ?>">
                        <?= $value['name']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
