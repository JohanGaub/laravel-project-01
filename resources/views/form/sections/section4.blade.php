<section id="content4" class="tab-content">
        <h3>@lang('form.analysis.offer')</h3>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.quality.program')</label>
                <textarea id="analysis-offer"  placeholder="" class="form-control textarea-1600" name="project_content[11]" maxlength="1600">{{ $result->content[11] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur11">0 / 1600 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.evolution.candidacy')</label>
                <textarea id="evo-candidacy1"  placeholder="" class="form-control textarea-300" name="project_content[12]" maxlength="300">{{ $result->content[12] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur12">0 / 300 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.program')</label>
                <textarea id="adv-prog"  placeholder="" class="form-control textarea-200" name="project_content[13]" maxlength="200">{{ $result->content[13] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur13">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.urban.quality')</label>
                <textarea id="urban"  placeholder="" class="form-control textarea-1600" name="project_content[14]" maxlength="1600">{{ $result->content[14] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur14">0 / 1600 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.quality')</label>
                <textarea id="advice"  placeholder="" class="form-control textarea-200" name="project_content[15]" maxlength="200">{{ $result->content[15] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur15">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.innovative.character')</label>
                <textarea id="character-innovative"  placeholder="" class="form-control textarea-1600" name="project_content[16]" maxlength="1600">{{ $result->content[16] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur16">0 / 1600 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.evolution.candidacy')</label>
                <textarea id="evo-candidacy2"  placeholder="" class="form-control textarea-300" name="project_content[17]" maxlength="300">{{ $result->content[17] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur17">0 / 300 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.innovative')</label>
                <textarea id="adv-innovative"  placeholder="" class="form-control textarea-200" name="project_content[18]" maxlength="200">{{ $result->content[18] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur18">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.global.warning')</label>
                <textarea id="global-warning"  placeholder="" class="form-control textarea-1600" name="project_content[19]" maxlength="1600">{{ $result->content[19] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur19">0 / 1600 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.evolution.candidacy')</label>
                <textarea id="evo-candidacy3"  placeholder="" class="form-control textarea-300" name="project_content[20]" maxlength="300">{{ $result->content[20] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur20">0 / 300 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.global.advice')</label>
                <textarea id="sections"  placeholder="" class="form-control textarea-200" name="project_content[21]" maxlength="200" autofocus>{{ $result->content[21] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur21">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.legal.assembly')</label>
                <textarea id="legal-assembly"  placeholder="" class="form-control textarea-1600" name="project_content[22]" maxlength="1600">{{ $result->content[22] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur22">0 / 1600 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.assembly')</label>
                <textarea id="adv-assembly"  placeholder="" class="form-control textarea-200" name="project_content[23]" maxlength="200">{{ $result->content[23] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur23">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label label-red">@lang('form.sale.price')</label>
                <textarea id="sale-price"  placeholder="" class="form-control textarea-500" name="project_content[24]" maxlength="500">{{ $result->content[24] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur24">0 / 500 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.price')</label>
                <textarea id="adv-price"  placeholder="" class="form-control textarea-2. 00" name="project_content[25]" maxlength="200">{{ $result->content[25] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur25">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label label-red">@lang('form.sale.price')</label>
            <textarea id="sale-price"  placeholder="" class="form-control textarea-500" name="project_content[26]" maxlength="500">{{ $result->content[26] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur26">0 / 500 @lang('form.char_max')</p>
        </div>
    </div>
    @if(Auth::user() && Auth::user()->role->name == "Administrator" || Auth::user()->role->name == "Supervisor")
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.price')</label>
                <textarea id="adv-price"  placeholder="" class="form-control textarea-200" name="project_content[27]" maxlength="200">{{ $result->content[27] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur27">0 / 200 @lang('form.char_max')</p>
            </div>
        </div>
    @endif
</section>