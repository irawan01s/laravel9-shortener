<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.13.6/dist/full.css" rel="stylesheet" type="text/css" />
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>