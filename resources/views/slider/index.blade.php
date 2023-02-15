@extends('layouts.app')

@section('head')
<style>
input[type="checkbox"] {
  height: 18px;
  width: 18px;
  margin: 0;
  padding: 0;
  opacity: 1;
  appearance: none;
  border: 1px solid #3b489a;
  border-radius: 3px;
  background: #fff;
  position: relative;
  margin-right: 10px;
  cursor: pointer;
}
.checked{
  border: 1px solid #3b489a!important;
  background: #3b489a!important;
}
.checked:before,
.checked:after
{
  content: "";
  position: absolute;
  height: 2px;
  background: #fff;
}


.checked:before {
  width: 6px;
  top: 9px;
  left: 3px;
  transform: rotate(44deg);
}

.checked:after {
  width: 10px;
  top: 7px;
  left: 5px;
  transform: rotate(-55deg);
}

input[type="checkbox"]:focus {
  outline: none;
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
