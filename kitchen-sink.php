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

        <nav class="navbar navbar-toggleable-md navbar-dark bg-dark sticky-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Bootstrap 4 Kitchen Sink</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#layout">Layout</a></li>
                <li class="nav-item"><a class="nav-link" href="#components">Components</a></li>
                <li class="nav-item"><a class="nav-link" href="#utilities">Utilities</a></li>
                </ul>
            </div>
        </nav>


        <div class="container-fluid">


            <h2 id="layout">Layout</h2>
            <div class="row">
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 1
            #########################################
            -->

                <h3>Media Object</h3>
                <div class="media">
                    <img class="d-flex mr-3" src="https://dummyimage.com/60x60/563d7c/fff" alt="Generic placeholder image">
                    <div class="media-body">
                    <h5 class="mt-0">Media heading</h5> Media object description text

                    <div class="media mt-3">
                        <a class="d-flex pr-3" href="#">
                        <img src="https://dummyimage.com/60x60/563d7c/fff" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                        <h5 class="mt-0">Media heading</h5> Media object description text
                        </div>
                    </div>
                    </div>
                </div>


                </div>
                <!--  /.col    -->
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 2
            #########################################
            -->

                <h3>Grid System</h3>

                <div class="container example">
                    <div class="row">
                    <div class="col">
                        <img src="https://dummyimage.com/300x100/563d7c/fff&text=.col" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="https://dummyimage.com/300x100/563d7c/fff&text=.col" class="img-fluid">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <img src="https://dummyimage.com/300x100/563d7c/fff&text=.col" class="img-fluid">

                    </div>
                    <div class="col">
                        <img src="https://dummyimage.com/300x100/563d7c/fff&text=.col" class="img-fluid">

                    </div>
                    <div class="col">
                        <img src="https://dummyimage.com/300x100/563d7c/fff&text=.col" class="img-fluid">

                    </div>
                    </div>
                </div>

                <br />
                <pre>&lt;div class="container"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;.col&lt;/div&gt;
                &lt;div class="col"&gt;.col&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;.col&lt;/div&gt;
                &lt;div class="col"&gt;.col&lt;/div&gt;
                &lt;div class="col"&gt;.col&lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            </pre>

                <p class="highlight"><strong>Tip!</strong> CRC = .container > .row > .col</p>


                </div>
                <!--  /.col    -->


            </div>
            <!--  /.row    -->


            <h2>Content</h2>
            <div class="row">
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 1
            #########################################
            -->
                <h3>Display Headings</h3>
                <h1 class="display-1">Display 1</h1>
                <h1 class="display-2">Display 2</h1>
                <h1 class="display-3">Display 3</h1>
                <h1 class="display-4">Display 4</h1>


                <h3>Muted Text Class</h3>
                <h3>
            Heading Text
            <small class="text-light">With muted secondary text</small>
            </h3>


                <h3>Blockquote</h3>
                <blockquote class="blockquote">
                    <p class="mb-0">Typography is to literature as musical performance is to composition: an essential act of interpretation, full of endless opportunities for insight or obtuseness.</p>
                    <footer class="blockquote-footer">Robert Bringhurst in <cite title="Source Title">The Elements of Typographic Style</cite></footer>
                </blockquote>


                <h3>Table</h3>

                <table class="table ">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>thead-dark</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nina</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Penta</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Santa Maria</td>
                    </tr>
                    </tbody>
                </table>


                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>thead-light</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nina</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Penta</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Santa Maria</td>
                    </tr>
                    </tbody>
                </table>


                </div>
                <!--  /.col    -->
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 2
            #########################################
            -->
                <h3>Lead</h3>

                <p class="lead">A lead paragraph is used to draw a reader into the body copy. In a badly designed book, the letters mill and stand like starving horses in a field. In a book designed by rote, they sit like stale bread and mutton on the page.</p>
                <p>In a well-made book, where designer, compositor and printer have all done their jobs, no matter how many thousands of lines and pages, the letters are alive. They dance in their seats. Sometimes they rise and dance in the margins and aisles.</p>

                <h3>Unstyled List</h3>
                <ul class="list-unstyled">
                    <li>Unstyled list item text</li>
                    <li>Unstyled list item text
                    <ul>
                        <li>Nested list items need the <code>.list-unstyled</code> class as well or they will have bullets</li>
                    </ul>
                    </li>
                    <li>Unstyled list item text</li>
                    <li>Unstyled list item text</li>
                </ul>


                <h3>Inline List</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">List item one</li>
                    <li class="list-inline-item">List item two</li>
                    <li class="list-inline-item">List item three</li>
                </ul>


                <h3>Description List</h3>
                <dl class="row">


                    <dt class="col-sm-3">Long title that <strong>is not</strong> truncated or shortened</dt>
                    <dd class="col-sm-9">Definition list description etiam porta sem malesuada magna mollis euismod.</dd>

                    <dt class="col-sm-3 text-truncate">Long title that <strong>is</strong> truncated or shortened</dt>
                    <dd class="col-sm-9">Definition list description etiam porta sem malesuada magna mollis euismod.</dd>

                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9">
                    <dl class="row">
                        <dt class="col-sm-4">Nested definition list</dt>
                        <dd class="col-sm-8">Definition list description etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                    </dd>
                </dl>


                <h3>Image Thumbnails</h3>
                <img src="https://dummyimage.com/80x80/563d7c/fff" alt="" class="img-thumbnail">
                <img src="https://dummyimage.com/80x80/563d7c/fff" alt="" class="img-thumbnail">
                <img src="https://dummyimage.com/80x80/563d7c/fff" alt="" class="img-thumbnail">

                <h3>Figure</h3>
                <figure class="figure">
                    <img src="https://dummyimage.com/400x200/563d7c/fff" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption">Figure caption description text</figcaption>
                </figure>

                </div>
                <!--  /.col    -->
            </div>
            <!--  /.row    -->


            <h2 id="components">Components</h2>
            <div class="row">
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 1
            #########################################
            -->

                <h3>Alert</h3>


            <div class="alert alert-primary" role="alert">
            This is a primary alert
            </div>
            <div class="alert alert-secondary" role="alert">
            This is a secondary alert
            </div>
            <div class="alert alert-success" role="alert">
            This is a success alert
            </div>
            <div class="alert alert-danger" role="alert">
            This is a danger alert
            </div>
            <div class="alert alert-warning" role="alert">
            This is a warning alert
            </div>
            <div class="alert alert-info" role="alert">
            This is a info alert
            </div>
            <div class="alert alert-light" role="alert">
            This is a light alert
            </div>
            <div class="alert alert-dark" role="alert">
            This is a dark alert
            </div>





                <h3>Badge</h3>

                <p>Example heading <span class="badge badge-primary">.badge-primary</span></p>
                <p>Example heading <span class="badge badge-secondary">badge-secondary</span></p>


                <h3>Popover</h3>


                <a tabindex="0" class="btn btn-lg btn-primary" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Popover on click</a>

                <br /><br /><br />
                <button type="button" class="btn btn-lg btn-primary" data-toggle="popover" data-trigger="hover" data-delay="300" title="Popover title" data-content="Popover description text">Popover on hover</button>


                <h3>Card</h3>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top w-100" src="https://dummyimage.com/600x400/563d7c/fff" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


                <h3>Collapse - Accordian</h3>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordian Group Item #1
                    </a>
                </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <img src="https://dummyimage.com/200x200/563d7c/fff" alt="" class="img-thumbnail img-fluid">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                            <h2>Accordian Group Heading</h2> Accordian content description text.
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordian Group Item #2
                    </a>
                </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <img src="https://dummyimage.com/200x200/563d7c/fff" alt="" class="img-thumbnail img-fluid">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                            <h2>Accordian Group Heading</h2> Accordian content description text.
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordian Group Item #3
                    </a>
                </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                            <img src="https://dummyimage.com/200x200/563d7c/fff" alt="" class="img-thumbnail img-fluid">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                            <h2>Accordian Group Heading</h2> Accordian content description text.
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                        </div>
                    </div>
                    </div>
                </div>


                <h3>Input group</h3>


                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Products">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Search</button>
                </span>
                </div>

                <br />

                <div class="input-group input-group-lg">
                    <input type="email" class="form-control" placeholder="Email Address">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </span>
                </div>


                <h3>List group with Custom Content</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Don't Make Me Think</h5>
                        <small>20 Comments</small>
                    </div>
                    <p class="mb-1">Description text gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Category: Design</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Thinking with Type</h5>
                        <small class="text-secondary">3 Comments</small>
                    </div>
                    <p class="mb-1">Description text gravida at eget metus. Maecenas sed diam eget risus varius blandit</p>
                    <small class="text-secondary">Category: Design</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Design of Everyday Things</h5>
                        <small class="text-secondary">3 Comments</small>
                    </div>
                    <p class="mb-1">Description text gravida at eget metus. Maecenas sed diam eget risus varius blandit</p>
                    <small class="text-secondary">Category: Design</small>
                    </a>
                </div>


                <h3>Pills Nav</h3>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>

                <h3>Fill and Justify Pills Nav</h3>

                <div class=" ">
                    <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Longer nav link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    </ul>
                </div>

                <h3>Progress</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                </div>


                <h3>Buttons</h3>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->


                <div class="row">
                    <div class="col-sm-6">
                    <p><button type="button" class="btn btn-primary btn-sm">Primary</button></p>
                    <p><button type="button" class="btn btn-primary">Primary</button></p>
                    <p><button type="button" class="btn btn-primary btn-lg">Primary</button></p>

                    <p><button type="button" class="btn btn-secondary btn-sm">Secondary</button></p>
                    <p><button type="button" class="btn btn-secondary">Secondary</button></p>
                    <p><button type="button" class="btn btn-secondary btn-lg">Secondary</button></p>
                    <p><button type="button" class="btn btn-link">Link</button></p>
                    </div>
                    <!-- .col -->
                    <div class="col-sm-6">
                    <p><button type="button" class="btn btn-outline-primary btn-sm">Primary Outline</button></p>
                    <p><button type="button" class="btn btn-outline-primary">Primary Outline</button></p>
                    <p><button type="button" class="btn btn-outline-primary btn-lg">Primary Outline</button></p>

                    <p><button type="button" class="btn btn-outline-secondary btn-sm">Secondary Outline</button></p>
                    <p><button type="button" class="btn btn-outline-secondary">Secondary Outline</button></p>
                    <p><button type="button" class="btn btn-outline-secondary btn-lg">Secondary Outline</button></p>

                    </div>
                    <!-- .col -->
                </div>
                <!-- .row -->


                <h3>Button Group</h3>

                <p>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        </div>
                    </div>
                    </div>
                </p>

                <p>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        </div>
                    </div>
                    </div>
                </p>


                <p>
                    <div class="btn-group btn-group-lg" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        <a class="dropdown-item" href="#">Dropdown link</a>
                        </div>
                    </div>
                    </div>
                </p>


                <h3>Collapse</h3>
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Link with href
            </a>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Button with data-target
            </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>


                <h3>Tooltips</h3>
                <a href="#" data-toggle="tooltip" title="Some tooltip text!">Tooltip on top</a>

                <br /><br />

                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" data-html="true" title="<img src=https://dummyimage.com/100x80/563d7c/fff alt= class=img-thumbnail img-fluid><h4>Tooltip</h4> <u>with</u> <b>HTML</b>">
            HTML Tooltip on right
            </button>


                </div>
                <!--  /.col    -->
                <div class="col-sm-6">
                <!--
            #########################################
            COLUMN 2
            #########################################
            -->
                <h3>Breadcrumb</h3>
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Library</a>
                    <span class="breadcrumb-item active">Breadcrumb</span>
                </nav>


                <h3>Carousel</h3>
                <div id="carousel-name" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-name" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-name" data-slide-to="1"></li>
                    <li data-target="#carousel-name" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://dummyimage.com/900x340/563d7c/fff&text=+" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h3>Carousel Slider Title</h3>
                        <p>Description text to further describe the content of the slide image</p>
                        <a href="" class="btn btn-primary">Call to Action</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://dummyimage.com/900x340/563d7c/fff&text=+" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h3>Carousel Slider Title</h3>
                        <p>Description text to further describe the content of the slide image</p>
                        <a href="" class="btn btn-primary">Call to Action</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://dummyimage.com/900x340/563d7c/fff&text=+" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h3>Carousel Slider Title</h3>
                        <p>Description text to further describe the content of the slide image</p>
                        <a href="" class="btn btn-primary">Call to Action</a>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-name" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-name" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>


                <h3>Dropdowns</h3>

                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Large button
                </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    </div>
                    <!-- /btn-group -->
                    <div class="btn-group ml-2">
                    <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    </div>
                    <!-- /btn-group -->
                </div>
                <!-- /btn-toolbar -->

                <br><br>


                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Small button
                </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    </div>
                    <!-- /btn-group -->
                    <div class="btn-group ml-2">
                    <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    </div>
                    <!-- /btn-group -->
                </div>
                <!-- /btn-toolbar -->


                <h3>Modal</h3>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Launch demo modal
            </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                        </div>
                        <div class="modal-body">
                        <h2>Modal body heading</h2>
                        <p>Modal body text description</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>


                <h3>Navbar</h3>
                <nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <a class="navbar-brand" href="#">Navbar</a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        </li>
                    </ul>
                    </div>
                </nav>


                <h3>Jumbotron</h3>
                <div class="jumbotron">
                    <h1 class="display-3">Jumbotron</h1>
                    <p class="lead">A component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>

                <h3>List group</h3>
                <ul class="list-group">
                    <li class="list-group-item justify-content-between">
                    List group item #1
                    <span class="badge badge-secondary badge-pill">14</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                    List group item #2
                    <span class="badge badge-success badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                    List group item #3
                    <span class="badge badge-warning badge-pill">1</span>
                    </li>
                </ul>


                <h3>Base Nav</h3>
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>


                <h3>Vertical Nav</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>


                <h3>Tabs Nav</h3>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                    <a class="nav-link active" href="#tab-1" data-toggle="tab">Active</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#tab-2" data-toggle="tab">Tab 2</a>
                        <a class="dropdown-item" href="#tab-3" data-toggle="tab">Tab 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#tab-4" data-toggle="tab">Tab 4</a>

                    </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <br />
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-1" role="tabpanel">

                    <h5>Tab #1 Content</h5>
                    <p>Tab main content.</p>
                    </div>
                    <div class="tab-pane" id="tab-2" role="tabpanel">Tab #2 content</div>
                    <div class="tab-pane" id="tab-3" role="tabpanel">Tab #3 content</div>
                    <div class="tab-pane" id="tab-4" role="tabpanel">Tab #4 content</div>
                </div>


                <h3>Pagination</h3>
                <nav aria-label="...">
                    <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </nav>

                <nav aria-label="...">
                    <ul class="pagination pagination-lg">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </nav>


                <h3>Forms</h3>
                <form>

                    <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-light">No Spam.</small>
                        </div>

                        <div class="form-group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control" id="exampleSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
                        </div>

                        <fieldset class="form-group">
                        <legend>Radio buttons</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Option one
                </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                    Option two - disabled
                </label>
                        </div>
                        </fieldset>

                    </div>
                    <!-- /.col -->
                    <div class="col">

                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <small id="emailHelp" class="form-text text-light"><a href="">Forgot Password?</a> / <a href="">Sign Up</a></small>

                        </div>


                        <div class="form-group">
                        <label for="exampleSelect2">Multiple select</label>
                        <select multiple class="form-control" id="exampleSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
                        </div>


                        <div class="form-check">
                        <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Checkbox
                </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                <input type="checkbox" class="form-check-input" disabled>
                Checkbox - disabled
                </label>
                        </div>


                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="form-group">
                    <label for="exampleTextarea">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-light">Help message</small>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                <h3>Scrollspy</h3>
                <div class="bd-example">
                    <nav id="navbar-example2" class="navbar navbar-light bg-faded">
                    <a class="navbar-brand" href="#">Scrollspy</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="#description">Description</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#use">Use Cases</a></li>
                    </ul>
                    </nav>
                    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                    <h4 id="Description">Description</h4>
                    <p>The ScrollSpy plugin auto updates nav targets as you scroll the area below the navbar. Also works in dropdowns as well.</p>
                    <h4 id="use">Use Cases</h4>
                    <ul>
                        <li>For long pages of documentation</li>
                        <li>One page website with sticky top navbar</li>
                        <li>A grid of images for a portfolio that identifies categories as you scroll down the page. For example: print, web, photography, etc.</li>
                    </ul>

                    </div>
                </div>


                </div>
                <!--  /.col    -->
            </div>
            <!--  /.row    -->


            <h2 id="utilities">Utilities</h2>
            <div class="row">
                <!--
            #########################################
            COLUMN 1
            ######## -->
                <div class="col-sm-6">

                <h3>Border-radius</h3>


                <span class="demo-border rounded">.rounded</span>

                <span class="demo-border rounded-top">.rounded-top</span>

                <span class="demo-border rounded-right">.rounded-right</span>

                <span class="demo-border rounded-bottom">.rounded-bottom</span>

                <span class="demo-border rounded-left">.rounded-left</span>

                <span class="demo-border rounded-circle">.rounded-circle</span>
                <span class="demo-border rounded-0">.rounded-0</span>


                <h3>Border</h3>
                <span class="demo-border border-0">.border-0</span>
                <span class="demo-border border-top-0">.border-top-0</span>
                <span class="demo-border border-right-0">.border-right-0</span>
                <span class="demo-border border-bottom-0">.border-bottom-0</span>
                <span class="demo-border border-left-0">.border-left-0</span>


                </div>
                <!-- /.col -->
                <!--
            #########################################
            COLUMN 2
            ######## -->
                <div class="col-sm-6">

                <h3>Close icon</h3>
                <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>


                <h3>Colors</h3>

                <h4><a href="#" class="text-primary">.text-primary</a></h4>
                <h4><a href="#" class="text-secondary">.text-secondary</a></h4>
                <h4><a href="#" class="text-success">.text-success</a></h4>
                <h4><a href="#" class="text-danger">.text-danger</a></h4>
                <h4><a href="#" class="text-warning">.text-warning</a></h4>
                <h4><a href="#" class="text-info">.text-info</a></h4>
                <h4><a href="#" class="text-light">.text-light</a></h4>
                <h4><a href="#" class="text-dark">.text-dark</a></h4>
                <br>
                <p class="bg-primary text-white p-1">.bg-primary</p>
                <p class="bg-secondary text-white p-1">.bg-secondary</p>
                <p class="bg-success text-white p-1">.bg-success</p>
                <p class="bg-danger text-white p-1">.bg-danger</p>
                <p class="bg-warning text-white p-1">.bg-warning</p>
                <p class="bg-info text-white p-1">.bg-info</p>
                <p class="bg-light text-dark p-1">.bg-light</p>
                <p class="bg-dark text-white p-1">.bg-dark</p>
                <p class="bg-white p-1">.bg-white</p>

                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

            <footer>
                Created by <a href="https://bootstrapcreative.com/">BootstrapCreative</a>
            </footer>
        </div>
        <!--  /.container-fluid    -->
    </div>

    <script async defer src="./dist/site.js"></script>
</body>
</html>
