<?php require("../header.php"); ?>

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
            <a href="#content_colors">Color</a>
        </li>
        <li>
            <a href="#content_buttons">Button</a>
            <ul>
                <li><a href="#button_state">State</a></li>
                <li><a href="#button_size">Size</a></li>
                <li><a href="#btn-block">Block</a></li>
            </ul>
        </li>
        <li>
            <a href="#controls">Supported controls</a>
            <ul>
                <li><a href="#inputs">Inputs</a></li>
                <li><a href="#textarea">Textarea</a></li>
                <li><a href="#switchers">Checkboxes and radios</a></li>
                <li><a href="#selects">Selects</a></li>
                <li><a href="#static">Static controls</a></li>
            </ul>
        </li>
        <li>
            <a href="#form-sizes">Control sizing</a>
            <ul>
                <li><a href="#height-sizing">Height sizing</a></li>
                <li><a href="#width-sizing">Column sizing</a></li>
            </ul>
        </li>
        <li>
            <a href="#states">States</a>
            <ul>
                <li><a href="#focus">Focus state</a></li>
                <li><a href="#dis">Disabled fieldsets</a></li>
                <li><a href="#read">Readonly state</a></li>
                <li><a href="#val">Validation states</a></li>
                <li><a href="#opt">Optional icons</a></li>
                <li><a href="#contextual-colors">Contextual colors</a></li>
                <li><a href="#contextual-backgrounds">Contextual backgrounds</a></li>
            </ul>
        </li>
        <li>
            <a href="#forms">Forms</a>
            <ul>
                <li><a href="#form-basic">Basic</a></li>
                <li><a href="#form-inline">Inline</a></li>
                <li><a href="#form-horizontal">Horizontal</a></li>
            </ul>
        </li>
        <li>
            <a href="#typography">Typography</a>
            <ul>
                <li><a href="#heading">Heading</a></li>
                <li><a href="#inline">Inline</a></li>
                <li><a href="#alignment">Alignment</a></li>
                <li><a href="#transformation">Transformation</a></li>
                <li><a href="#abbreviations">Abbreviations</a></li>
                <li><a href="#addresses">Addresses</a></li>
                <li><a href="#blockquotes">Blockquotes</a></li>
            </ul>
        </li>
        <li>
            <a href="#lists">Lists</a>
            <ul>
                <li><a href="#unordered">Unordered</a></li>
                <li><a href="#ordered">Ordered</a></li>
                <li><a href="#unstyled">Unstyled</a></li>
                <li><a href="#inline-list">Inline</a></li>
            </ul>
        </li>
        <li>
            <a href="#descr">Description</a>
            <ul>
                <li><a href="#horizontal">Horizontal description</a></li>
            </ul>
        </li>
        <li>
            <a href="http://getbootstrap.com/css/#tables">Tables</a>
        </li>
        <li>
            <a href="#images">Images</a>
        </li>
        <li>
            <a href="#icons">Icons</a>
            <ul>
                <li><a href="#glyphicons">Glyphicons</a></li>
                <li><a href="#font_awesome">Font Awesome</a></li>
            </ul>
        </li>
        <li>
            <a href="#sprites">Sprites</a>
            <ul>
                <li><a href="#sprite-full-image">Full image</a></li>
                <li><a href="#sprite-one-by-one">One by one</a></li>
                <li><a href="#svg">SVG Sprite</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Page -->
