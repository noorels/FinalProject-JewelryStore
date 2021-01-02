@extends('dashboard.layout.master')

@section('title')
    Edit Product
@endsection

@section('content')
   <!-- Main content -->
    <section class="content">
        <form method="post" action="{{route('dashboard.Products.update',$product)}}">
            @method('PUT')
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
                <label for="inputName">Titel</label>
                <input type="text" name="Title" value="{{$product->Title}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Image</label>
                <textarea id="inputDescription" name="Image" class="form-control" rows="4">
                {{$product->Image}}
                </textarea>
              </div>
                <div class="form-group">
                <label for="inputDescription">Price</label>
                <textarea id="inputDescription" name="Price" class="form-control" rows="4">
                {{$product->Price}}
                </textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Category</label>
               <select id="Category" class="form-control custom-select" name="Category_id">
                    @foreach($categories as $Category)
                  <option value="{{$Category->id}}"

                    {{$product->Ctegory_id == $Category->id ? 'selected' : ''}}
                    >{{$Category->Name}}</option>
                
                   @endforeach

                </select>
              </div>
              
        
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
         
      </div>
      </form>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update Product" class="btn btn-success float-right">
        </div>
      </div>
    </section>
 @endsection
