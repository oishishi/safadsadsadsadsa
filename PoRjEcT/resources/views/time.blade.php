    
<div class="container">
    <form action="{{ route('time.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_time">เวลาเปิด:</label>
            <input type="time" name="start_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="end_time">เวลาปิด:</label>
            <input type="time" name="end_time" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>
</div>
