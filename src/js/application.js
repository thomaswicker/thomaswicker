/*
     _    ____  ____  _     ___ ____    _  _____ ___ ___  _   _       _ ____
    / \  |  _ \|  _ \| |   |_ _/ ___|  / \|_   _|_ _/ _ \| \ | |     | / ___|
   / _ \ | |_) | |_) | |    | | |     / _ \ | |  | | | | |  \| |  _  | \___ \
  / ___ \|  __/|  __/| |___ | | |___ / ___ \| |  | | |_| | |\  | | |_| |___) |
 /_/   \_\_|   |_|   |_____|___\____/_/   \_\_| |___\___/|_| \_|  \___/|____/
*/


//Setting up the core Angular App - twApp
var thomaswicker = angular.module('twApp', ['ngRoute']);

/*
  ____   ___  _   _ _____ ___ _   _  ____
 |  _ \ / _ \| | | |_   _|_ _| \ | |/ ___|
 | |_) | | | | | | | | |  | ||  \| | |  _
 |  _ <| |_| | |_| | | |  | || |\  | |_| |
 |_| \_\\___/ \___/  |_| |___|_| \_|\____|

*/

// ###################### BEGIN APP ROUTING ###################### //

thomaswicker.config(['$routeProvider', function($routeProvider) {
  $routeProvider
    // route for the default url home page
    .when('/', {
      templateUrl : 'partials/home.html',
      controller  : 'HomeController',
      activeTab   : 'index'
    })

    // route for the home page
    .when('/home', {
      templateUrl : 'partials/home.html',
      controller  : 'HomeController',
      activeTab   : 'index'
    })

    // route for the about page
    .when('/about', {
      templateUrl : 'partials/about.html',
      controller  : 'AboutController',
      activeTab   : 'about'
    })

    // route for the portfolio page
    .when('/portfolio', {
      templateUrl : 'partials/portfolio.html',
      controller  : 'PortfolioController',
      activeTab   : 'portfolio'
    })

    // route for the photography page
    .when('/photography', {
      templateUrl : 'partials/photography.html',
      controller  : 'PhotographyController',
      activeTab   : 'photography'
    })

    // route for the resume page
    .when('/resume', {
      templateUrl : 'partials/resume.html',
      controller  : 'ResumeController',
      activeTab   : 'resume'
    })

    // route for the contact page
    .when('/contact', {
      templateUrl : 'partials/contact.html',
      controller  : 'ContactController',
      activeTab   : 'contact'
    })
}]);

// ###################### END APP ROUTING ###################### //

thomaswicker.run(['$rootScope', function($rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.activePage = current.$$route.activePage;
    });
}]);


/*
   ____ ___  _   _ _____ ____   ___  _     _     _____ ____  ____
  / ___/ _ \| \ | |_   _|  _ \ / _ \| |   | |   | ____|  _ \/ ___|
 | |  | | | |  \| | | | | |_) | | | | |   | |   |  _| | |_) \___ \
 | |__| |_| | |\  | | | |  _ <| |_| | |___| |___| |___|  _ < ___) |
  \____\___/|_| \_| |_| |_| \_\\___/|_____|_____|_____|_| \_\____/
*/

// ###################### BEGIN APP CONTROLLERS ########################## //

// create the TWController and inject Angular's $scope
thomaswicker.controller('TWController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
}]);

// create the HomeController and inject Angular's $scope
thomaswicker.controller('HomeController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'home';
  $scope.title = 'Thomas Wicker';
  $scope.subtitle = 'Senior Front End Developer';
  $scope.quote = 'Code monkey, $AAPL enthusiast, lifelong learner, entrepreneur, gambler, golfer, fine artist, photographer, father of two healthy girls';

  $scope.posts = [{
    title:"Almonds are good for Health",
    body:"Almonds contain high amounts of HDL which helps reduce cholestrol.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus quam leo, id tristique sapien viverra eu. Maecenas ipsum lectus, suscipit auctor tristique in, venenatis ut nisl. Quisque eget bibendum libero. Nam nec mi augue.",
    imgurl:"http://www.thomaswicker.com/assets/posts/hulk_1128115.JPG"
  },
  {
    title:"Almonds are NOT good for Health",
    body:"Almonds contain high amounts of HDL which helps reduce cholestrol.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus quam leo, id tristique sapien viverra eu. Maecenas ipsum lectus, suscipit auctor tristique in, venenatis ut nisl. Quisque eget bibendum libero. Nam nec mi augue.",
    imgurl:"http://www.thomaswicker.com/assets/posts/hulk_1128115.JPG"
  }];
}]);

