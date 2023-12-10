@extends('admin.dashboardMaster')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-30">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h4 class="font-20">Extended Table</h4>
                    <div class="d-flex flex-wrap">
                        <!-- Date Picker -->
                        <div class="dashboard-date style--six mr-20 mt-3 mt-sm-0">
                           <span class="input-group-addon">
                              <img src="{{asset('backend')}}/assets/img/svg/calender-color.svg" alt="" class="svg">
                            </span>

                           <input type="text" id="default-date" value="28 October 2019">
                        </div>
                        <!-- End Date Picker -->


                        <!-- Dropdown Button -->
                      <div class="dropdown-button mt-3 mt-sm-0">
                        <button type="button" class="btn style--two orange" data-toggle="dropdown" aria-expanded="false">Download <i class="icofont-simple-down"></i></button>

                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(896px, 55px, 0px);">
                            <a class="dropdown-item" href="#">Print</a>
                            <a class="dropdown-item" href="#">EXL</a>
                            <a class="dropdown-item" href="#">PDF</a>
                        </div>
                     </div>
                     <!-- End Dropdown Button -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="text-nowrap dh-table">
                    <thead>
                        <tr>
                            <th>Name <img src="{{asset('backend')}}/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                            <th>Email <img src="{{asset('backend')}}/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                            <th>Phone <img src="{{asset('backend')}}/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                            <th>Subject <img src="{{asset('backend')}}/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                            <th>Status <img src="{{asset('backend')}}/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr class="@if ($item->status == 'unread')
                                            bg-secondary
                                        @endif">
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->subject}}</td>
                                <td><a href="{{route('details.messages',$item->id)}}" type="button" class="status-btn @if ($item->status == 'unread')
                                    un_paid
                                    @elseif($item->status == 'read')
                                    on_hold
                                @endif ">{{$item->status}}</a></td>
                                <td>
                                    <!-- Dropdown Button -->
                                    <div class="dropdown-button ">
                                        <a href="#" class="d-flex align-items-center justify-content-end" data-toggle="dropdown" aria-expanded="true">
                                            <div class="menu-icon mr-0">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(869px, 5px, 0px);">
                                            <a href="{{route('details.messages',$item->id)}}">Read</a>
                                            <a href="#">Delete</a>
                                            <a href="#">Replay</a>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Invoice List Table -->
            </div>
        </div>
    </div>
</div>
@endsection
