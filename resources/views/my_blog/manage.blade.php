$extends('admin.master');

@section('body')

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                    <th scope="col">Password</th>
                    <th scope="col">ConfirmPassword</th>
                    <th scope="col">Action</th>


                </tr>
                </thead>
                <tbody>
                   @php($i=1)
				   @foreach($category as $categor)
                <tr>
                    
                    <td>{{$i++}}</td>
                    <td >{{$categor->Username}}</td>
                    <td>{{$categor->email}}</td>
                     <td>{{$categor->Password}}</td>
                      <td>{{$categor->ConfirmPassword}}</td>
                      <td>
                   <a href="{{route('editCategory',['id'=>$categor->id])}}">edit</a>
                          <a href="{{route('deleteCategory',['id'=>$categor->id])}}">delete</a>
                   

                      </td>
                </tr>
            @endforeach
                </tbody>
            </table>
    @endsection