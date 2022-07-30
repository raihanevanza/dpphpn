@extends('template.base-master')
@section('title', 'Program Kerja')
    @section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Program Kerja</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Program Kerja</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>File Program Kerja</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('master-work-program.index') }}",
            columns: [{
                    data: 'work_program_file',
                    name: 'work_program_file'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

    $('#dataTable').on('submit','.process-delete',function(e) {
        e.preventDefault();
        if (confirm('Apakah anda yakin untuk menghapus data ini ?')) {
           var url = $(this).attr('action');
           $.ajax({
               url : url,
               method: 'post',
               data : $(this).serialize(),
               success:function(xhr){
                   if (xhr.status == 200) {
                       alert(xhr.message);
                       location.reload();
                   } else {
                    alert(xhr.message);
                   }
               }
           })
        }
    });
</script>
@endsection
