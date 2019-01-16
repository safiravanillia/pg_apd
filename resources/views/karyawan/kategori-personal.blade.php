<!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '1')->count() }}</h3>
                <p>Kacamata Pengaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-glasses"></i>
              </div>
              <a href="{{ url('apd-personal/1') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '2')->count() }}</h3>
                <p>Pelindung Telinga</p>
              </div>
              <div class="icon">
                <i class="ion ion-headphone"></i>
              </div>
              <a href="{{ url('apd-personal/2') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '3')->count() }}</h3>
                <p>Sepatu</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paw"></i>
              </div>
              <a href="{{ url('apd-personall/3') }}" class="small-box-footer">Klik Disini<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '4')->count() }}</h3>
                <p>Helm</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-contact"></i>
              </div>
              <a href="{{ url('apd-personal/4') }}" class="small-box-footer">Klik Disini<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '5')->count() }}</h3>
                <p>Pakaian Pengaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-tshirt"></i>
              </div>
              <a href="{{ url('apd-personal/5') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '6')->count() }}</h3>
                <p>Sarung Tangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-hand"></i>
              </div>
              <a href="{{ url('apd-personal/6') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '7')->count() }}</h3>
                <p>Pelindung Wajah</p>
              </div>
              <div class="icon">
                <i class="ion ion-happy"></i>
              </div>
              <a href="{{ url('apd-personal/7') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ DB::table('apd')->where('id_kategori', '8')->count() }}</h3>
                <p>Lainnya</p>
              </div>
              <div class="icon">
                <i class="ion ion-search"></i>
              </div>
              <a href="{{ url('apd-personal/8') }}" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </section>