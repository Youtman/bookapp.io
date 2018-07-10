<!DOCTYPE html>
<html lang="en" ng-app="bookWishlistApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Application</title>

        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <script src="{{ URL::asset('js/angular.min.js') }}"></script>
        <script src="{{ URL::asset('js/lodash.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular-local-storage.min.js') }}"></script>
        <script src="{{ URL::asset('js/restangular.min.js') }}"></script>
        
        <script src="{{ URL::asset('js/apps.js') }}"></script>
        <script src="{{ URL::asset('js/controllers.js') }}"></script>
        <script src="{{ URL::asset('js/services.js') }}"></script>

        <style>
            
            li {
                padding-bottom: 8px;
            }

        </style>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Book Application</h1>
                </div>
            </div>

            <div ng-view></div>
        </div>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>