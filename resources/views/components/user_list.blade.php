<div class = 'row'>
                        @foreach ($users as $user)
                        <div class = "well">
                            <span>{{$user->name}} {{$user->email}}</span>
                            <form method="post" action = "/users/delete">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="submit" class = "btn btn-danger" value="Delete">
                            </form>
                        </div>
                        @endforeach
</div>