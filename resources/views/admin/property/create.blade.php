@extends("admin.user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Create New Property</h2>
            <p>Hello {{ Auth::user()->name }}, You can create your property here!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body mb-4">
                <form method="post" action="{{ route('property.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label class="req">Property Name / Title</label>
                            {{ html()->text($name='title', $value=old('title'))->class('form-control')->placeholder('Property Title / Name')->required()}}
                        </div>
                        <div class="col-12">
                            <label class="req">Slug</label>
                            {{ html()->text($name='slug', $value=old('slug'))->class('form-control')->placeholder('Slug')->required()}}
                        </div>
                        <div class="col-12">
                            <label class="req">Meta Description</label>
                            {{ html()->text($name='meta_description', $value=old('meta_description'))->class('form-control')->placeholder('Meta Description')->required() }}
                        </div>
                        <div class="col-12">
                            <label class="req">Meta Keywords</label>
                            {{ html()->text($name='meta_keywords', $value=old('meta_keywords'))->class('form-control')->placeholder('Meta Keywords')->required() }}
                        </div>
                        <div class="col-12">
                            <label>Hashtags</label>
                            {{ html()->text($name='hashtags', $value=old('hashtags'))->class('form-control')->placeholder('Hashtags') }}
                        </div>
                        <div class="col-6 mt-3">
                            <label class="req">Property Type</label><br>
                            {{ html()->select($name='type', $value=array('Rent'=>'Rent', 'Sale'=>'Sale', 'Lease' => 'Lease'))->class('form-control')->placeholder('Select Type')->required() }}
                        </div>
                        <div class="col-6 mt-3">
                            <label class="req">Property Category</label><br>
                            {{ html()->select($name='category', $value=array('Villa' => 'Villa', 'Apartment' => 'Apartment', 'Land' => 'Land'), '')->class('form-control')->placeholder('Select Category')->required() }}
                        </div>
                        <div class="col-4 mt-3">
                            <label>Price in AED</label>
                            {{ html()->number($name='price', $value=old('price'))->class('form-control')->placeholder('0.00') }}
                        </div>
                        <div class="col-4 mt-3">
                            <label>Area in Sq Ft.</label>
                            {{ html()->number($name='area', $value=old('area'))->class('form-control')->placeholder('0 sqft') }}
                        </div>
                        <div class="col-4 mt-3">
                            <label class="req">Location</label>
                            {{ html()->text($name='location', $value=old('location'))->class('form-control')->placeholder('Location')->required() }}
                        </div>
                        <div class="col-3 mt-3">
                            <label>No.of Bed Rooms</label>
                            {{ html()->number($name='bed_rooms', $value=old('bed_rooms'))->class('form-control')->placeholder('0') }}
                        </div>
                        <div class="col-3 mt-3">
                            <label>No.of Bath Rooms</label>
                            {{ html()->number($name='bath_rooms', $value=old('bath_rooms'))->class('form-control')->placeholder('0') }}
                        </div>
                        <div class="col-6 mt-3">
                            <label>Other Amenities</label>
                            {{ html()->text($name='amenities', $value=old('amenities'))->class('form-control')->placeholder('Amenities') }}
                        </div>
                        <div class="col-12 mt-3">
                            <label class="req">Property Description</label>
                            {{ html()->textarea($name='description', $value=old('description'))->class('form-control')->rows(5)->placeholder('Property Description')->required() }}
                            @error('description')
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label class="req">Featured Image</label> (420px Width X 340px Height, Max size 1MB)<br>
                            {{ html()->file($name='featured_image')->class('form-control')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label class="">Images</label> (420px Width X 340px Height, Max size 1MB, Multiple selection enabled)<br>
                            {{ html()->file($name='images[]')->class('form-control multi_img')->multiple() }}
                        </div>
                        <div class="col-12 mt-3">
                            <div id="multi_img" class="text-center"></div>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="req">Status</label><br>
                            {{ html()->select($name='status', $value=array('Active'=>'Active', 'Inactive'=>'Inactive'))->class('form-control')->placeholder('Select Status')->required() }}
                        </div>
                        <div class="col-12 mt-3 text-end">
                            <button type="submit" class="btn btn-secondary bg-secondary text-white btn-submit">Save Property</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection