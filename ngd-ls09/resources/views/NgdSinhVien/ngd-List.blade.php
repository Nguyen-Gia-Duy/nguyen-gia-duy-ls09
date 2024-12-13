<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1>Danh sach sinh vien</h1>
            </div>
            <div class="card-body">
                <table class="table-table bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Ma sv</th>
                        <th>Ho sv</th>
                        <th>Ten sv</th>
                        <th>Gioi tinh</th>
                        <th>Ngay sinh</th>
                        <th>Noi sinh</th>
                        <th>Ma khoa</th>
                        <th>Hoc bong</th>
                        <th>Chuc nang</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $stt=0;
                            
                        @endphp
                        @foreach ($ngdSinhviens as $item)
                        @php
                        $stt++;
                        @endphp
                            <tr>
                                <td class="text-center">1</td>
                                <td>{{item->ngdMaSV}}</td>
                                <td>{{item->ngdHoSV}}</td>
                                <td>{{item->ngdTenSV}}</td>
                                <td>{{item->ngdPhai}}</td>
                                <td>{{item->ngdNgaySinh}}</td>
                                <td>{{item->ngdNoiSinh}}</td>
                                <td>{{item->ngdMaKh}}</td>
                                <td>{{item->ngdHocBong}}</td>
                                <td class="text-center">
                                    View/ Edit/ Delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>Tong so sinh vien :{{$ngdSinViens->count()}}</h3>
                <a href="/ngd-sinhviens/create" class="btn btn-primary">Them moi</a>
        </div>
        </div>
    
    </section>
</body>
</html>