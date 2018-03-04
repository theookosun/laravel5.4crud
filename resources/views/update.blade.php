@include('inc.header')
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal "method="POST" action="{{url('/edit', array($articles->id)) }}">  {{ csrf_field() }}
                    
                    <fieldset>
                      <legend>Laravel CRUD</legend>
                      @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger"> {{$error}}</div>
                        @endforeach
                        @endif  
                      <div class="form-group row">
                         <div class="col-sm-10">
                                
                        </div>
                      </div>
                      <div class="form-group">
                           
                        <label for="exampleInputEmail1">Title</label>
                        
                        <input type="text" class="form-control" value="<?php echo $articles->title; ?>"name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New title">
                        <small id="emailHelp" class="form-text text-muted">We never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="desc">Description</label>
                        
                        <textarea class="form-control" name="description" id="desc" placeholder="Description"> <?php echo $articles->description; ?>
                        </textarea>
                        
                        </div>
                        
                       
                      </fieldset>
                      <a href="{{url('/')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </fieldset>
                    
                  </form>
            </div>
        </div>
    </div>
    
    
    
    
    