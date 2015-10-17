<?php require("../header.php"); ?>

<?php
    // font settings for test
    $fonts = array(
        'Open Sans'
        );
    $weights = array (
        100,
        200,
        300,
        400,
        500,
        600,
        700,
        800,
        900,
        'normal',
        'bold'
        );
    $styles = array ('normal', 'italic');
    $sizes = array (96, 72, 60, 48, 36, 30, 24, 21, 18, 17, 16, 15, 14, 13, 12, 11, 10, 9);
 ?>

<div id="top"></div>

<!-- Content -->
<nav class="table-of-content">
    <ul>
        <li>
            <a href="#top">Top</a>
        </li>
        <li>
            <a href="<?php echo SITE_TEMPLATE_PATH; ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo SITE_TEMPLATE_PATH; ?>/pages/main.php">Main page</a>
        </li>
    </ul>
    <ul class="nav">
        <li>
            <a href="#shortlist">Short List</a>
        </li>
        <li>
            <a href="#fontscontainer">Fonts</a>
            <ul>
                <?php foreach ($fonts as $fontname) {
                $font_link = strtoupper(str_replace(" ", "_", sprintf("%s", str_replace(" ", "_", $fontname))));
                    ?>
                <li>
                    <a href="#<?php echo $font_link; ?>">
                        <?php echo $fontname; ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <li>
            <a href="test.php?#icons">Icons</a>
        </li>
    </ul>
</nav>

<!-- Styles for font page -->
<style type="text/css" media="screen">
    * { line-height: normal; }

    <?php // create styles for each font
    foreach ($fonts as $value)
        echo "." . str_replace(" ", "_", $value) . " { font-family: '" . $value . "'; }";

    foreach ($weights as $value)
        echo ".w" . $value . " { font-weight: " . $value . "; }";

    foreach ($styles as $value)
        echo ".s" . $value . " { font-style: " . $value . "; }";

    foreach ($sizes as $value)
        echo ".size" . $value . " { font-size: " . $value . "px; }";
    ?>
</style>


<?php
$text_ru = "Съешь еще этих мягких французких булок, да выпей чаю. ";
$text_en = "Sphinx of black quartz judge my vow!? ";
$digits = "1234567890 ";
$text = $text_ru . $text_en . $digits ."The five boxing wizards jump quickly. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
?>
<div class="container">
    <h1 id="shortlist">Short list</h1>
    <div class="font-short-list">
        <a name="top"></a>
        <?php
        $exsize = 18;
        foreach ($fonts as $font) {
            ?>
            <p>
                <span class="title"><?php echo $font; ?></span>
                <?php
                foreach ($styles as $style) {
                    ?>
                    <span class="samplebox title"><?php echo $style; ?></span>
                    <?php
                }
                ?>
            </p>
            <hr>
            <?php
            foreach ($weights as $weight) {
                ?>
                <p>
                    <span class="weight title"><?php echo $weight; ?>: </span>
                    <?php
                    foreach ($styles as $style) {
                        $blockid = strtoupper(str_replace(" ", "_", sprintf("%s_%s_%s", str_replace(" ", "_", $font), $weight, $style)));
                        ?>
                        <a href="#<?php echo $blockid; ?>">
                            <span class="samplebox <?php echo str_replace(" ", "_", $font); ?> w<?php echo $weight; ?> s<?php echo $style; ?> size<?php echo $exsize; ?>"><?php echo $exsize; ?> - <?php echo $text; ?></span>
                        </a>
                        <?php
                    }
                    ?>
                </p>
                <?php
            }
            ?>
            <hr>
            <?php
        }
        ?>
    </div>
    <div class="fontblock" id="fontscontainer">
        <?php
        foreach ($fonts as $font) {
            $font_link = strtoupper(str_replace(" ", "_", sprintf("%s", str_replace(" ", "_", $font))));
        ?>
        <h1 id="<?php echo $font_link ?>"><?php echo $font; ?></h1>
        <?php
            foreach ($weights as $weight) {
                foreach ($styles as $style) {
                    $blockid = strtoupper(str_replace(" ", "_", sprintf("%s_%s_%s", str_replace(" ", "_", $font), $weight, $style)));
                    ?>
                    <h2 >
                        <a name="<?php echo $blockid; ?>">
                            <?php echo $font . " " . $weight . " " . $style; ?>
                        </a>
                    </h2>
                    <?php
                    foreach ($sizes as $exsize) {
                        ?>
                        <p class="samplebox <?php echo str_replace(" ", "_", $font); ?> w<?php echo $weight; ?> s<?php echo $style; ?> size<?php echo $exsize; ?>"><?php echo $exsize; ?> - <?php echo $text; ?></p>
                        <?php
                    }
                }
            }
        }
        ?>
    </div>
</div>

<?php require("../footer.php") ?>
