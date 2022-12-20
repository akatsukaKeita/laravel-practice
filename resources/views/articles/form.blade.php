@csrf 
<div class="mb-3 mt-3">
  <label class="form-label">タイトル</label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput" value="{{ old('title') }}">
</div>
<div class="mb-5">
  <label for="exampleFormControlTextarea1" class="form-label">本文</label>
  <textarea name="body"class="form-control" id="exampleFormControlTextarea1" rows="4" value="{{ old('body') }}"></textarea>
</div>

<!-- @csrf 
<dl class="form-list">
    <dt>タイトル</dt>
    <dd><input type="text" name="title" value="{{ old('title')}}"></dd>
    <dt>本文</dt>
    <dd><textarea name="body" rows="5"></textarea></dd>
</dl> -->