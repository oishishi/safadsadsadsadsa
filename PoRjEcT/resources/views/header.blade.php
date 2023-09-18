    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #333; /* ปรับสีของแถบนำทางตามที่คุณต้องการ */
            color: white; /* สีข้อความในแถบนำทาง */
        }

        .navbar .container {
            display: flex;
            justify-content: space-between; /* จัดเรียงองค์ประกอบใน container ไปทางสองด้าน */
            align-items: center; /* จัดเรียงแนวดิ่งตรงกลาง */
        }

        .navbar .logo {
            /* สไตล์โลโก้ของคุณ */
        }

        .navbar .btn-setting {
            background-color: #007bff; /* สีพื้นหลังของปุ่ม */
            color: white; /* สีข้อความบนปุ่ม */
            padding: 5px 15px; /* ขนาดของปุ่ม */
            border-radius: 5px; /* ขอบมนเว้าของปุ่ม */
        }
    </style>

    <nav class="navbar">
        <div class="container">
            <a class="logo">
                <img src="" alt="">
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Setting
            </button>
        </div>
    </nav>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Relay Setting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        @include('time')
        </div>
        <div class="modal-footer">
        @include('toggle')
        </div>
      </div>
    </div>
  </div>
    <script>
        $(document).ready(function () {
            // เมื่อคลิกปุ่ม "Setting"
            $(".btn-setting").click(function () {
                // เปิดโมดัลโดยใช้การกำหนดแอตทริบิวต์ "show"
                $("#exampleModal").modal("show");
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
