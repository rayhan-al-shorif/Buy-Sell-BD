@extends('layouts.app')

@section('head')

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Slider</h2>

                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-sm btn-outline-info">Action</button>
                        <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu" style="">
                            <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-info float-right addBtn" data-toggle="modal"
                        data-target="#modal-add-and-update-slider">+ Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped projects" id="sliderTable">
                        <thead>
                            <tr>
                                <th style="width: 10px">
                                    <div class="check">
                                        <input type="checkbox" id="checkbox-all" name="checkbox" />
                                    </div>
                                </th>
                                <th style="width: 10px">#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="w-20">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="sliderTableBody">
                            @if (count($sliders) == 0)
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                            @endif
                            @foreach ($sliders as $slider)
                            <tr id="{{$slider->id}}">
                                <td>
                                    <div class="check">
                                        <input type="checkbox" id="checkbox-{{$slider->id}}" name="checkbox" class="checkbox" />
                                    </div>
                                </td>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <img src="{{asset($slider->image)}}" alt="" width="100px">
                                </td>
                                <td>
                                    {{$slider->title}}
                                </td>
                                <td>{{$slider->description}}</td>
                                <td class="w-20">
                                    <span class="btn btn-info btn-sm editBtn" data-toggle="modal"
                                        data-target="#modal-add-and-update-slider">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    <span class="btn btn-danger btn-sm deleteBtn">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@include('slider.create_and_update_modal')
@endsection

@push('js')
<script src="{{ asset('js/admin/slider.js') }}"></script>
@endpush
