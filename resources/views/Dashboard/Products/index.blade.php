@extends('dashboard.layout.master')

@section('title')
    Site Dashboard
@endsection

@section('content')
  <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped products">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                           Category
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Date
                        </th>
               
                        <th>
                        </th>
                    </tr>
                    </thead>
              <tbody>
                   
              @foreach($product as $Product)
                  <tr>
                      <td class="Products">
                          {{$loop->iteration}}
                      </td>
                 
                      <td class="Products_Category">
                           
                     {{$Product->Ctegory_id}}
                      </td>
                      <td class="Products_Titel">
                     {{$Product->Title}}

                      </td>
                      <td class="Products_images">
                      {{$Product->Image}}

                       </td>
                      <td class="Products_Price">
                     {{$Product->Price}}

                       </td>

                      <td class="Products_Date">
                       Created {{$Product->created_at}}

                       </td>




                      <td class="project-actions text-right">
                         <form action="{{route('dashboard.Products.destroy',$product)}}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{route('dashboard.Products.show',$product)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('dashboard.Products.edit',$product)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                             </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content --> 
 @endsection
