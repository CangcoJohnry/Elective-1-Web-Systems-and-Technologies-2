<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 20rem;">
            <div class="card-body text-left">
                <h1 class="h4 card-title">Event Registration</h1>
                <hr>
                <p class="card-text"><b>Event Name: </b>{{ strtoupper($event) }}</p>
                <p class="card-text"><b>Participant: </b>{{ strtoupper($participant) }}</p>
                <p class="card-text"><b>Year Level: </b>{{ $year }}</p>
            </div>
        </div>
    </div>
    
</body>
</html>