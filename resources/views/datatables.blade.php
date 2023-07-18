@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css
    ">
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js
                    "></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js
                    "></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js
                    "></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js
                    "></script>
    <script>
        new DataTable('#example', {
            responsive: true
        });
    </script>
@endsection

{{-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css --}}
