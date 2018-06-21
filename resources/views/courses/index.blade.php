<@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('courses.partials.filters')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if($courses->count())
                            @each('courses.partials.course',$courses,'course')
                            {{ $courses->appends(request()->query())->links() }}
                        @else
                            No Courses Found
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
