@extends('admin.admin_layouts')

@section('admin_content')

  <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Currency Table</h5>
        </div><!-- sl-page-title -->

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <form action="{{ url('update/currency/'.$currency->id)}}" method="post" enctype="multipart/form-data">
             @csrf
              <div class="modal-body pd-20">
          <div class="form-group">
            <label for="exampleInputEmail1">We Buy</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="we buy" value="{{ $currency->we_buy}}" name="we_buy">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">We Sell</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="we sell" value="{{ $currency->we_sell}}" name="we_sell">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Currency logo</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
             value="{{ URL::to($currency->logo)}}" name="logo">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Old Logo</label>
            <img src="{{ URL::to($currency->logo)}}" height="60px;">
            <input type="hidden" name="old_logo" value="{{ $currency->logo}}">
          </div>
          
          <!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
              </div>
              </form>
      </div><!-- sl-pagebody -->

</div>
          



@endsection