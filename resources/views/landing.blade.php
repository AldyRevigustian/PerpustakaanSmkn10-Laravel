@extends('layouts.app')
@section('content')
    {{-- <table class="table table-bordered" style="display: flex;
        flex-direction: column;
        align-items: center;">

           <tr>
                <th class="col">
                    ID
                </th >
                <th class="col">
                    Member Id
                </th>
                <th class="col">
                    Member Name
                </th>
                <th class="col">
                    Institution
                </th>
                <th class="col">
                    Created At
                </th>
            </tr>
            @foreach ($visitor as $v)
                <tr>

                    <td>
                        {{ $v->visitor_id }}
                    </td>
                    <td>
                        {{ $v->member_id == null ? '-' : $v->member_id }}
                    </td>
                    <td>
                        {{ $v->member_name }}
                    </td>
                    <td>
                        {{ $v->institution }}
                    </td>
                    <td>
                        {{ $v->checkin_date }}
                    </td>
                </tr>
            @endforeach
    </table> --}}
    <div class="col-12 col-md-4 mx-auto mt-5">

        <div class="card shadow mt-5">
            <div class="card-header">
                <div class="text-center">
                    <span>
                    <i class="bi bi-book-half mb-5 text-dark" style="font-size:70px;"></i>
                    </span>
                    <h4 class="text-dark mb-4 mt-1">Perpustakaan SMKN 10 Jakarta Timur</h4>
                </div>
            </div>
         
            
            <div class="card-body">
                
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-12 col-md-12 mt-1">                                    
                            <select class="form-select" id="select">
                                <option value="member" selected disabled>Choose Type</option>
                                <option value="member">Member</option>
                                <option value="non">Non Member</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <div id="select-option" hidden>                                                                       
                                <select class="choices form-select" name="member_id">                                                                                        
                                    <optgroup label="Member Name">
                                        <option value="member" selected>Select Member</option>
                                    @foreach ($member as $m)
                                        <option value="{{$m->member_id}}">{{$m->member_name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-between">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="member_name" placeholder="Member Name" id="member_name" hidden autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="institution" placeholder="Institution" hidden id="institution" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>                                                
                    <div class="col-12 col-md-12 mt-3">
                        <button class="btn btn-dark w-100" type="submit">Submit</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>



    <script type="text/javascript">
        $('#select-id').select2({})
    </script>
    <script>
        let select = document.getElementById('select')
        select.addEventListener('input', () => {
            console.log(select.value);
            if (select.value == 'member') {
                document.getElementById('member_name').hidden = true

                document.getElementById('select-option').hidden = false

                document.getElementById('institution').hidden = true
            } else {
                document.getElementById('member_name').hidden = false

                document.getElementById('select-option').hidden = true

                document.getElementById('institution').hidden = false

            }
        })
    </script>
@endsection
