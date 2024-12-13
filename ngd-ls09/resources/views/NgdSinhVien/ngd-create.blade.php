<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('ngdSinhVien.ngdCreateSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Them moi sinh vien</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="ngdMasv" class="col-sm-2 col-form-label">Ma sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdMasv" name="ngdMasv">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdHosv" class="col-sm-2 col-form-label">Ho sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdHosv" name="ngdHosv">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdTensv" class="col-sm-2 col-form-label">Ten sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdTensv" name="ngdTensv">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdPhai" class="col-sm-2 col-form-label">Gioi Tinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdPhai" name="ngdPhai">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdNgaySinh" class="col-sm-2 col-form-label">Ngay Sinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdNgaySinh" name="ngdNgaySinh">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdNoiSinh" class="col-sm-2 col-form-label">Noi Sinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdNoiSinh" name="ngdNoiSinh">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdMaKH" class="col-sm-2 col-form-label"> Khoa</label>
                        <div class="col-sm-10">
                        <select name="ngdMaKH" id="ngdMaKH">
                            <option value="">--Chon khoa--</option>
                            <option value="AV">Anh Van</option>
                            <option value="TH">Tin Hoc</option>
                            <option value="TR">Triet</option>
                            <option value="T">Toan</option>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ngdHocBong" class="col-sm-2 col-form-label">Hoc Bong</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="ngdHocBong" name="ngdHocBong">
                        </div>
                      </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Them moi</button>
                    <a href="/ngd-sinhviens" class="btn btn-secondary">Quay lai</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>