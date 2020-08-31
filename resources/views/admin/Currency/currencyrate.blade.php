@extends('admin.admin_layouts')

@section('admin_content')

  <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Currency Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Currency List 
            <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Add new</a>
            </h6>
         
          <br>


          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">We Buy</th>
                  <th class="wd-15p">We Sell</th>
                  <th class="wd-15p">Currency Logo</th>
                  <th class="wd-20p">Action</th>
              
                </tr>
              </thead>
              <tbody>
                @foreach($currency as $row)
                <tr>
                  <td>{{ $row->id}}</td>
                  <td>{{ $row->we_buy}}</td>
                  <td>{{ $row->we_sell}}</td>
                  <td><img src="{{ URL::to($row->logo)}}" height="60px;"></td>
                  <td>
                    <a href="{{ URL::to('edit/currency/'.$row->id)}}" class="btn btn-sm btn-info">edit</a>
                    <a href="{{ URL::to('delete/currency/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                </tr>
                @endforeach
             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

</div>
      <!----------------modal-------------->


         <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Currency</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

             <form action="{{ route('store.currency')}}" method="post" enctype="multipart/form-data">
             @csrf
              <div class="modal-body pd-20">
          <div class="form-group">
            <label for="exampleInputEmail1">We Buy</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We Buy" name="we_buy">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">We Sell</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We Sell" name="we_sell">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Currency Logo</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Currency Logo" name="logo">
          </div>
          
          <!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
              </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->
          



@endsection