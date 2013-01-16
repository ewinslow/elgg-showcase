<?php
/**
 * This page must be included by the Elgg engine or it will not work.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Elgg Showcase</title>
        <meta name="description" content="A place to show off social networks and websites powered by Elgg.">
        <meta name="viewport" content="width=device-width">
        <?php echo elgg_view('page/elements/shortcut_icon'); ?>

        <link rel="stylesheet" href="<?php echo elgg_get_simplecache_url('css', 'elgg'); ?>" />
        <link rel="stylesheet" href="<?php echo elgg_get_simplecache_url('css', 'elgg/gallery/showcase'); ?>" />
        <link rel="stylesheet" href="<?php echo elgg_get_simplecache_url('css', 'elgg/showcase'); ?>" />
        
        
        <?php /* We actually do want this script in the head because it changes the behavior of the CSS */ ?>
        <script src="//raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
        <script src="//raw.github.com/LeaVerou/prefixfree/gh-pages/plugins/prefixfree.dynamic-dom.min.js"></script>
    </head>
    <body>
        <?php if (elgg_is_logged_in()) { ?>
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			<?php echo elgg_view('page/elements/topbar', $vars); ?>
		</div>
	</div>
	<?php } ?>

	<div class="elgg-page elgg-page-default">
            
            <div class="elgg-page-header">
                <div class="elgg-inner">
                    <?php echo elgg_view('page/elements/header', $vars); ?>
                </div>
            </div>
            
            <div class="elgg-page-body">
                <div class="elgg-inner">
                    <div class="elgg-layout elgg-layout-one-column">
                        <div class="elgg-main elgg-body">
                            <div class="elgg-head">
                                <h2 class="elgg-heading-main">
                                    <?php echo elgg_echo('showcase'); ?>
                                </h2>
                            </div>
                            <div class="elgg-body">
                                <ul class="elgg-gallery elgg-gallery-showcase" data-ng-controller="ElggShowcase">
                                    <li data-ng-repeat="item in items">
                                        <a href="{{item.targetUrl}}" class="elgg-showcase-item">
                                            <img data-ng-src="/mod/showcase/assets/images/{{item.image.src}}" />
                                            <div class="elgg-showcase-info">
                                                <h2 class="elgg-showcase-title">
                                                    {{item.displayName}}
                                                </h2>
                                                <p>{{item.summary}}</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End layout body -->
                        </div>
                    </div>
                    <!-- End page body content -->
                </div>
            </div>
            
            <div class="elgg-page-footer">
                <div class="elgg-inner">
                    <?php echo elgg_view('page/elements/footer', $vars); ?>
                </div>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.1/require.min.js"></script>
        <script>
            require.config({
                paths: {
                    "jquery": "//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min",
                    "angular": "//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min",
                    "angular-sanitize": "//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular-sanitize.min",
                },
                shim: {
                    'angular': {
                        deps: ['jquery'],
                        exports: 'angular',
                    },
                    'angular-sanitize': {
                        deps: ['angular'],
                    },
                },
                waitSeconds: 15,
            });
            
            require(['angular', 'angular-sanitize'], function(angular) {
                angular.bootstrap(document, ['ngSanitize']);
            });
        
            function ElggShowcase($scope) {
                $scope.items = [{
                    displayName: 'Elgg Community',
                    summary: 'Community support from community members.',
                    targetUrl: 'http://community.elgg.org',
                    image: {
                        src: 'elgg-community-screenshot.png'
                    },
                }, {
                    displayName: 'Health Education Africa Resource Team',
                    summary: 'Empowering the people of Africa to survive the HIV/AIDS pandemic.',
                    targetUrl: 'http://africaheart.org',
                    image: {
                        src: 'africaheart-screenshot.png'
                    },
                }, {
                    displayName: 'CourseWare',
                    summary: 'CourseWare is an online system that makes communication among course members more effective and efficient.',
                    targetUrl: 'https://courseware.stanford.edu',
                    image: {
                        src: 'courseware-screenshot.png'
                    },
                }, {
                    displayName: 'Planet Red',
                    summary: 'Social network for the University of Nebraska-Lincoln.',
                    targetUrl: 'planetred.unl.edu',
                    image: {
                        src: 'planetred-screenshot.png'
                    },
                }, {
                    displayName: 'Team Webgalli',
                    summary: 'Professional elgg developers and elgg consultants from India.',
                    targetUrl: 'webgalli.com',
                    image: {
                        src: 'webgalli-screenshot.png'
                    },
                }, {
                    displayName: 'Interfaith Family',
                    summary: 'Supporting interfaith families exploring Jewish life',
                    targetUrl: 'http://interfaithfamily.com/elgg',
                    image: {
                        src: 'interfaithfamily-screenshot.png'
                    },
                }, {
                    displayName: 'CMC Alumni',
                    summary: 'To connect and unite the past and present students of CMC Cochin.',
                    targetUrl: 'http://cmccochin.org/alumni',
                    image: {
                        src: 'cmc-alumni-screenshot.png'
                    },
                }, {
                    displayName: 'Hedgehogs.net',
                    summary: 'A social application platform for the hedge fund and investment community.',
                    targetUrl: 'http://hedgehogs.net',
                    image: {
                        src: 'hedgehogs-screenshot.png'
                    }
                }, {
                    displayName: 'Alianza Arboles',
                    summary: 'A network that brings together individuals and organizations with the common goal of planting trees.',
                    targetUrl: 'http://alianzaarboles.com',
                    image: {
                        src: 'alianzaarboles-screenshot.png'
                    }
                }, {
                    displayName: 'N-1',
                    summary: 'Autonomous social network for social movements with emphasis on security, privacy and federation.',
                    targetUrl: 'https://n-1.cc',
                    image: {
                        src: 'n-1-screenshot.png'
                    }
                }, {
                    displayName: 'Formavia',
                    summary: 'Regional professional network (Rhône-Alpes, France), ICT and lifelong learning.',
                    targetUrl: 'http://id.formavia.fr/',
                    image: {
                        src: 'formavia-screenshot.png'
                    }
                }, {
                    displayName: 'Fing',
                    summary: 'Social network of the Fondation Internet Nouvelle Génération.',
                    targetUrl: 'http://www.reseaufing.org/',
                    image: {
                        src: 'reseaufing-screenshot.png'
                    }
                }, {
                    displayName: 'Athabasca Landing',
                    summary: 'A social site for staff, students and friends of Athabasaca University, Canada\'s open university',
                    targetUrl: 'https://landing.athabascau.ca/',
                    image: {
                        src: 'athabasca-screenshot.png'
                    }
                }, {
                    displayName: 'Guinea pigs and hamsters',
                    summary: 'Social Network for guinea pigs and hamster lovers.',
                    targetUrl: 'http://guineapigsandhamsters.com',
                    image: {
                        src: 'guineapigs-screenshot.png'
                    }
                }];
            }
        </script>        
    </body>
</html>
