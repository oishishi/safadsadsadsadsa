
      <form action="{{ route('status.toggle') }}" method="POST">
        @csrf
        <input type="hidden" name="status" value="{{ $status->status == 1 ? 0 : 1 }}">
        <button type="submit">{{ $status->status == 1 ? 'Turn Off' : 'Turn On' }}</button>
    </form>

    
  