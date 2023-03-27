<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">{{__('*Logo')}}</label>
    <input class="form-control" name="logo" type="file" id="logo" >

    {!! $errors->first('logo', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logo_name') ? 'has-error' : ''}}">
    <label for="logo_name" class="control-label">{{__('*Logo Name')}}</label>
    <input class="form-control" name="logo_name" type="text" id="logo_name" value="{{ isset($navbar->logo_name) ? $navbar->logo_name : old('logo_name')}}" >

    {!! $errors->first('logo_name', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('home') ? 'has-error' : ''}}">
    <label for="home" class="control-label">{{__('*Home')}}</label>
    <input class="form-control" name="home" type="text" id="home" value="{{ isset($navbar->home) ? $navbar->home : old('home')}}" >

    {!! $errors->first('home', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group style-demo {{ $errors->has('home_style_1') ? 'has-error' : ''}}" >
    <label for="home_style_1" class="control-label">{{__('*Home Style 1')}}</label>
    <input class="form-control" name="home_style_1" type="text" id="home_style_1" value="{{ isset($navbar->home_style_1) ? $navbar->home_style_1 : old('home_style_1')}}" >

    {!! $errors->first('home_style_1', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group style-demo {{ $errors->has('home_style_2') ? 'has-error' : ''}}" >
    <label for="home_style_2" class="control-label">{{__('*Home Style 2')}}</label>
    <input class="form-control" name="home_style_2" type="text" id="home_style_2" value="{{ isset($navbar->home_style_2) ? $navbar->home_style_2 : old('home_style_2')}}" >

    {!! $errors->first('home_style_2', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group style-demo {{ $errors->has('home_style_3') ? 'has-error' : ''}}" >
    <label for="home_style_3" class="control-label">{{__('*Home Style 3')}}</label>
    <input class="form-control" name="home_style_3" type="text" id="home_style_3" value="{{ isset($navbar->home_style_3) ? $navbar->home_style_3 : old('home_style_3')}}" >

    {!! $errors->first('home_style_3', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('about_us') ? 'has-error' : ''}}">
    <label for="about_us" class="control-label">{{__('*About Us')}}</label>
    <input class="form-control" name="about_us" type="text" id="about_us" value="{{ isset($navbar->about_us) ? $navbar->about_us : old('about_us')}}" >

    {!! $errors->first('about_us', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('services') ? 'has-error' : ''}}">
    <label for="services" class="control-label">{{__('*Services')}}</label>
    <input class="form-control" name="services" type="text" id="services" value="{{ isset($navbar->services) ? $navbar->services : old('services')}}" >

    {!! $errors->first('services', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('faq') ? 'has-error' : ''}}">
    <label for="faq" class="control-label">{{__('*FAQ')}}</label>
    <input class="form-control" name="faq" type="text" id="faq" value="{{ isset($navbar->faq) ? $navbar->faq : old('faq')}}" >

    {!! $errors->first('faq', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
    <label for="contact" class="control-label">{{__('*Contact')}}</label>
    <input class="form-control" name="contact" type="text" id="contact" value="{{ isset($navbar->contact) ? $navbar->contact : old('contact')}}" >

    {!! $errors->first('contact', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