// create the AboutController and inject Angular's $scope
thomaswicker.controller('AboutController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'about';
  $scope.title = 'About Me';
  $scope.quote = 'When I was 5 years old, my mother always told me that happiness was the key to life. When I went to school, they asked me what I wanted to be when I grew up. I wrote down ‘happy’. They told me I didn’t understand the assignment, and I told them they didn’t understand life.';
  $scope.quotee = "~ John Lennon";
}]);

// create the PortfolioController and inject Angular's $scope
thomaswicker.controller('PortfolioController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'portfolio';
  $scope.title = 'Portflio';
  $scope.quote = 'I go to work every morning with the possibility that I might learn something I don’t already know… You should look at every problem and think, ‘what can I learn by doing this?’ And if you think you can learn nothing, forget about doing it.';
  $scope.quotee = "~ Milton Glaser";
}]);

// create the PhotographyController and inject Angular's $scope
thomaswicker.controller('PhotographyController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'photography';
  $scope.title = 'Photography';
  $scope.quote = 'Photography, as a powerful medium of expression and communications, offers an infinite variety of perception, interpretation and execution.';
  $scope.quotee = "~ Ansel Adams";
}]);

// create the ResumeController and inject Angular's $scope
thomaswicker.controller('ResumeController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'resume';
  $scope.title = 'My Resume';
  $scope.quote = "A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem. The broader one's understanding of the human experience, the better design we will have.";
  $scope.quotee = "~ Steve Jobs";

  // SKILLS - FRONT END
  $scope.html5 = "98%";
  $scope.haml = "98%";
  $scope.css = "98%";
  $scope.sass = "98%";
  $scope.javascript = "80%";
  $scope.react = "60%";
  $scope.angular = "60%";
  $scope.wordpress = "90%";

  // SKILLS - UI/UX
  $scope.ui = "100%";
  $scope.ux = "95%";
  $scope.zurb = "100%";
  $scope.rwd = "98%";
  $scope.agile = "90%";
  $scope.rapidproto = "100%";
  $scope.adobe = "98%";

  // SKILLS - BACK END
  $scope.rails = "70%";
  $scope.php = "50%";
  $scope.heroku = "90%";
  $scope.db = "30%";
  $scope.commandline = "75%";
  $scope.git = "85%";

}]);

// create the ContactController and inject Angular's $scope
thomaswicker.controller('ContactController', ['$scope', '$route', 'twServices', function($scope, $route, twServices) {
  $scope.$route = $route;
  $scope.activePage = 'contact';
  $scope.title = 'Contact Me';
  $scope.quote = "If I am walking with two other men, each of them will serve as my teacher. I will pick out the good points of the one and imitate them, and the bad points of the other and correct them in myself.";
  $scope.quotee = "~ Confucius";
}]);

// ###################### END APP CONTROLLERS ##########################


/*
  ____ ___ ____  _____ ____ _____ _____     _______ ____
 |  _ \_ _|  _ \| ____/ ___|_   _|_ _\ \   / / ____/ ___|
 | | | | || |_) |  _|| |     | |  | | \ \ / /|  _| \___ \
 | |_| | ||  _ <| |__| |___  | |  | |  \ V / | |___ ___) |
 |____/___|_| \_\_____\____| |_| |___|  \_/  |_____|____/

*/

// ###################### BEGIN APP CUSTOM DIRECTIVES ##################### //

thomaswicker.directive('superhero', function() {
  return {
    restrict: 'E',
    link: function(scope, element) {

      //Adding class to custom <superhero> element
      element.addClass('superhero');
    },
    scope: {}
  }
});


/*
  ____  _____ ______     _____ ____ _____ ____
 / ___|| ____|  _ \ \   / /_ _/ ___| ____/ ___|
 \___ \|  _| | |_) \ \ / / | | |   |  _| \___ \
  ___) | |___|  _ < \ V /  | | |___| |___ ___) |
 |____/|_____|_| \_\ \_/  |___\____|_____|____/

*/

// ###################### BEGIN APP SERVICES ###################### //

thomaswicker.service('twServices', function () {
  var twObject = {};

  // Function to call JS for adding default classes to new custom Angular directives
  twObject.initDirectiveClasses = function () {
    $('row').addClass('row');
    $('alert').addClass('alert').attr('role','alert');
    $('panel').addClass('panel');

    // Adding in variable to detect IE as user agent for specific styling
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
  };

  // returning the twObject within this services so that it can be accessed and initialized by Controllers
  return twObject;
});

// ###################### END APP SERVICES ######################### //




// ###################### BEGIN MASONRY.JS ###################### //

function initMasonry() {
  var $container = $('#masonry-container-photo');
  var $container2 = $('#masonry-container');
  // initialize
  $container.masonry({
    itemSelector: '.photo'
  });

  $container2.masonry({
    itemSelector: '.portfolio-item'
  });
}

setTimeout(initMasonry, 200);
