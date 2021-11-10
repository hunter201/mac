  @props(['message' => 'OK'])

  <form action="/search" method="post">
      @csrf

      <label for="id">Enter your Search</label>
      <input type="text" name="search" id="search">

      <button type="submit" class="btn btn-primary btn-lg"
          {{ $attributes->class(['red-text']) }}>{{ $slot }}</button>

  </form>
