<meta charset="utf-8">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/site.css" rel="stylesheet">
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/site.js') }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
window.Laravel =<?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>