<div class="test-page-content container">
    <h1 id="content_colors">Default colors</h1>
    <div class="row">
        <div class="col-xs-12">
            <div class="color-swatches">
                <div class="color-swatch gray-darker"></div>
                <div class="color-swatch gray-dark"></div>
                <div class="color-swatch gray"></div>
                <div class="color-swatch gray-light"></div>
                <div class="color-swatch gray-lighter"></div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="color-swatches">
                <div class="color-swatch brand-primary"></div>
                <div class="color-swatch brand-cancel"></div>
                <div class="color-swatch brand-success"></div>
                <div class="color-swatch brand-info"></div>
                <div class="color-swatch brand-warning"></div>
                <div class="color-swatch brand-danger"></div>
            </div>
        </div>
    </div>

    <h1 id="content_buttons">Buttons</h1>
    <div class="row">
        <div class="col-xs-8">
            <button type="button" class="btn">Default</button>
            <!-- Standard button -->
            <button type="button" class="btn btn-default">Default</button>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-cancel">Primary</button>
            <!-- Indicates a successful or positive action -->
            <button type="button" class="btn btn-success">Success</button>
            <!-- Contextual button for informational alert messages -->
            <button type="button" class="btn btn-info">Info</button>
            <!-- Indicates caution should be taken with this action -->
            <button type="button" class="btn btn-warning">Warning</button>
            <!-- Indicates a dangerous or potentially negative action -->
            <button type="button" class="btn btn-danger">Danger</button>
            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
            <button type="button" class="btn btn-link">Link</button>
        </div>
    </div>

    <h2 id="button_state">Button state</h2>
    <div class="row">
        <div class="col-xs-8">
            <?php
            $buttons = array("default", "primary", "cancel", "success", "info", "warning", "danger", "link")
            ?>
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php $i = 1;
                    foreach ($buttons as $key => $value) {
                        ?>
                        <li role="presentation"<?php if ($i == 2) echo " class=\"active\""; ?>>
                            <a href="#btn_<?php echo $value; ?>" aria-controls="btn_<?php echo $value; ?>" role="tab" data-toggle="tab"><?php echo $value; ?></a>
                        </li>
                        <?php
                        $i++;
                    } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php $i = 1;
                    foreach ($buttons as $key => $value) {
                        ?>
                        <div role="tabpanel" class="tab-pane<?php if ($i == 2) echo " active"; ?>" id="btn_<?php echo $value; ?>">
                            <div class="row">
                                <div class="col-xs-12">
                                    <br>
                                    normal <br>
                                    <a class="btn btn-<?php echo $value; ?>" href="#" role="button">Купить</a>
                                    <button class="btn btn-<?php echo $value; ?>" type="submit">Button</button>
                                    <input class="btn btn-<?php echo $value; ?>" type="button" value="Input">
                                    <input class="btn btn-<?php echo $value; ?>" type="submit" value="Submit">
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    hover / focus <br>
                                    <a class="btn btn-<?php echo $value; ?> focus" href="#" role="button">Link</a>
                                    <button class="btn btn-<?php echo $value; ?> focus" type="submit">Button</button>
                                    <input class="btn btn-<?php echo $value; ?> focus" type="button" value="Input">
                                    <input class="btn btn-<?php echo $value; ?> focus" type="submit" value="Submit">
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    down / active <br>
                                    <a class="btn btn-<?php echo $value; ?> active" href="#" role="button">Link</a>
                                    <button class="btn btn-<?php echo $value; ?> active" type="submit">Button</button>
                                    <input class="btn btn-<?php echo $value; ?> active" type="button" value="Input">
                                    <input class="btn btn-<?php echo $value; ?> active" type="submit" value="Submit">
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    disabled <br>
                                    <a class="btn btn-<?php echo $value; ?> disabled" href="#" role="button">Link</a>
                                    <button class="btn btn-<?php echo $value; ?>" disabled="disabled" type="submit">Button</button>
                                    <input class="btn btn-<?php echo $value; ?>" disabled="disabled" type="button" value="Input">
                                    <input class="btn btn-<?php echo $value; ?>" disabled="disabled" type="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <h2 id="button_size">Button size</h2>
    <div class="row">
        <div class="col-xs-8">
            <p>
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-default btn-lg">Large button</button>
            </p>
            <p>
                <button type="button" class="btn btn-primary">Default button</button>
                <button type="button" class="btn btn-default">Default button</button>
            </p>
            <p>
                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                <button type="button" class="btn btn-default btn-sm">Small button</button>
            </p>
        </div>
    </div>

    <h2 id="btn-block">Button block</h2>
    <div class="row">
        <div class="col-xs-4">
            <button type="button" class="btn btn-primary btn-sm btn-block">Block level button</button>
            <button type="button" class="btn btn-default btn-sm btn-block">Block level button</button>
        </div>
    </div>

    <h1 id="controls">Supported controls</h1>
    <div class="row">
        <div class="col-xs-8">
            <form action="#">
                <h2 id="inputs">Inputs</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Text input">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="text">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="datetime" class="form-control" placeholder="datetime">
                </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" placeholder="datetime-local">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="date">
                </div>
                <div class="form-group">
                    <input type="month" class="form-control" placeholder="month">
                </div>
                <div class="form-group">
                    <input type="time" class="form-control" placeholder="time">
                </div>
                <div class="form-group">
                    <input type="week" class="form-control" placeholder="week">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="number">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="url" class="form-control" placeholder="url">
                </div>
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="search">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="tel">
                </div>
                <div class="form-group">
                    <input type="color" class="form-control" placeholder="color">
                </div>

                <h2 id="textarea">Textarea</h2>
                <div class="form-group">
                    <textarea class="form-control" placeholder="textarea"></textarea>
                </div>

                <h2 id="switchers">Checkboxes and radios</h2>
                <div data-toggle="buttons">
                    <div class="checkbox">
                        <label class="btn">
                            <input type="checkbox" value="">
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="checkbox disabled">
                        <label class="btn">
                            <input type="checkbox" value="" disabled>
                            Option two is disabled
                        </label>
                    </div>
                </div>

                <div data-toggle="buttons">
                    <div class="radio">
                        <label class="btn">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label class="btn">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label class="btn">
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                            Option three is disabled
                        </label>
                    </div>
                </div>
                <br>

                <div> <!-- data-toggle="buttons" -->
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                    </label>
                </div>
                <br>
                <div> <!-- data-toggle="buttons" -->
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                    </label>
                </div>
                <br>

                <div class="checkbox" data-toggle="buttons">
                    <label class="btn">
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </label>
                </div>
                <div class="radio" data-toggle="buttons">
                    <label class="btn">
                        <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                    </label>
                </div>
                <br>

                <h2 id="selects">Selects</h2>
                <div class="form-group">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <h2 id="static">Static control</h2>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">email@example.com</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h1 id="form-sizes">Control sizing</h1>
    <h2 id="height-sizing">Height sizing</h2>
    <div class="row">
        <div class="col-xs-8">
            <form action="#">
                <div class="form-group">
                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Default input">
                </div>
                <div class="form-group">
                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                </div>
                <div class="form-group">
                    <select class="form-control input-lg">
                        <option value="">Lorem ipsum dolor sit.</option>
                        <option value="">Tenetur, sequi! Sapiente, quibusdam?</option>
                        <option value="">Excepturi molestias facere blanditiis.</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option value="">Lorem ipsum dolor sit.</option>
                        <option value="">Perferendis sit maxime illum?</option>
                        <option value="">Facere ipsam ut modi!</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control input-sm">
                        <option value="">Lorem ipsum dolor sit.</option>
                        <option value="">Illo iste, harum nihil.</option>
                        <option value="">Sit animi non aperiam.</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <form class="form-horizontal">
                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h2 id="width-sizing">Column sizing</h2>
    <form action="#">
        <div class="row">
            <div class="col-xs-2">
                <input type="text" class="form-control" placeholder=".col-xs-2">
            </div>
            <div class="col-xs-3">
                <input type="text" class="form-control" placeholder=".col-xs-3">
            </div>
            <div class="col-xs-4">
                <input type="text" class="form-control" placeholder=".col-xs-4">
            </div>
        </div>
    </form>

    <h1 id="states">States</h1>
    <div class="row">
        <div class="col-xs-8">
            <form action="#">
                <h2 id="focus">Focus state</h2>
                <div class="form-group">
                    <input type="text" class="form-control focus" placeholder="Click me!">
                </div>

                <h2 id="dis">Disabled state</h2>
                <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                </div>
                <br>
                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledTextInput">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="form-group">
                        <label for="disabledSelect">Disabled select menu</label>
                        <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                        </select>
                    </div>
                    <div class="checkbox" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox"> Can't check this
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>

                <h2 id="read">Readonly state</h2>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                </div>

                <h2 id="val">Validation states</h2>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess1">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">Input with warning</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div>
                <div class="form-group has-error">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>
                <div class="has-success">
                    <div class="checkbox" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" id="checkboxSuccess" value="option1">
                            Checkbox with success
                        </label>
                    </div>
                </div>
                <div class="has-warning">
                    <div class="checkbox" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" id="checkboxWarning" value="option1">
                            Checkbox with warning
                        </label>
                    </div>
                </div>
                <div class="has-error">
                    <div class="checkbox" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" id="checkboxError" value="option1">
                            Checkbox with error
                        </label>
                    </div>
                </div>

                <h2 id="opt">Optional icons</h2>
                <div class="form-group has-success has-feedback">
                    <label class="control-label" for="inputSuccess2">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                <div class="form-group has-warning has-feedback">
                    <label class="control-label" for="inputWarning2">Input with warning</label>
                    <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                    <span id="inputWarning2Status" class="sr-only">(warning)</span>
                </div>
                <div class="form-group has-error has-feedback">
                    <label class="control-label" for="inputError2">Input with error</label>
                    <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span id="inputError2Status" class="sr-only">(error)</span>
                </div>
                <div class="form-group has-success has-feedback">
                    <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                    </div>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                </div>

                <h2 id="contextual-colors">Contextual colos</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-info">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-warning">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                <h2 id="contextual-backgrounds">Contextual backgrounds</h2>
                <p class="bg-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="bg-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="bg-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="bg-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="bg-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </form>
        </div>
    </div>


    <h1 id="forms">Forms</h1>
    <div class="row">
        <div class="col-xs-6">
            <form action="#" id="form-basic">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox" data-toggle="buttons">
                    <label class="btn">
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    <h2 id="form-inline">Inline</h2>
    <div class="row">
        <div class="col-xs-12">
            <form action="#" class="form-inline">
                <div class="form-group">
                    <label for="exampleInputName2">Name</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                </div>
                <button type="submit" class="btn btn-default">Send invitation</button>
            </form><br>
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
                <div class="checkbox" data-toggle="buttons">
                    <label class="btn">
                        <input type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
            </form><br>
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Transfer cash</button>
            </form>
        </div>
    </div>
    <h2 id="form-horizontal">Horizontal</h2>
    <div class="row">
        <div class="col-xs-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <div class="checkbox" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>

    <h1 id="typography">Typography - Heading 1 <small id="heading">Secondary text</small> </h1>
    <div class="row">
        <div class="col-xs-8">
            <h2>Heading 2 <small>Secondary text</small> </h2>
            <h3>Heading 3 <small>Secondary text</small> </h3>
            <h4>Heading 4 <small>Secondary text</small> </h4>
            <h5>Heading 5 <small>Secondary text</small> </h5>
            <h6>Heading 6 <small>Secondary text</small> </h6>
            <p id="inline">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam hic expedita sint rerum sit quibusdam nisi, esse. Possimus ipsam et, rerum ipsum excepturi cumque laudantium sed quos, totam, repellat aspernatur? <br>
                <mark>Lorem ipsum</mark> dolor sit amet, <del>consectetur adipisicing elit</del>. Atque odit <s>quos quam</s> illum ipsum, <ins>similique beatae</ins> ea <u>possimus mollitia</u> fuga <small>hic sunt repellendus</small>, vitae <strong>labore distinctio</strong> provident <em>quaerat odio</em> voluptatum!<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem earum dolorem nobis nemo consectetur alias aperiam cupiditate atque similique, reprehenderit. Expedita sapiente alias eos, quo porro, enim rerum. Cumque, consectetur.<br>
            </p>
            <br>
            <p id="alignment" class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="text-left">Left aligned text.</p>
            <p class="text-center">Center aligned text.</p>
            <p class="text-right">Right aligned text.</p>
            <p class="text-justify">Justified text.</p>
            <p class="text-nowrap">No wrap text.</p>
            <br>
            <p id="transformation" class="text-lowercase">Lowercased text.</p>
            <p class="text-uppercase">Uppercased text.</p>
            <p class="text-capitalize">Capitalized text.</p>
            <br>
            <abbr id="abbreviations" title="attribute">attr</abbr>
            <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
            <br>
            <address id="addresses">
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address><br>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            <br>
            <blockquote id="blockquotes">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <br>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <br>
            <blockquote class="blockquote-reverse">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <br>
            <br>
        </div>
    </div>

    <h1 id="lists">Lists</h1>
    <div class="row">
        <div class="col-xs-8">
            <ul>
                <li id="unordered">Lorem ipsum dolor sit.</li>
                <li>Soluta consequatur facere, eveniet.</li>
                <li>Totam labore, ab suscipit?</li>
                <li>
                    Lorem ipsum dolor sit.
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Reiciendis est repellat doloribus, aliquid?</li>
                        <li>Laboriosam sint porro perspiciatis doloremque.</li>
                    </ul>
                </li>
                <li>Lorem ipsum dolor.</li>
                <li>Excepturi quam, dignissimos.</li>
                <li>Deserunt, similique, tempore.</li>
                <li>Error, nemo exercitationem!</li>
            </ul><br>
            <br>
            <ol id="ordered">
                <li>Lorem ipsum dolor sit.</li>
                <li>Soluta consequatur facere, eveniet.</li>
                <li>Totam labore, ab suscipit?</li>
                <li>
                    Lorem ipsum dolor sit.
                    <ol>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Reiciendis est repellat doloribus, aliquid?</li>
                        <li>Laboriosam sint porro perspiciatis doloremque.</li>
                    </ol>
                </li>
                <li>Lorem ipsum dolor.</li>
                <li>Excepturi quam, dignissimos.</li>
                <li>Deserunt, similique, tempore.</li>
                <li>Error, nemo exercitationem!</li>
            </ol><br>
            <br>
            <ul id="unstyled" class="list-unstyled">
                <li>Lorem ipsum dolor sit.</li>
                <li>Soluta consequatur facere, eveniet.</li>
                <li>Totam labore, ab suscipit?</li>
                <li>
                    Lorem ipsum dolor sit.
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Reiciendis est repellat doloribus, aliquid?</li>
                        <li>Laboriosam sint porro perspiciatis doloremque.</li>
                    </ul>
                </li>
                <li>Lorem ipsum dolor.</li>
                <li>Excepturi quam, dignissimos.</li>
                <li>Deserunt, similique, tempore.</li>
                <li>Error, nemo exercitationem!</li>
            </ul><br>
            <br>
            <ul id="inline-list" class="list-inline">
                <li>Lorem ipsum dolor sit.</li>
                <li>Soluta consequatur facere, eveniet.</li>
                <li>Totam labore, ab suscipit?</li>
                <li>Lorem ipsum dolor.</li>
                <li>Excepturi quam, dignissimos.</li>
                <li>Deserunt, similique, tempore.</li>
                <li>Error, nemo exercitationem!</li>
            </ul><br>
            <br>
        </div>
    </div>

    <h1 id="descr">Descriptions</h1>
    <div class="row">
        <div class="col-xs-8">
            <dl>
                <dt>Lorem ipsum.</dt>
                <dd>Lorem ipsum dolor sit amet.</dd>
                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor natus, nostrum, distinctio accusamus nesciunt deleniti.</dd>
                <dt>Vel, sapiente.</dt>
                <dd>Sunt fugiat nulla temporibus pariatur.</dd>
                <dt>Magnam, delectus.</dt>
                <dd>Ipsa nostrum odio cumque, blanditiis.</dd>
                <dt>Sed, accusamus.</dt>
                <dd>Nemo atque nisi eligendi, dicta?</dd>
            </dl><br>
            <br>
            <dl id="horizontal" class="dl-horizontal">
                <dt>Lorem ipsum.</dt>
                <dd>Lorem ipsum dolor sit amet.</dd>
                <dt>Sapiente, ea.</dt>
                <dd>Nihil voluptatem provident iusto asperiores.</dd>
                <dt>Magni, iure!</dt>
                <dd>Minima alias ab quisquam expedita.</dd>
                <dt>Ipsam, saepe.</dt>
                <dd>Quaerat rerum labore repellendus sint?</dd>
            </dl><br>
            <br>
        </div>
    </div>

    <h1 id="images">Images</h1>
    <div class="row">
        <div class="col-xs-12">
            <img src="" data-src="holder.js/140x140/text:responsive" class="img-responsive" alt="Responsive image"><br>
            <img src="" data-src="holder.js/140x140/text:rounded" alt="" class="img-rounded">
            <img src="" data-src="holder.js/140x140/text:circle" alt="" class="img-circle">
            <img src="" data-src="holder.js/140x140/text:thumbnail" alt="" class="img-thumbnail">
        </div>
    </div>


    <h1 id="icons">Icons</h1>
    <h2 id="glyphicons">Glyphicons</h2>
    <div class="row">
        <div class="col-xs-10">
            <?php $icons = array("asterisk", "plus", "euro", "eur", "minus", "cloud", "envelope", "pencil", "glass", "music", "search", "heart", "star", "star-empty", "user", "film", "th-large", "th", "th-list", "ok", "remove", "zoom-in", "zoom-out", "off", "signal", "cog", "trash", "home", "file", "time", "road", "download-alt", "download", "upload", "inbox", "play-circle", "repeat", "refresh", "list-alt", "lock", "flag", "headphones", "volume-off", "volume-down", "volume-up", "qrcode", "barcode", "tag", "tags", "book", "bookmark", "print", "camera", "font", "bold", "italic", "text-height", "text-width", "align-left", "align-center", "align-right", "align-justify", "list", "indent-left", "indent-right", "facetime-video", "picture", "map-marker", "adjust", "tint", "edit", "share", "check", "move", "step-backward", "fast-backward", "backward", "play", "pause", "stop", "forward", "fast-forward", "step-forward", "eject", "chevron-left", "chevron-right", "plus-sign", "minus-sign", "remove-sign", "ok-sign", "question-sign", "info-sign", "screenshot", "remove-circle", "ok-circle", "ban-circle", "arrow-left", "arrow-right", "arrow-up", "arrow-down", "share-alt", "resize-full", "resize-small", "exclamation-sign", "gift", "leaf", "fire", "eye-open", "eye-close", "warning-sign", "plane", "calendar", "random", "comment", "magnet", "chevron-up", "chevron-down", "retweet", "shopping-cart", "folder-close", "folder-open", "resize-vertical", "resize-horizontal", "hdd", "bullhorn", "bell", "certificate", "thumbs-up", "thumbs-down", "hand-right", "hand-left", "hand-up", "hand-down", "circle-arrow-right", "circle-arrow-left", "circle-arrow-up", "circle-arrow-down", "globe", "wrench", "tasks", "filter", "briefcase", "fullscreen", "dashboard", "paperclip", "heart-empty", "link", "phone", "pushpin", "usd", "gbp", "sort", "sort-by-alphabet", "sort-by-alphabet-alt", "sort-by-order", "sort-by-order-alt", "sort-by-attributes", "sort-by-attributes-alt", "unchecked", "expand", "collapse-down", "collapse-up", "log-in", "flash", "log-out", "new-window", "record", "save", "open", "saved", "import", "export", "send", "floppy-disk", "floppy-saved", "floppy-remove", "floppy-save", "floppy-open", "credit-card", "transfer", "cutlery", "header", "compressed", "earphone", "phone-alt", "tower", "stats", "sd-video", "hd-video", "subtitles", "sound-stereo", "sound-dolby", "sound-5-1", "sound-6-1", "sound-7-1", "copyright-mark", "registration-mark", "cloud-download", "cloud-upload", "tree-conifer", "tree-deciduous", "cd", "save-file", "open-file", "level-up", "copy", "paste", "alert", "equalizer", "king", "queen", "pawn", "bishop", "knight", "baby-formula", "tent", "blackboard", "bed", "apple", "erase", "hourglass", "lamp", "duplicate", "piggy-bank", "scissors", "bitcoin", "yen", "ruble", "scale", "ice-lolly", "ice-lolly-tasted", "education", "option-horizontal", "option-vertical", "menu-hamburger", "modal-window", "oil", "grain", "sunglasses", "text-size", "text-color", "text-background", "object-align-top", "object-align-bottom", "object-align-horizontal", "object-align-left", "object-align-vertical", "object-align-right", "triangle-right", "triangle-left", "triangle-bottom", "triangle-top", "console", "superscript", "subscript", "menu-left", "menu-right", "menu-down", "menu-up");
            foreach ($icons as $key => $value) { ?>
            <div class="icon">
                <span class="glyphicon glyphicon-<?php echo $value; ?>"></span>
                <span class="name">glyphicon-<?php echo $value; ?></span>
            </div>
            <?php } ?>
        </div>
    </div>
    <h2 id="font_awesome">Font Awesome</h2>
    <div class="row">
        <div class="col-xs-10">
            <?php $icons = array("glass", "music", "search", "envelope-o", "heart", "star", "star-o", "user", "film", "th-large", "th", "th-list", "check", "remove", "close", "times", "search-plus", "search-minus", "power-off", "signal", "gear", "cog", "trash-o", "home", "file-o", "clock-o", "road", "download", "arrow-circle-o-down", "arrow-circle-o-up", "inbox", "play-circle-o", "rotate-right", "repeat", "refresh", "list-alt", "lock", "flag", "headphones", "volume-off", "volume-down", "volume-up", "qrcode", "barcode", "tag", "tags", "book", "bookmark", "print", "camera", "font", "bold", "italic", "text-height", "text-width", "align-left", "align-center", "align-right", "align-justify", "list", "dedent", "outdent", "indent", "video-camera", "photo", "image", "picture-o", "pencil", "map-marker", "adjust", "tint", "edit", "pencil-square-o", "share-square-o", "check-square-o", "arrows", "step-backward", "fast-backward", "backward", "play", "pause", "stop", "forward", "fast-forward", "step-forward", "eject", "chevron-left", "chevron-right", "plus-circle", "minus-circle", "times-circle", "check-circle", "question-circle", "info-circle", "crosshairs", "times-circle-o", "check-circle-o", "ban", "arrow-left", "arrow-right", "arrow-up", "arrow-down", "mail-forward", "share", "expand", "compress", "plus", "minus", "asterisk", "exclamation-circle", "gift", "leaf", "fire", "eye", "eye-slash", "warning", "exclamation-triangle", "plane", "calendar", "random", "comment", "magnet", "chevron-up", "chevron-down", "retweet", "shopping-cart", "folder", "folder-open", "arrows-v", "arrows-h", "bar-chart-o", "bar-chart", "twitter-square", "facebook-square", "camera-retro", "key", "gears", "cogs", "comments", "thumbs-o-up", "thumbs-o-down", "star-half", "heart-o", "sign-out", "linkedin-square", "thumb-tack", "external-link", "sign-in", "trophy", "github-square", "upload", "lemon-o", "phone", "square-o", "bookmark-o", "phone-square", "twitter", "facebook", "github", "unlock", "credit-card", "rss", "hdd-o", "bullhorn", "bell", "certificate", "hand-o-right", "hand-o-left", "hand-o-up", "hand-o-down", "arrow-circle-left", "arrow-circle-right", "arrow-circle-up", "arrow-circle-down", "globe", "wrench", "tasks", "filter", "briefcase", "arrows-alt", "group", "users", "chain", "link", "cloud", "flask", "cut", "scissors", "copy", "files-o", "paperclip", "save", "floppy-o", "square", "navicon", "reorder", "bars", "list-ul", "list-ol", "strikethrough", "underline", "table", "magic", "truck", "pinterest", "pinterest-square", "google-plus-square", "google-plus", "money", "caret-down", "caret-up", "caret-left", "caret-right", "columns", "unsorted", "sort", "sort-down", "sort-desc", "sort-up", "sort-asc", "envelope", "linkedin", "rotate-left", "undo", "legal", "gavel", "dashboard", "tachometer", "comment-o", "comments-o", "flash", "bolt", "sitemap", "umbrella", "paste", "clipboard", "lightbulb-o", "exchange", "cloud-download", "cloud-upload", "user-md", "stethoscope", "suitcase", "bell-o", "coffee", "cutlery", "file-text-o", "building-o", "hospital-o", "ambulance", "medkit", "fighter-jet", "beer", "h-square", "plus-square", "angle-double-left", "angle-double-right", "angle-double-up", "angle-double-down", "angle-left", "angle-right", "angle-up", "angle-down", "desktop", "laptop", "tablet", "mobile-phone", "mobile", "circle-o", "quote-left", "quote-right", "spinner", "circle", "mail-reply", "reply", "github-alt", "folder-o", "folder-open-o", "smile-o", "frown-o", "meh-o", "gamepad", "keyboard-o", "flag-o", "flag-checkered", "terminal", "code", "mail-reply-all", "reply-all", "star-half-empty", "star-half-full", "star-half-o", "location-arrow", "crop", "code-fork", "unlink", "chain-broken", "question", "info", "exclamation", "superscript", "subscript", "eraser", "puzzle-piece", "microphone", "microphone-slash", "shield", "calendar-o", "fire-extinguisher", "rocket", "maxcdn", "chevron-circle-left", "chevron-circle-right", "chevron-circle-up", "chevron-circle-down", "html5", "css3", "anchor", "unlock-alt", "bullseye", "ellipsis-h", "ellipsis-v", "rss-square", "play-circle", "ticket", "minus-square", "minus-square-o", "level-up", "level-down", "check-square", "pencil-square", "external-link-square", "share-square", "compass", "toggle-down", "caret-square-o-down", "toggle-up", "caret-square-o-up", "toggle-right", "caret-square-o-right", "euro", "eur", "gbp", "dollar", "usd", "rupee", "inr", "cny", "rmb", "yen", "jpy", "ruble", "rouble", "rub", "won", "krw", "bitcoin", "btc", "file", "file-text", "sort-alpha-asc", "sort-alpha-desc", "sort-amount-asc", "sort-amount-desc", "sort-numeric-asc", "sort-numeric-desc", "thumbs-up", "thumbs-down", "youtube-square", "youtube", "xing", "xing-square", "youtube-play", "dropbox", "stack-overflow", "instagram", "flickr", "adn", "bitbucket", "bitbucket-square", "tumblr", "tumblr-square", "long-arrow-down", "long-arrow-up", "long-arrow-left", "long-arrow-right", "apple", "windows", "android", "linux", "dribbble", "skype", "foursquare", "trello", "female", "male", "gittip", "sun-o", "moon-o", "archive", "bug", "vk", "weibo", "renren", "pagelines", "stack-exchange", "arrow-circle-o-right", "arrow-circle-o-left", "toggle-left", "caret-square-o-left", "dot-circle-o", "wheelchair", "vimeo-square", "turkish-lira", "try", "plus-square-o", "space-shuttle", "slack", "envelope-square", "wordpress", "openid", "institution", "bank", "university", "mortar-board", "graduation-cap", "yahoo", "google", "reddit", "reddit-square", "stumbleupon-circle", "stumbleupon", "delicious", "digg", "pied-piper", "pied-piper-alt", "drupal", "joomla", "language", "fax", "building", "child", "paw", "spoon", "cube", "cubes", "behance", "behance-square", "steam", "steam-square", "recycle", "automobile", "car", "cab", "taxi", "tree", "spotify", "deviantart", "soundcloud", "database", "file-pdf-o", "file-word-o", "file-excel-o", "file-powerpoint-o", "file-photo-o", "file-picture-o", "file-image-o", "file-zip-o", "file-archive-o", "file-sound-o", "file-audio-o", "file-movie-o", "file-video-o", "file-code-o", "vine", "codepen", "jsfiddle", "life-bouy", "life-buoy", "life-saver", "support", "life-ring", "circle-o-notch", "ra", "rebel", "ge", "empire", "git-square", "git", "hacker-news", "tencent-weibo", "qq", "wechat", "weixin", "send", "paper-plane", "send-o", "paper-plane-o", "history", "circle-thin", "header", "paragraph", "sliders", "share-alt", "share-alt-square", "bomb", "soccer-ball-o", "futbol-o", "tty", "binoculars", "plug", "slideshare", "twitch", "yelp", "newspaper-o", "wifi", "calculator", "paypal", "google-wallet", "cc-visa", "cc-mastercard", "cc-discover", "cc-amex", "cc-paypal", "cc-stripe", "bell-slash", "bell-slash-o", "trash", "copyright", "at", "eyedropper", "paint-brush", "birthday-cake", "area-chart", "pie-chart", "line-chart", "lastfm", "lastfm-square", "toggle-off", "toggle-on", "bicycle", "bus", "ioxhost", "angellist", "cc", "shekel", "sheqel", "ils", "meanpath");
            foreach ($icons as $key => $value) { ?>
            <div class="icon">
                <i class="fa fa-<?php echo $value; ?>"></i>
                <span class="name">fa-<?php echo $value; ?></span>
            </div>
            <?php } ?>
        </div>
    </div>


    <h1 id="sprites">Sprites</h1>
    <h2 id="sprite-full-image">Full image</h2>
    <div class="row">
        <div class="col-xs-10">
            <img src="<?php echo SITE_TEMPLATE_PATH; ?>/imgs/sprite.png" alt="Sprites" class="sprite-full">
        </div>
    </div>
    <h2 id="sprite-one-by-one">One by one</h2>
    <div class="row">
        <div class="col-xs-10">
            <?php $icons = array(
                "show_cart",
                "right_arrow",
                "left_arrow"
            );
            foreach ($icons as $key => $value) { ?>
            <div class="icon icon-sprite">
                <i class="<?php echo $value; ?>"></i>
                <span class="name"><?php echo $value; ?></span>
            </div>
            <?php } ?>
        </div>
    </div>
    <h2 id="svg">SVG Sprite</h2>
    <div class="row">
        <div class="col-xs-10">
<!--            <img src="--><?php //echo SITE_TEMPLATE_PATH; ?><!--/imgs/svg-sprite.svg" alt="" class="img-responsive">-->
        </div>
    </div>
</div>

<?php require("../footer.php") ?>


