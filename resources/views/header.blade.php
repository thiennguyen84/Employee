<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <img src="asset/images/hapo.jpg" class="hapo_img" alt="">
        </div>
        <ul class="nav navbar-nav">
          <li><a href="{{route('show')}}"><span class="ti-home"></span> Home</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="{{route('search')}}" method="get">
            <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Tìm theo tên" required="">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <i class="ti-search"></i>
                     </button>
                </div>
            </div>
        </form>
    </div>
</nav>