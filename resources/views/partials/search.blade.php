<div class="row">
  <div class="col-lg-6">
    <form action="{{ route('search') }}" method="GET" class="navbar-form navbar-right">
      <div class="input-group">
        <span><i class="fa fa-search"></i></span>
        <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="col form-control" placeholder="&#xf002;  Search for product" required>
      </div>
    </form>
  </div>
</div>
