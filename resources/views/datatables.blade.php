<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 8 DataTables Example</title>
        <title>Full Container listing</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    </head>
    <body>

        <div class="container mt-4">

        <div class="card">

            <div class="card-header text-center font-weight-bold">
            <h2>Containers</h2>
            </div>

            <div class="card-body">

                <table class="table table-bordered" id="datatables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PREFIX</th>
                        <th>TANK NUMBER</th>
                        <th>Check Digit</th>
                        <th>MANUFACTURER</th>
                        <th>YEAR OF MANUFACTURE</th>
                        <th>MANUFACTURERS SERIAL NUMBER</th>
                        <th>FRAME DIMENSIONS M</th>
                        <th>TARE WEIGHT</th>
                        <th>TEMP RATING Degrees C</th>
                        <th>WORKING Pressure</th>
                        <th>TEST Pressure</th>
                        <th>UN Tank Type</th>
                        <th>ACTUAL Capacity Ltrs</th>
                        <th>DISCHARGE Type</th>
                        <th>NO OF Bottom Closures</th>
                        <th>TYPE OF Heating</th>
                        <th>STEAM Heating Area sqm</th>
                        <th>DEDICATED PRODUCT NAME</th>
                        <th>YEAR of Refurb Required</th>
                        <th>REFURB Category</th>
                        <th>REFURB Completed</th>
                        <th>DATE Refurb Completed</th>
                        <th>JAPANESE FDA Approved</th>
                        <th>INTERNALLY Lined</th>
                    </tr>
                </thead>
                </table>

            </div>

        </div>
        <script type="text/javascript">

        $(document).ready( function () {
            $('#datatables-example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('yajra-datatables') }}",
                columns: [
                            { data: 'ID', name: 'ID' },
                            { data: 'PREFIX', name: 'PREFIX' },
                            { data: 'TANK NUMBER', name: 'TANK NUMBER' },
                            { data: 'CHECK DIGIT', name: 'CHECK DIGIT' },
                            { data: 'MANUFACTURER', name: 'MANUFACTURER' },
                            { data: 'YEAR OF MANUFACTURE', name: 'YEAR OF MANUFACTURE' },
                            { data: 'MANUFACTURERS SERIAL NUMBER', name: 'MANUFACTURERS SERIAL NUMBER' },
                            { data: 'FRAME DIMENSIONS M', name: 'FRAME DIMENSIONS M' },
                            { data: 'TARE WEIGHT', name: 'TARE WEIGHT' },
                            { data: 'TEMP RATING Degrees C', name: 'TEMP RATING Degrees C' },
                            { data: 'WORKING Pressure', name: 'WORKING Pressure' },
                            { data: 'TEST Pressure', name: 'TEST Pressure' },
                            { data: 'UN Tank Type', name: 'UN Tank Type' },
                            { data: 'ACTUAL Capacity Ltrs', name: 'ACTUAL Capacity Ltrs' },
                            { data: 'DISCHARGE Type', name: 'DISCHARGE Type' },
                            { data: 'NO OF Bottom Closures', name: 'NO OF Bottom Closures' },
                            { data: 'TYPE OF Heating', name: 'TYPE OF Heating' },
                            { data: 'STEAM Heating Area sqm', name: 'STEAM Heating Area sqm' },
                            { data: 'DEDICATED PRODUCT NAME', name: 'DEDICATED PRODUCT NAME' },
                            { data: 'YEAR of Refurb Required', name: 'YEAR of Refurb Required' },
                            { data: 'REFURB Category', name: 'REFURB Category' },
                            { data: 'REFURB Completed', name: 'REFURB Completed' },
                            { data: 'DATE Refurb Completed', name: 'DATE Refurb Completed' },
                            { data: 'JAPANESE FDA Approved', name: 'JAPANESE FDA Approved' },
                            { data: 'INTERNALLY Lined', name: 'INTERNALLY Lined' }

                        ]
                });
            });
        </script>


        {{-- <div class="container mt-4">

            <div class="card">

            <div class="card-header text-center font-weight-bold">
                <h2>Laravel 8 DataTables Example Tutorial</h2>
            </div>

            <div class="card-body">

                <table class="table table-bordered" id="datatables-example">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        </tr>
                    </thead>
                </table>

            </div>

            </div>
        <script type="text/javascript">

        $(document).ready( function () {
            $('#datatables-example').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('yajra-datatables') }}",
                    columns: [
                            { data: 'id', name: 'id' },
                            { data: 'name', name: 'name' },
                            { data: 'email', name: 'email' },
                            { data: 'created_at', name: 'created_at' }
                        ]
                });
            });
        </script> --}}

        </div>
    </body>


</html>
