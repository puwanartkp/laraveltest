<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena Groove</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .navbar-default {
            background-color: #008000;
            text-align: center;
        }
        .navbar-default .navbar-brand {
            color: white;
            display: inline-block;
            float: none;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: white;
        }
        .navbar-header {
            width: 100%;
            text-align: center;
        }
        .navbar-brand {
            display: inline-block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">สนามฟุตบอลหญ้าเทียม อารีน่า กรู๊ฟ นวนคร</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <br />
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4>เข้าสู่ระบบ</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="username">ชื่อผู้ใช้</label>
                            <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <br />
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> เข้าสู่ระบบ</button>
                        </div>
                        <hr>
                        <p>ยังไม่เป็นสมาชิกใช่ไหม คลิกที่นี่เพื่อ <a href=" ">สมัครสมาชิก</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <label>&copy; Arena Groove</label>
        </div>
    </footer>
</body>
</html>
