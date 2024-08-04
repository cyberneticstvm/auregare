@extends("admin.user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-12">
            <h2 class="content-title card-title">Comments Register</h2>
            <p>Hello {{ Auth::user()->name }}, You can manage your comments here!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-primary">Comments Count: {{ count($comments) }}</p>
        </div>
        <div class="col-lg-12">
            <div class="card card-body mb-4 table-responsive">
                <table id="dataTable" class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Comment</th>
                            <th>Posted On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comments as $key => $comment)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->contact_number }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>{{ $comment->created_at->format('d/M/Y') }}</td>
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