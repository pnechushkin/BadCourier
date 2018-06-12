<meta charset="utf-8">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>
