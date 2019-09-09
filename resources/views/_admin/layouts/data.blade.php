<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
@if(!auth()->guest())
    <script>
        window.Laravel.userId = <?php echo auth()->user()->id; ?>;
        window.Laravel.type = <?php echo auth()->user()->tipo; ?>
    </script>
@endif