@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('medicines.create')}}"><button type="button" class="btn btn-danger" >
                ADD MEDICINES
            </button></a></center><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">PATIENT_ID</th>
        <th scope="col">MEDICINE_ID</th>
        <th scope="col">NAME</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">ACTION</th>


        </thead>
        <tbody>


        @foreach ($medicines as $data)
            <tr>
                <th scope="row">{{$data->patient_id}}</th>
                <td>{{$data->medicine_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->department}}</td>
                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>



@stop
