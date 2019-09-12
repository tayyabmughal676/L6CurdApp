<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    
    <div class="container">
           <div class="row">
                 <div class="col-lg-12">
                 <a href="{{url('/home/create')}}" class="btn btn-primary">Create Project</a>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if ($projectsData)
                                @foreach ($projectsData as $itemData)
                                   <tr>
                                        <td>{{$itemData->id}}</td>
                                        <td>{{$itemData->name}}</td>
                                        <td>{{$itemData->detail ? $itemData->detail : "N/A"}}</td>
                                        <td>{{$itemData->created_at}}</td>
                                        <td>{{$itemData->updated_at}}</td>
                                        <td>
                                        <a href="/home/{{$itemData->id}}" class="btn btn-primary">Show</a>
                                        <a href="/home/{{$itemData->id}}/edit" class="btn btn-primary">edit</a>

                                        </td>
                                   </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6"  class="text-danger text-center">Data not Found...</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script>
  </body>
</html>