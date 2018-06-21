<div class="media">
    <div class="media-left">
        <a href="#"><img src="{{asset('images/icon.jpg')}}" alt="" style="width: 100px; height: 100px"></a>
    </div>
    <div class="media-body">
        @if($course->subjects->count())
            <ul class="list-inline">
                @foreach($course->subjects as $subject)
                    <li class="list-inline-item">{{$subject->name}}</li>
                @endforeach
            </ul>
        @endif
        <h4 class="media-heading">{{$course->name}}</h4>
        <ul class="list-inline">
            <li class="list-inline-item" class="list-inline-item">{{$course->formattedDifficulty}}</li>
            <li class="list-inline-item">{{$course->formattedType}}</li>
            <li class="list-inline-item">{{$course->formattedAccess}}</li>
            <li class="list-inline-item">{{$course->formattedStarted}}</li>
        </ul>
    </div>
</div>
<br>
