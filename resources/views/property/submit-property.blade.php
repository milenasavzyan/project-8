
@extends('layouts.app')
@section('title', 'Submit Property')



<!-- Content
================================================== -->
    @section('content')
<div class="container">
    <form class="submit-page" method="post" action="{{ route('property.store') }}" enctype="multipart/form-data">


	<!-- Submit Page -->
	<div class="col-md-12">
		<form class="submit-page" >

		<div class="notification notice large margin-bottom-55">
			<h4>Don't Have an Account?</h4>
			<p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
		</div>

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
                @csrf
			<div class="form">
				<h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" name="title" value=""/>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					<h5>Status</h5>
					<select class="chosen-select-no-single" name="status">
						<option label="blank"></option>
                        @foreach(\App\Models\Property::STATUSES as $status => $statusName)
                            <option value="{{ $status }}">{{ $statusName }}</option>
                        @endforeach
					</select>
				</div>

				<!-- Type -->
                <div class="col-md-6">
                    <h5>Type</h5>
                    <select class="chosen-select-no-single" name="type">
                        <option label="blank"></option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-4">
					<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="USD" name="price">
					</div>
				</div>

				<!-- Area -->
				<div class="col-md-4">
					<h5>Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq Ft" name="area">
					</div>
				</div>

				<!-- Rooms -->
				<div class="col-md-4">
					<h5>Rooms</h5>
					<select class="chosen-select-no-single" name="rooms">
						<option label="blank"></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>More than 5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Gallery</h3>
            <div class="submit-section">
                <input type="file" name="images[]" multiple>
            </div>

            <!-- Section / End -->


		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-6">
					<h5>Address</h5>
					<input type="text" name="address">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<input type="text" name="city">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
					<input type="text" name="state">
				</div>

				<!-- Zip-Code -->
				<div class="col-md-6">
					<h5>Zip-Code</h5>
					<input type="text" name="zip_code">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-4">
					<h5>Building Age <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name="building_age">
						<option label="blank"></option>
						<option>0 - 1 Years</option>
						<option>0 - 5 Years</option>
						<option>0 - 10 Years</option>
						<option>0 - 20 Years</option>
						<option>0 - 50 Years</option>
						<option>50 + Years</option>
					</select>
				</div>

				<!-- Beds -->
				<div class="col-md-4">
					<h5>Bedrooms <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name="bedrooms">
						<option label="blank"></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>

				<!-- Baths -->
				<div class="col-md-4">
					<h5>Bathrooms <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name="bathrooms">
						<option label="blank"></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Checkboxes -->
            <h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
            <div class="checkboxes in-row margin-bottom-20">
                @foreach ($features as $feature)
                    <input id="check-{{ $feature->id }}" type="checkbox" name="features[]" value="{{ $feature->id }}">
                    <label for="check-{{ $feature->id }}">{{ $feature->name }}</label>
                @endforeach
            </div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->


		<div class="divider"></div>
		<button class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></button>

        </form>
	</div>
</form>
</div>
</div>
@endsection


