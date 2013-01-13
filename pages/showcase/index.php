<!DOCTYPE html>
<html ng-app="elggShowcase">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Elgg Showcase</title>
        <meta name="description" content="A place to show off social networks and websites powered by Elgg.">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="elgg-page-header">
            <h1>
                Elgg Showcase
                <small>Social networks and websites powered by Elgg</small>
            </h1>
        </div>
        <ul class="elgg-gallery elgg-gallery-showcase" ng-controller="ElggShowcase">
            <li ng-repeat="item in items">
                <div class="elgg-showcase-item">
                    <img ng-src="{{item.image.src}}" />
                    <div class="elgg-showcase-info">
                        <h2 class="elgg-showcase-title">
                            <a href="{{item.targetUrl}}">
                                {{item.displayName}}
                            </a>
                        </h2>
                        <p>{{item.summary}}</p>
                    </div>
                </div>
            </li>
        </ul>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular-sanitize.min.js"></script>
        <script src="//raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
        <script>
            angular.module('elggShowcase', ['ngSanitize']);
        
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