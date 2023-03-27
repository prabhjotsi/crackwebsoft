<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : ''}}">
  <label for="sub_title" class="control-label">{{ __('*Sub Title') }}</label>
  <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ isset($mainfeaturessection->sub_title) ? $mainfeaturessection->sub_title : old('sub_title')}}">

  {!! $errors->first('sub_title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ __('*Title') }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($mainfeaturessection->title) ? $mainfeaturessection->title : old('title')}}">

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ __('*Description') }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($mainfeaturessection->description) ? $mainfeaturessection->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image">

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('years') ? 'has-error' : ''}}">
  <label for="years" class="control-label">{{ __('*Years of Experince') }}</label>
  <input class="form-control" name="years" type="text" id="years" value="{{ isset($mainfeaturessection->years) ? $mainfeaturessection->years : old('years')}}">

  {!! $errors->first('years', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('experince') ? 'has-error' : ''}}">
  <label for="experince" class="control-label">{{ __('*Experince Description') }}</label>
  <input class="form-control" name="experince" type="text" id="experince" value="{{ isset($mainfeaturessection->experince) ? $mainfeaturessection->experince : old('experince')}}">

  {!! $errors->first('experince', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
