<?php

return [
  'routes' => [
    [
      'pattern' => 'logout',
      'action'  => function() {

        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');

      }
    ]
  ]
];