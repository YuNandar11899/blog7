<div class="form-group">
       <label for="title">Title:</label>
       <input type="text" class="form-control" name="title" value="{{old('title')?? $posts->title?? ""}}">
</div>
<div class="error" >{{$errors->first('title')}}</div><p></p>
<div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" name="content" value="{{old('content')?? $posts->content?? ""}}">
</div>
<div class="error" >{{$errors->first('content')}}</div><p></p>
<div class="form-group">
    <label for="author">Author</label>
    {{--<input type="author" name="author" value="{{old('author')?? $posts->author?? ""}}"><p></p>--}}


    <select class="form-control" name="customer_id" id="customer_id">
        @foreach($customers as $customer)
            <option value="{{$customer->id}}"{{(($posts->customer_id??"")==$customer->id)?"selected":""}}>{{$customer->name}}</option>
        @endforeach
    </select>
</div>
<div class="error" >{{$errors->first('customer_id')}}</div><p></p>
<div class="custom-file">
    <input type="file"  name="image"  id="image" class="custom-file-input">
    <label class="custom-file-label" for="image">Choose file</label>
</div>
<div class="error">{{$errors->first('image')}}</div>
