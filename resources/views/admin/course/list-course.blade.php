@extends('admin.layouts.main')

@section('content')
    <div class="box-content">
        <div class="seperator-header layout-top-spacing">
            <h4 class="">Danh sách khóa học</h4>
        </div>

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="dt--top-section">
                            <div class="row">
                                <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                                    <div class="dataTables_length" id="zero-config_length">
                                        <label>Results : 
                                            <select name="zero-config_length" aria-controls="zero-config" class="form-control">
                                                <option value="7">7</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                                    <div id="zero-config_filter" class="dataTables_filter">
                                        <label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                            <input type="search" name="keyword" class="form-control" placeholder="Tim kiếm..."  aria-controls="zero-config">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <table id="style-2" class="table style-2 dt-table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column dt-no-sorting sorting_asc" rowspan="1" colspan="1"
                                        aria-label=" Record no. " style="width: 78px;">
                                        <div class="form-check form-check-primary d-block">
                                            <input class="form-check-input chk-parent" type="checkbox"
                                                id="form-check-default">
                                        </div>
                                    </th>
                                    <th scope="col" class="text-info">Tên</th>
                                    <th scope="col" class="text-info">Giảng viên</th>
                                    <th scope="col" class="text-info">Giá</th>
                                    <th scope="col" class="text-info">Số bài học</th>
                                    <th scope="col" class="text-info">Số học viên</th>
                                    <th scope="col" class="text-info">Đánh giá</th>
                                    <th scope="col" class="text-info">View</th>
                                    <th class="text-center dt-no-sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($listCourse) && !empty($listCourse))
                                    @foreach ($listCourse as $course)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input custom_mixed_child" name="course_ids"
                                                        type="checkbox" dt-id="{{ $course->id }}">
                                                </div>
                                            </td>
                                            <td>
                                                {{-- <p class="mb-0">CEO</p> --}}
                                                <span class="text-white">{{ $course->name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-white">{{ $course->teacher_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-white">{{ $course->price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-white">{{ $course->lesson_count }}</span>
                                            </td>
                                            <td>
                                                <span class="text-white">10</span>
                                            </td>
                                            <td>
                                                <span class="text-white">{{ $course->rating }}</span>
                                            </td>
                                            <td>
                                                <span class="text-white">{{ $course->view }}</span>
                                            </td>

                                            <td class="text-center">
                                                <div class="action-btns">
                                                    <a href="javascript:void(0);"
                                                        class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip"
                                                        data-placement="top" title="View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3">
                                                            </circle>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                                        data-placement="top" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-edit-2">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip"
                                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
