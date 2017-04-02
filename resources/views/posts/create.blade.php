 @extends('layouts.master')

 @section('content')

     <div class="col-sm-8 blog-main">
         <h1>Create a post</h1>
             <hr>

             <form method="post" action="/posts">

                 {{ csrf_field() }}

                 <div class="form-group">
                     <label for="title">Title</label>
                     <input type="text" class="form-control" id="inputTitle" name="title" required>
                 </div>

                 <div class="form-group">
                     <label for="exampleInputPassword1">Body</label>
                     <textarea class="form-control" rows="3" name="body" required></textarea>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                 </div>

                 @include('layouts.errors')

             </form>
     </div>




 @endsection