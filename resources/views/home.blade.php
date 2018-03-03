@include('inc.header')
    <div class="container">
        <div class="row">
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($articles) > 0)
                                @foreach ($articles->all() as $article)
                          <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->description}}</td>
                            <td><a href="{{url('')}}" class="btn btn-primary">Read</a> |
                                <a href="{{url('')}}" class="btn btn-success">Update</a> |
                                <a href="{{url('')}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table> 
        </div>
    </div>
@include('inc.footer')