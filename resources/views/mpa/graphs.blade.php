<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts/head')
@include('layouts/head-bottom-link')
</head>
<body>
@include('layouts/layout-vertical')
<div class="pc-container">
    <div class="card p-3">
        <div id="vue-graphs"></div>
    </div>
</div>
<script type="module" src="/js/app.js"></script>
</body>
</html>
