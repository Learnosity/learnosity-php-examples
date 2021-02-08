<?php

include_once '../env_config.php';
include_once 'includes/header.php';
?>

    <div class="jumbotron section index">
        <h1>Use Cases</h1>
        <div class="section-intro">
            <p>Combine multiple Learnosity products and APIs to build seamless use cases, from authoring all the way
                through to analytics.</p>
            <ul>
                <li><h4><a class="blue-chevron" href="#end-to-end-examples">End-to-end Examples</a></h4></li>
                <li><h4><a class="blue-chevron" href="#printing-examples">Printing Learnosity items</a></h4></li>
                <li><h4><a class="blue-chevron" href="#scoring-and-feedback-examples">Scoring & Feedback</a></h4></li>
                <li><h4><a class="blue-chevron" href="#custom-question-examples">Using Custom Questions</a></h4></li>
                <li><h4><a class="blue-chevron" href="#localization-examples">Localizing APIs to another language</a></h4></li>
                <li><h4><a class="blue-chevron" href="#miscellaneous-examples">Miscellaneous Examples</a></h4></li>
            </ul>
            </p>
        </div>

        <h3 id="end-to-end-examples">End-to-end Examples</h3>

        <p>Learn how to tie together our Authoring, Assessment and Analytics APIs for a seamless Learnosity-powered
            experience.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">End to End Example - from new content</h2>
                    </div>
                    <div class="panel-body">
                        <p>Learn how to tie Learnosity products together to create content from scratch, deliver it, and report!</p>
                        <p class="text-right">
                            <a class="demo_link" href="endtoend/authoring.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">End to End Example - with existing items</h2>
                    </div>
                    <div class="panel-body">
                        <p>Learn how to tie Learnosity products together to choose content from an Item Bank, deliver it, and report!</p>
                        <p class="text-right">
                            <a class="demo_link" href="endtoend/select_items.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 id="printing-examples">Printing Learnosity items</h3>
        <p>You'll get the best assessment experience from Learnosity online, but we also know that sometimes, you just need to print things! By using custom CSS on top of Learnosity, you can style content for the page as you need.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Printing a Test</h2>
                    </div>
                    <div class="panel-body">
                        <p>Use print-friendly CSS to print a student test.</p>
                        <p class="text-right">
                            <a class="demo_link" href="printing/print.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Printing correct answers</h2>
                    </div>
                    <div class="panel-body">
                        <p>Use print-friendly CSS to show correct answers.</p>
                        <p class="text-right">
                            <a class="demo_link" href="printing/print-correct-answers.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 id="scoring-and-feedback-examples">Scoring & Feedback</h3>
        <p>Combining Learnosity Analytics and Learnosity Assessments, you can deliver rich feedback or simple score based teacher grading.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Manual Grading</h2>
                    </div>
                    <div class="panel-body">
                        <p>Allow an instructor to update scores for manually scored items.</p>
                        <p class="text-right">
                            <a class="demo_link" href="feedback/simple-scoring/index.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Richer Feedback</h2>
                    </div>
                    <div class="panel-body">
                        <p>Provide a way for instructors to provide richer audio, essay or question based feedback.</p>
                        <p class="text-right">
                            <a class="demo_link" href="feedback/rich-feedback/index.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 id="custom-question-examples">Using Custom Questions</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Custom Short Text Question</h2>
                    </div>
                    <div class="panel-body">
                        <p>The simplest example of a custom question type - replicating Learnosity's short text question.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./customquestions/custom_shorttext.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Custom Box and Whisker Plot</h2>
                    </div>
                    <div class="panel-body">
                        <p>Sometimes, you just need access to all the raw info you can handle! Using Learnosity's Data
                            API, you can.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./customquestions/custom_box_whisker.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Using Learnosity Math in a custom question type</h2>
                    </div>
                    <div class="panel-body">
                        <p>Sometimes, you just need access to all the raw info you can handle! Using Learnosity's Data
                            API, you can.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./customquestions/custom_mathcore.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 id="localization-examples">Localizing APIs to another language</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Spanish Language example</h2>
                    </div>
                    <div class="panel-body">
                        <p>Localize Learnosity as you need to - in this case, we've localized our UI to Spanish.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./spanish/index.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 id="miscellaneous-examples">Miscellaneous Examples</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Gallery Style UI</h2>
                    </div>
                    <div class="panel-body">
                        <p>Fit Learnosity's UI and UX to your needs - see how easy it is to embed them into a gallery style user experience.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./gallery/index.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Manage Multiple Items API Instances in a Single Page App</h2>
                    </div>
                    <div class="panel-body">
                        <p>Learn best practices for creating and destroying Items API instances within a single page app.</p>
                        <p class="text-right">
                            <a class="demo_link" href="./single-page-app.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'includes/footer.php';
