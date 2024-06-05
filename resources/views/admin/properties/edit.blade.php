
@if($property)
    <form action="{{ route('properties.update', $property->id) }}" method="post">
        @method('PUT')
        @csrf
        <input name="name" type="text" value="{{ $property->title }}"><br>
        <input name="status" type="number" value="{{ $property->status }}"><br>
        <input name="price" type="number" value="{{ $property->price }}"><br>
        <input name="area" type="number" value="{{ $property->area }}"><br>
        <input name="rooms" type="number" value="{{ $property->rooms }}"><br>
        <input name="address" type="text" value="{{ $property->address }}"><br>
        <input name="city" type="text" value="{{ $property->city }}"><br>
        <input name="state" type="text" value="{{ $property->state }}"><br>
        <input name="zip_code" type="number" value="{{ $property->zip_code }}"><br>
        <textarea name="description">{{ $property->description }}</textarea><br>
        <input name="building_age" type="text" value="{{ $property->building_age }}"><br>
        <input name="bedrooms" type="number" value="{{ $property->bedrooms }}"><br>
        <input name="bathrooms" type="number" value="{{ $property->bathrooms }}"><br>
        <input name="created_at" type="text" value="{{ $property->created_at }}"><br>
        <input name="updated_at" type="text" value="{{ $property->updated_at }}"><br>
        <button class="button margin-top-20 margin-bottom-20">Save Changes</button>

    </form>
@endif

