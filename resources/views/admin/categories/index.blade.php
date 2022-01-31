@extends("admin.layouts.app")
@section('style')

    <link rel="stylesheet" href="{{ asset('asset/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

@endsection


@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategoriler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kategoriler</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kategorileri Görüntüleyin,Düzenleyin Veya Silin</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Başlık</th>
                                        <th>Oluşturulma Tarihi</th>
                                        <th>Son Güncelleme</th>
                                        <th>İşlem</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($categories as $category)
                                            <tr>
                                        <td>{!! $category->title !!}</td>
                                        <td>{!! $category->created_at !!}</td>
                                        <td>{!! $category->updated_at !!}</td>
                                            <td class="project-actions text-center">

                                                <a class="btn btn-info btn-sm" href="{{ route('admin.categories.edit',$category->id) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Düzenle
                                                </a>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-destroy">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Sil
                                                </button>
                                            </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Başlık</th>
                                        <th>Oluşturulma Tarihi</th>
                                        <th>Son Güncelleme</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        @foreach($categories as $category)

                        <div class="modal fade" id="modal-destroy">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Dikkat ! Silme İşlemi</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{!! $category->title !!} Kategorisini Silmek İstediğinize Emin Misiniz ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>
                                        <form action="{{route("admin.categories.destroy",$category->id)}}" method="post"  class="ml-2">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Sil</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    @endforeach

                    <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('asset/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
