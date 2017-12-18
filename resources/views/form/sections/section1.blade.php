<section id="content1" class="tab-content">
    <h3 class="mr-auto">@lang('form.project.identity')</h3>
    @if(Auth::user() && Auth::user()->role->name == "Administrator")
    <a class="ml-auto" href="{{action('Back\AdminController@generatePDF', $result->result_id)}}" target="_blank">@lang('form.generate_PDF')</a>
    @endif
    <div class="row justify-content-between">
        <div class="form-group col-md-2">
            <label for="" class="col-form-label">@lang('form.n_project')</label>
            <input id="result_id" type="hidden" placeholder="" class="form-control" name="result_id" value="{{ $result->result_id }}">
            <input id="" type="text" placeholder="" class="form-control textarea-min bg-white" name="project_content[0]" value="{{ $result->project_id }}" readonly>
            <p class="line-under-textarea mt-1">@lang('form.number.chosen')</p>
        </div>
        <div class="form-group col-md-6">
            <label for="" class="col-form-label">@lang('form.project.title')</label>
            <input id="title" type="text" placeholder="" class="form-control textarea-min bg-white" name="project_content[1]" value="{{ $result->project_name }}" readonly maxlength="100">
        </div>
    </div>
    <hr>
    <h3>@lang('form.line-up')</h3>
    <div class="row justify-content-left">
        <div class="form-group col-12 col-lg-9 col-xl-6">
            <label for="" class="col-form-label">@lang('form.mandatory')</label>
            <textarea id="mandatory" placeholder="" class="form-control textarea-100" name="project_content[2]" maxlength="100" autofocus>{{ $result->content[2] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur2">0 / 100 @lang('form.char_max')</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.designer')</label>
            <textarea id="designer" placeholder="" class="form-control textarea-300" name="project_content[3]" maxlength="300">{{ $result->content[3] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur3">0 / 300 @lang('form.char_max')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.investor.sponsor')</label>
            <textarea id="sponsor" placeholder="" class="form-control textarea-300" name="project_content[4]" maxlength="300">{{ $result->content[4] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur4">0 / 300 @lang('form.char_max')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.manager')</label>
            <textarea id="manager"  placeholder="" class="form-control textarea-500" name="project_content[5]" maxlength="500">{{ $result->content[5] }} </textarea>
            <p class="line-under-textarea mt-1" id="compteur5">0 / 500 @lang('form.char_max')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.other')</label>
            <textarea id="other"  placeholder="" class="form-control textarea-500" name="project_content[6]" maxlength="500">{{ $result->content[6] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur6">0 / 500 @lang('form.char_max')</p>
        </div>
    </div>
</section>