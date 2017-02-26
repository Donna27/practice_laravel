<div class = 'row'>
                        @foreach ($types as $user)
                        <div class = "well">
                            <span>{{$user->name}} {{$user->email}}</span>
                             <form method="post" action = "/users/restore">
                                {{csrf_field()}}
                                <!--<input type="hidden" name="_method" value="delete"> -->
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="submit" class = "btn btn-success" value="Restore">
                            </form>
                        </div>
                        @endforeach
</div>