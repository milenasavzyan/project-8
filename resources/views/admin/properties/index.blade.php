<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Adminka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


</head>

<body>
<table border="1">
    <tr>
        <td>Title</td>
        <td>Status</td>
        <td>Price</td>
        <td>Area</td>
        <td>Rooms</td>
        <td>Address</td>
        <td>City</td>
        <td>State</td>
        <td>Zip_code</td>
        <td>Description</td>
        <td>Building_age</td>
        <td>Bedrooms</td>
        <td>Bathrooms</td>
    </tr>

    @foreach($properties as $property)
        <tr>
            <td>{{ $property->title }}</td>
            <td>{{ $property->statusName }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->area }}</td>
            <td>{{ $property->rooms }}</td>
            <td>{{ $property->address }}</td>
            <td>{{ $property->city }}</td>
            <td>{{ $property->state }}</td>
            <td>{{ $property->zip_code }}</td>
            <td>{{ $property->description }}</td>
            <td>{{ $property->building_age }}</td>
            <td>{{ $property->bedrooms }}</td>
            <td>{{ $property->bathrooms }}</td>
        </tr>
    @endforeach
</table>
{{ $properties->links() }}



</body>
