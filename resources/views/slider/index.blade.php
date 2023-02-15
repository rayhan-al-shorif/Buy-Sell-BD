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
                                        <input type="checkbox" id="checkbox" name="checkbox" />
                                        <label for="checkbox"></label>
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
<script>
    $(document).ready(function () {
        $('.addBtn').on('click', function () {
            $('#for_update').html('');
            $('.slider-title').text('Add New Slider');
            $('#title').val('');
            $('#description').val('');
        });
        $('.editBtn').on('click', function () {
            tr = $(this).closest('tr');
            var id = tr.attr('id');
            $('#for_update').html(`<input type="hidden" name="slider_id" value="${id}">`);
            $('.slider-title').text('Update Slider');
            $('#title').val(tr.find('td:eq(2)').text().trim());
            $('#description').val(tr.find('td:eq(3)').text().trim());
        });

        $('.deleteBtn').on('click',function(){
            tr = $(this).closest('tr');
            var id = tr.attr('id');
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/user/slider/${id}/delete/`)
                .then(function (response) {
                    tr.remove();
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                })
            }else{
            Swal.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
            }
            })
        })
    });
</script>
@endpush
