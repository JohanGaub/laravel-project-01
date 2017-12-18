<section id="content6" class="tab-content">
    <h3 class="title-items">@lang('form.graphic.items')</h3>
    <!-- row1 -->
    <!-- picture1 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.viewpoint_1')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" accept=".jpg, .jpeg, .png, .pdf" type="file" class="form-control input-style"  id="file1" name="project_content[29]" value="{{ $result->content[29] }}">
                        <button type="button" onclick="$('#file1').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input" type="checkbox" name="picture[0]" value="{{ $result->content[29] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal0">
                    @if(empty($result->content[29]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[29]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[29]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[29]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture2 -->
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.viewpoint_2')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file2" name="project_content[30]" value="{{ $result->content[30] }}">
                        <button type="button" onclick="$('#file2').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[1]" value="{{ $result->content[30] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal1">
                    @if(empty($result->content[30]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[30]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body ">
                            @if(empty($result->content[30]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[30]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row2 -->
    <!-- picture3 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.viewpoint_3')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file3" name="project_content[31]" value="{{ $result->content[31] }}">
                        <button type="button" onclick="$('#file3').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[2]" value="{{ $result->content[31] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal2">
                    @if(empty($result->content[31]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[31]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture4 -->
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.overall_plan')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file4" name="project_content[32]" value="{{ $result->content[32] }}">
                        <button type="button" onclick="$('#file4').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[3]" value="{{ $result->content[32] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal3">
                    @if(empty($result->content[32]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[32]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body ">
                            @if(empty($result->content[32]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[32]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row3 -->
    <!-- picture5 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.representative_diagram_program')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file5" name="project_content[33]" value="{{ $result->content[33] }}">
                        <button type="button" onclick="$('#file5').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[4]" value="{{ $result->content[33] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal4">
                    @if(empty($result->content[33]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[33]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[33]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[33]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture6 -->
        <div class=" justify-content-center picture-row">
            <h5 class="picture-title mx-3">@lang('form.raise_wall')</h5>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file6" name="project_content[34]" value="{{ $result->content[34] }}">
                        <button type="button" onclick="$('#file6').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[5]" value="{{ $result->content[34] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal5">
                    @if(empty($result->content[34]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[34]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body ">
                            @if(empty($result->content[34]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[34]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row4 -->
    <!-- picture7 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.cut')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file7" name="project_content[35]" value="{{ $result->content[35] }}">
                        <button type="button" onclick="$('#file7').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[6]" value="{{ $result->content[35] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal6">
                    @if(empty($result->content[35]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[35]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[35]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[35]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture8 -->
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.level_plan')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file8" name="project_content[36]" value="{{ $result->content[36] }}">
                        <button type="button" onclick="$('#file8').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[7]" value="{{ $result->content[36] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal7">
                    @if(empty($result->content[36]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[36]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body ">
                            @if(empty($result->content[36]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[36]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row5 -->
    <!-- picture9 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture-row">
            <h4 class="picture-title mx-3">@lang('form.ground_floor_outside_plan')</h4>
            <div class="picture-block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify-picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input-style"  id="file9" name="project_content[37]" value="{{ $result->content[37] }}">
                        <button type="button" onclick="$('#file9').trigger('click');" class="load-file">@lang('form.upload-file')</button>
                    </div>
                    <div class="delete-file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[8]" value="{{ $result->content[37] }}">
                        <label>@lang('form.delete-file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal8">
                    @if(empty($result->content[37]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[37]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[37]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[37]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture 10-->
        <div class=" justify-content-center picture-row">

        </div>
    </div>
</section>


