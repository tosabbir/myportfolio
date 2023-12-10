<form id="commentFrom" action="{{route('store.comment')}}" method="POST">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="rnform-group"> <input name="name" id="comment_name" type="text" value="{{ old('name') }}" placeholder="Name">
                <span class="text-danger" id="comment_nameError"></span>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="rnform-group"> <input name="phone" id="comment_phone" type="text" value="{{ old('phone') }}" placeholder="Phone">

                <span class="text-danger" id="comment_phoneError"></span>
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="rnform-group"><input id="comment_email" name="email" type="email" value="{{ old('email') }}" placeholder="Email">
                <span class="text-danger" id="comment_emailError"></span>
                 @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="rnform-group">
                <textarea name="message" id="comment_message" placeholder="Comment">{{old('message')}}</textarea>
                <span class="text-danger" id="comment_messageError"></span>
                @error('message')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <button class="rn-btn" name="submit" type="submit" id="comment_submit" ><span>SUBMIT NOW</span></button>
        </div>
    </div>
</form>
