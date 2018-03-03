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
                          
                          <tr>
                            <th scope="row">1</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="{{url('')}}" class="label label-primary">Read</a> |
                                <a href="{{url('')}}" class="label label-success">Update</a> |
                                <a href="{{url('')}}" class="label label-danger">Delete</a>
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table> 
        </div>
    </div>
@include('inc.footer')