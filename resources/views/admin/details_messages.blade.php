@extends('admin.dashboardMaster')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="form-element base-control mb-30">
                <div class="row">
                    <div class="col-md-10 card_title_part">
                        <h4>Message Details</h4>
                    </div>
                    <div class="col-md-2 card_button_part">
                        <a type="button" href="{{ route('all.messages') }}" class="btn long">All Message</a>
                    </div>
                </div>

                    <div class="invoice payment-details mt-3">
                       <ul class="status-list">
                          <li><span class="key">Name : </span> <span class="font-17 bold">{{$data->name}}</span></li>
                          <li><span class="key">Email : </span> <span>{{$data->email}}</span></li>
                          <li><span class="key">Phone : </span> <span>{{$data->phone}}</span></li>
                          <li><span class="key">Subject : </span> <span>{{$data->subject}}</span></li>
                          <li><span class="key">Message : </span> <span>{{$data->message}}</span></li>
                       </ul>
                    </div>

                <div class="button-group pt-5">
                    <a type="button" href="{{ route('replay.messages',$data->id) }}" class="btn long">Replay</a>
                    <a type="button" class="link-btn bg-transparent ml-3 soft-pink">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- update status to read  --}}
@php
    App\Models\Message::find($data->id)->update([
        'status' => 'read'
    ]);
@endphp
