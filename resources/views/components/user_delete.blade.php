<div class = 'row'>
                        @foreach ($types as $user)
                        <div class = "well">
                            <span>{{$user->name}} {{$user->email}}</span>
                        </div>
                        @endforeach
</div>