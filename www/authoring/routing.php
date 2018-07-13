<?php

//common environment attributes including search paths. not specific to Learnosity
include_once '../env_config.php';

//site scaffolding
include_once 'includes/header.php';

//common Learnosity config elements including API version control vars
include_once '../lrn_config.php';

//alias(es) to eliminate the need for fully qualified classname(s) from sdk
use LearnositySdk\Request\Init;
use LearnositySdk\Utils\Uuid;

//security object. timestamp added by SDK
$security = [
    'consumer_key' => $consumer_key,
    'domain' => $domain
];

//simple api request object for item list view
$request = [
    'mode' => 'item_list',
    'user' => [
        'id' => 'demos-site',
        'firstname' => 'Demos',
        'lastname' => 'User',
        'email' => 'demos@learnosity.com'
    ]
];

$Init = new Init('author', $security, $consumer_secret, $request);
$signedRequest = $Init->generate();

?>

    <div class="jumbotron section">
        <div class="toolbar">
            <ul class="list-inline">
                <li data-toggle="tooltip" data-original-title="Visit the documentation"><a href="http://docs.learnosity.com/authorapi/" title="Documentation"><span class="glyphicon glyphicon-book"></span></a></li>
            </ul>
        </div>
        <div class="overview">
            <h2>Navigate your Item Bank</h2>
            <p>Learnosity&apos;s Author API allows the enabling of linkable, bookmarkable, shareable URLs to navigate directly to locations within the app.</p>
            <p>Our <a href="http://docs.learnosity.com/authoring/author/knowledgebase/author-api-routing">knowledgebase article</a> demonstrates how easy it is to set up routing with the Author API by using the <a href="http://docs.learnosity.com/authoring/author/publicmethods#on-events">&lsquo;navigate&rsquo; event</a> and the <a href="http://docs.learnosity.com/authoring/author/publicmethods#navigate">&lsquo;navigate&rsquo; public method</a>.</p>
        </div>
    </div>


    <!-- Container for the author api to load into -->
    <div class="section pad-sml">
        <div class="text-center">
            <button class="btn btn-info btn-navigate-item-new">New Item</button>
            <button class="btn btn-info btn-navigate-activity-new">New Activity</button>
            <button class="btn btn-info btn-navigate-widgets-new">New Question</button>
            <button class="btn btn-info btn-navigate-feature-new">New Feature</button>
            <button class="btn btn-info btn-navigate-items">List Items</button>
            <button class="btn btn-info btn-navigate-activities">List Activities</button>
            <button class="btn btn-info btn-navigate-widget-edit">Edit MCQ Question</button>
        </div><br>
        <!--    HTML placeholder that is replaced by API-->
        <div id="learnosity-author"></div>
    </div>


    <!-- version of api maintained in lrn_config.php file -->
    <script src="<?php echo $url_authorapi; ?>"></script>
    <script>
        var initializationObject = <?php echo $signedRequest; ?>;

        //optional callbacks for ready
        var callbacks = {
            readyListener: function () {
               console.log("Author API has successfully initialized.");

                // Use navigate event to Log navigate routing
                authorApp.on('navigate', function (e) {
                    console.log('Navigate to: ' + e.data.location);
                });

               implementNavigate();
            },
            errorListener: function (err) {
                console.log(err);
            }
        };

        var authorApp = LearnosityAuthor.init(initializationObject, callbacks);

        function implementNavigate () {
            // Navigate to new item
            $('.btn-navigate-item-new').click(function () {
                authorApp.navigate(
                    'items/new'
                );
            });
            // Navigate to new activity
            $('.btn-navigate-activity-new').click(function () {
                authorApp.navigate(
                    'activities/new'
                );
            });
            // Navigate to new question
            $('.btn-navigate-widgets-new').click(function () {
                authorApp.navigate(
                    'items/new/widgets/new'
                );
            });
            // Navigate to new feature
            $('.btn-navigate-feature-new').click(function () {
                authorApp.navigate(
                    'items/new/widgets/new/' + encodeURIComponent('{"widgetType":"features"}')
                );
            });
            // Navigate to items list
            $('.btn-navigate-items').click(function () {
                authorApp.navigate(
                    'items'
                );
            });
            // Navigate to activities list
            $('.btn-navigate-activities').click(function () {
                authorApp.navigate(
                    'activities'
                );
            });
            // Navigate to edit MCQ question
            $('.btn-navigate-widget-edit').click(function () {
                authorApp.navigate(
                    'items/new/widgets/new/' + encodeURIComponent(JSON.stringify({
                        widgetTemplate: {
                            template_reference: '9e8149bd-e4d8-4dd6-a751-1a113a4b9163'
                        }
                    }))
                );
            });
        }
    </script>


<?php
include_once 'includes/footer.php';