
@extends('admin.master.header')
@section('content')
<div class="box" style="width:95%; margin:0 auto">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="example1" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Order ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 198.733px;" aria-label="Platform(s): activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Category</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Status</th></tr>
                </thead>
                <tbody>      
                    <tr role="row" class="odd">
                    <td class="sorting_1">#123464</td>
                    <td>S7 edge </td>
                    <td>1400</td>
                    <td>Smart Phone</td>
                    <td>Pending</td>
                    </tr>
                    <tr role="row" class="even">
                    <td class="sorting_1">#123861</td>
                    <td>S7 edge </td>
                    <td>1400</td>
                    <td>Smart Phone</td>
                    <td>Sold</td>
                    </tr>
                    <tr role="row" class="odd">
                    <td class="sorting_1">#123464</td>
                    <td>S7 edge </td>
                    <td>1400</td>
                    <td>Smart Phone</td>
                    <td>Pending</td>
                    </tr>
                    <tr role="row" class="even">
                    <td class="sorting_1">#123861</td>
                    <td>S7 edge </td>
                    <td>1400</td>
                    <td>Smart Phone</td>
                    <td>Canceled</td>
                    </tr>
                </tbody>
                
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>

@endsection