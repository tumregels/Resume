@section("header")
  <div class="header">
    <div class="container">
        <h1>Resume</h1>

        <a href="{{ URL::to("/") }}">
          Home
        </a>
        <a href="{{ URL::to("create") }}">
          Create
        </a>
        <a href="{{ URL::to("search") }}">
          Search
        </a>
        <a href="{{ URL::to("detailedsearch") }}">
          Detailed Search
        </a>
    </div>
  </div>
@show
