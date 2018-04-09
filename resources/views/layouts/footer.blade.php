
<footer class="footer">
  <div class="container-fluid" style="background: #e0e0e0;">
    <div class="row">
      <div class="col-md">
        <div class="row text-center">
          <ul class="list-group w-100 p-3">
            <li class="item list-group-item "><strong>@lang('messages.about')</strong></li>
            <li class="item list-group-item ">@lang('messages.aboutus')</li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="row text-center">
          <ul class="list-group w-100 p-3">
            <li class="item list-group-item "><strong>@lang('messages.support')</strong></li>
            <li class="item list-group-item ">@lang('messages.contact')</li>
            <li class="item list-group-item ">@lang('messages.returns')</li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="row text-center">
          <ul class="list-group w-100 p-3">
            <li class="item list-group-item "><strong>@lang('messages.legal')</strong></li>
            <li class="item list-group-item ">@lang('messages.privacy')</li>
            <li class="item list-group-item ">@lang('messages.terms')</li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="row text-center">
          <ul class="list-group w-100 p-3">
            <li class="item list-group-item "><strong>@lang('messages.other')</strong></li>
            <li class="item list-group-item ">@lang('messages.account')</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <span class="legal">@lang('messages.rightsreserved')</span>
    </div>
  </div>
</footer>
<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/header.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>
@yield('scripts')
</body>
</html>
