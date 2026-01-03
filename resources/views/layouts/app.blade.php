<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="text-center my-5">
    <h1 class="fw-semibold display-5">
        Task Manager
    </h1>
    <p class="text-muted fs-5 fst-italic">
        Organize your tasks. Stay productive.
    </p>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
