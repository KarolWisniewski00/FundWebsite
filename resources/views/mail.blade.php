
<div>{{$data->name}}</div>
<div><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
<div>Message:</div>
<p>
    @foreach(explode("\n", $data->message) as $line)
        <div>{{ $line }}</div>
    @endforeach
</p>