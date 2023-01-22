<!--begin::Modal header-->
<div class="modal-header" id="kt_modal_add_user_header">
    <!--begin::Modal title-->
    <h2 class="fw-bolder">{{$project->id ? 'Update' :'Add'}} Project {{$project->id ? ' ' . $project->name : ''}}</h2>
    <!--end::Modal title-->
    <!--begin::Close-->
    <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="$('#kt_modal_add_user').modal('hide');">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
        <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Close-->
</div>
<!--end::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
    <!--begin::Form-->
    <form id="kt_modal_add_user_form" class="form" action="#">
        <!--begin::Scroll-->
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Project Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="project_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Project Name" value="{{$project->project_name}}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Client</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="client" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Client Name" value="{{$project->client}}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Project Leader</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="project_leader" class="selectpicker form-control form-control-solid mb-3 mb-lg-0" id="project_leader">
                    <option value="">Select Project Leader</option>
                    @foreach($leaders as $leader)
                        <option value="{{$leader->id}}" {{$leader->id == $project->project_leader ? 'selected' : ''}}>{{$leader->name}}</option>
                    @endforeach
                </select>
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Start Date</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="date" name="start_date" class="form-control form-control-solid mb-3 mb-lg-0" id="start_date" value="{{$project->start_date}}">
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">End Date</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="date" name="end_date" class="form-control form-control-solid mb-3 mb-lg-0" id="end_date" value="{{$project->end_date}}">
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--end::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Progress</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="number" max="100" min="0" name="progress" class="form-control form-control-solid mb-3 mb-lg-0" id="progress" value="{{$project->progress}}">
                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Scroll-->
        <!--begin::Actions-->
        <div class="text-center pt-15">
            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
            <button type="button" id="button_save" onclick="handle_save_modal('#button_save','#kt_modal_add_user_form','{{$project->id ? route('project.update', $project->id) : route('project.store')}}','{{$project->id ? 'PATCH' : 'POST'}}','#kt_modal_add_user');" class="btn btn-primary" data-kt-users-modal-action="submit">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Modal body-->