<!DOCTYPE html>
<head>

    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/color.css">

</head>

<body>


<div class="col-md-8">
    <div class="row">
        @if($user)
            <div class="col-md-8 my-profile">
                <span>Your Name</span>-{{ $user->name }}<br>
                <span>Email</span>-{{ $user->email }}
            </div>
        @endif
    </div>
</div>
