@extends('dashboard.layout.master')

@section('title')
    Add Product
@endsection

@section('content')
   <!-- Main content -->
    <section class="content">
        <form method="post" action="{{route('dashboard.Products.store')}}">
             @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" id="Title"name="Title" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Image</label>
                <textarea id="Image" name="Image" class="form-control" rows="4"></textarea>
              </div>
                <div class="form-group">
                <label for="inputDescription">Price</label>
                <textarea id="Price" name="Price" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Category</label>
                <select id="Price" class="form-control custom-select" name="Ctegory_id">
                  <option selected disabled>Select one</option>
                   @foreach($categories as $Category)
                  <option value="{{$Category->id}}">{{$Category->Name}}</option>
                
                   @endforeach

                </select>
              </div>
              
        
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
         
      </div>
  
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Product" class="btn btn-success float-right">
        </div>

      </div>
                </form>
    </section>
 @endsection
