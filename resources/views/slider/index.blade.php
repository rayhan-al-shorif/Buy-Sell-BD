@extends('layouts.app')

@section('head')
<style>
.check {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
}

.check input[type="checkbox"] {
  opacity: 0;
  width: 0;
  height: 0;
}

.check label {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  background: #fff;
}

.check label:after {
  content: '';
  position: absolute;
  display: none;
}

.check input[type="checkbox"]:checked + label:after {
  display: block;
  top: 4px;
  left: 8px;
  width: 4px;
  height: 8px;
  border: solid #000;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
</style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Slider</h2>
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
                                        <label for="checkbox-all"></label>
                                    </div>
                                </th>
                                <th style="width: 10px">#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="w-20">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($sliders) == 0)
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                            @endif
                            @foreach ($sliders as $slider)
                            <tr id="{{$slider->id}}">
                                <td>
                                    <div class="check">
                                        <input type="checkbox" id="checkbox-{{$slider->id}}" name="checkbox" />
                                        <label for="checkbox-{{$slider->id}}"></label>
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
