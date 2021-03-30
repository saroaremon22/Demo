@extends('welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('prescriptions.create')}}"><button type="button" class="btn btn-danger" >
                ADD PRESCRIPTION
            </button></a></center><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">PATIENT_ID</th>
        <th scope="col">NAME</th>
        <th scope="col">CONTACT</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">ACTION</th>


        </thead>
        <tbody>


       @foreach($prescriptions as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->patien_id}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->consumption_amount}}</td>
                <td>{{$data->date}}</td>
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
