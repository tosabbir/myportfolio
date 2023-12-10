@extends('admin.dashboardMaster')

@section('content')

    <div class="row">
        <div class="col-12">
            <!-- Card -->
            <div class="card bg-transparent">
                <div class="card-body card_color-bg mb-30">
                    <!-- Mail Header -->
                    <div class="mail-header ">
                        <h4>New Message</h4>
                    </div>
                    <!-- End Mail Header -->
                </div>

                <!-- Main Mail -->
                <div class="mail-compose">
                    <form action="#" method="post">
                        <div class="form-group align-items-md-center media flex-column flex-md-row">
                            <label for="sending_to" class="font-14 bold">Sending To</label>
                            <div class="input-wrap d-flex align-items-center media-body flex-wrap">
                                <input class="theme-input-style style--two" type="email" id="sending_to" value="{{$data->email}}">
                            </div>
                            <div class="d-flex align-items-center cc-btns">
                                <h4 class="d-block mr-3 cc cc-btn">Cc</h4>
                                <h4 class="d-block bcc cc-btn">Bcc</h4>
                            </div>
                        </div>

                        <div class="cc-bcc">
                            <div class="form-group cc-form-group media align-items-md-center flex-column flex-md-row">
                                <label for="cc" class="font-14 bold">Cc</label>
                                <div class="input-wrap d-flex align-items-center media-body flex-wrap">
                                    <input class="theme-input-style style--two" type="email" id="cc">
                                </div>
                            <div class="close-btn">
                                <img src="{{asset('backend')}}/assets/img/svg/close.svg" alt="" class="svg">
                            </div>
                            </div>
                            <div class="form-group bcc-form-group media align-items-md-center flex-column flex-md-row">
                                <label for="bcc" class="font-14 bold">Bcc</label>
                                <div class="input-wrap d-flex align-items-center media-body flex-wrap">
                                    <input class="theme-input-style style--two" type="email" id="bcc">
                                </div>
                                <div class="close-btn">
                                    <img src="{{asset('backend')}}/assets/img/svg/close.svg" alt="" class="svg">
                                </div>
                            </div>
                        </div>

                        <div class="form-group align-items-md-center media flex-column flex-md-row">
                            <label for="subject" class="font-14 bold">Subject</label>
                            <div class="media-body w-100"><input class="theme-input-style style--two" type="text" id="subject"></div>
                        <div class="cc-btns"></div>
                        </div>

                        <div class="summernote">
                            <textarea name="editordata" data-trigger="summernote"></textarea>

                            <div class="note-editor-bottom d-flex justify-content-between align-content-center">
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn mr-3">Send now</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- End Main Mail -->
            </div>
            <!-- End Card -->
        </div>
    </div>


<!-- End Main Content -->


@endsection
