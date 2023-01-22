<div class="card-body pt-0" style="overflow-x:auto;">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                    </div>
                </th>
                <th class="text-dark min-w-250px">Projet Name</th>
                <th class="text-dark min-w-250px">Client</th>
                <th class="text-dark min-w-250px">Project Leader</th>
                <th class="text-dark min-w-150px">Start Date</th>
                <th class="text-dark min-w-150px">End Date</th>
                <th class="text-dark min-w-125px">Progress</th>
                <th class="text-center text-dark min-w-100px">Action</th>
            </tr>
            <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="text-gray-600 fw-bold">
            @forelse($projects as $project)
            <!--begin::Table row-->
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <!--end::Checkbox-->
                <!--begin::Role=-->
                <td>{{$project->project_name}}</td>
                <!--end::Role=-->
                <!--begin::Last login=-->
                <td>
                    <div class="badge badge-light fw-bolder">{{$project->client}}</div>
                </td>
                <!--end::Last login=-->
                  <!--begin::User=-->
                  <td class="d-flex align-items-center">
                    <!--begin:: Avatar -->
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="#">
                            <div class="symbol-label">
                                <img src="{{$project->leader ? asset('storage/' .$project->leader->photo) : asset('storage/avatar/blank.png')}}" alt="Emma Smith" class="w-100" />
                            </div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <a href="#" class="text-gray-800 text-hover-primary mb-1">{{$project->leader ? $project->leader->name : ''}}</a>
                        <span>{{$project->leader ? $project->leader->email : ''}}</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::User=-->
                <!--begin::Joined-->
                <td>{{date('d M Y', strtotime($project->start_date))}}</td>
                <!--begin::Joined-->
                <!--begin::end-->
                <td>{{date('d M Y', strtotime($project->end_date))}}</td>
                <td>
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-bolder fs-6">{{$project->progress}}%</span>
                        </div>
                        <div class="h-5px w-100 bg-secondary mb-3">
                            <div class="{{$project->progress < 100 ? 'bg-primary' : 'bg-success'}} rounded h-5px" role="progressbar" style="width: {{$project->progress}}%;" aria-valuenow="{{$project->progress}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </td>
                <!--begin::end-->
                <!--begin::Action=-->
                <td class="text-end">
                    <a href="javascript:void(0);" onclick="handle_delete('{{route('project.destroy', $project->id)}}');" class="btn btn-icon btn-bg-danger btn-active-color-primary btn-sm">
                        <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#ffff" fill-rule="nonzero"></path>
                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#ffff" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <a href="javascript:void(0);" onclick="handle_open_modal('{{route('project.edit', $project->id)}}', '#kt_modal_add_user','#contentUserModal');" class="btn btn-icon btn-bg-success btn-active-color-primary btn-sm me-1">
                        <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#ffff" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#ffff" fill-rule="nonzero" opacity="0.3"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </td>
                <!--end::Action=-->
            </tr>
            <!--end::Table row-->
            @empty
            <tr><td colspan="7" align="center">Empty</td></tr>
            @endforelse
        </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
</div>
<div class="d-flex justify-content-between">
    {{$projects->links('vendor.pagination.custom')}}
    <p>5 from {{$projects->total()}} data shows</p>
</div>