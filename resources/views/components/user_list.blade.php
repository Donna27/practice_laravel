<div class = 'row'>
                        @foreach ($users as $user)
                        <div class = "well">
                            <span>{{$user->name}} {{$user->email}}</span>
                                <!--<input type="button" class="btn btn-warning" value="Edit">-->
                                <a class="btn btn-warning" href="/profile/{{$user->id}}" role="button">Edit</a>
                           @if  ( $user->id !== Auth::user()->id )
                            <form method="post" action = "/users/delete">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="submit" class = "btn btn-danger" value="Delete">
                            </form>
                            @endif
                        </div>
                        @endforeach
</div>