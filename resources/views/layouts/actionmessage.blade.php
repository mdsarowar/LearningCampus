<div class="col-md-4 m-auto def_font def_txt_color" style="padding-top: 10px">
    @if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show text-center def_bg_color" role="alert" id="alert">
        <strong style="text-align: center; color: white;">{{ Session::get('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (Session::get('fail'))
      <div class="alert alert-danger alert-dismissible text-center fade show def_bg_color" role="alert" id="alert">
        <strong style="text-align: center; color:#fff">{{ Session::get('fail') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>


<script type="text/javascript">
    $("document").ready(function()
    {
        setTimeout(function()
        {
            $("div.alert").remove();
        }, 2000);
    });
</script>