<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : ''}}">
  <label for="sub_title" class="control-label">{{ __('*Sub Title') }}</label>
  <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ isset($servicessection->sub_title) ? $servicessection->sub_title : old('sub_title')}}">

  {!! $errors->first('sub_title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ __('*Title') }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($servicessection->title) ? $servicessection->title : old('title')}}">

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ __('*Description') }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($servicessection->description) ? $servicessection->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
