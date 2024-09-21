@extends("admin.user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Property Register</h2>
            <p>Hello {{ Auth::user()->name }}, You can manage your properties here!</p>
        </div>
        <div class="col-2">
            <a href="{{ route('property.create') }}" class="btn btn-submit btn-md btn-brand rounded w-100 font-sm mt-15">Create New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-primary">Property Count: {{ count($properties) }}</p>
        </div>
        <div class="col-lg-12">
            <div class="card card-body mb-4 table-responsive">
                <table id="dataTable" class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($properties as $key => $property)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $property->title }}</td>
                            <td>{{ $property->category }}</td>
                            <td>{{ $property->type }}</td>
                            <td>{{ $property->location }}</td>
                            <td>{{ $property->status }}</td>
                            <td class="text-center"><a href="{{ route('property.edit', encrypt($property->id)) }}">Edit</a></td>
                            <td class="text-center"><a href="{{ route('property.delete', encrypt($property->id)) }}" onclick="return confirm('Are you sure want to delete this record?')">Delete</a></td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection