@extends('layouts.app')
@section('content')
    <div class="col-12 col-md-4 mx-auto mt-5">
        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-header mt-4">
                <div class="text-center">
                    {{-- <span>
                        <i class="bi bi-book-half mb-5 text-dark" style="font-size:70px;"></i>
                    </span> --}}
                    <img src="{{ asset('assets/images/logo/SMKN 10.jpeg') }}" alt="" height="100px" class="mb-3">
                    <h4 class="text-dark mt-3">Perpustakaan SMKN 10 Jakarta Timur</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="col-12 col-md-12 mt-4">
                        <select class="form-select" id="select" required>
                            <option value="member" selected>Member</option>
                            <option value="non">Non Member</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12 mt-3 mb-3">


                        <div id="member">
                            <select class="choices form-select" id="select-member" name="member_id" required>
                                <optgroup label="Member Name">
                                    <option value=""selected disabled>Select Member</option>
                                    @foreach ($member as $m)
                                        <option value="{{ $m->member_id }}">{{ $m->member_id }} | {{ $m->member_name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="row" id="non-member" hidden>
                            <div class="col-md-6 col-6">
                                <input class="form-control" type="text" name="member_name" placeholder="Member Name"
                                    id="member-name" autocomplete="off">
                            </div>
                            <div class="col-md-6 col-6">
                                <input class="form-control" type="text" name="institution" placeholder="Institution"
                                    id="member-institution" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mt-1">
                        <button class="btn btn-dark w-100" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        let select = document.getElementById('select')
        select.addEventListener('input', () => {

            console.log(select.value);
            if (select.value == 'member') {
                document.getElementById('member').hidden = false
                document.getElementById('non-member').hidden = true

                document.getElementById('select-member').setAttribute('required', true);

                document.getElementById('member-name').removeAttribute('required');
                document.getElementById('member-institution').removeAttribute('required');

                document.getElementById('member-name').value = null;
                document.getElementById('member-institution').value = null;
            } else {
                document.getElementById('member').hidden = true
                document.getElementById('non-member').hidden = false

                document.getElementById('member-name').setAttribute('required', true);
                document.getElementById('member-institution').setAttribute('required', true);

                document.getElementById('select-member').removeAttribute('required');

                document.getElementById('select-member').selectedIndex = '0';
            }
        })
    </script>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(300, 0).slideUp(300, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>
@endpush
