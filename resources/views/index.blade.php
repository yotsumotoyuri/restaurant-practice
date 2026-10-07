@extends('layouts.app')

@section('title')
<title>Restaurant</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="top bc-unbleached">
      <div class="top__mv">
        <video class="main-video"
        autoplay 
        muted 
        loop 
        playsinline 
        poster=""
        >
        <source src="https://res.cloudinary.com/otz77a4t/video/upload/v1791250840/topvideo.mp4" type="video/mp4">
        </video>
      </div>
      <div class="top__img">
        <img src="{{ asset('img/sakurazima.png') }}" alt="">
      </div>
    </div>

    <div class="introduction bc-unbleached">
      <div class="w1200">
        <div class="introduction__concept">
          <div class="center">
            <h2 class="introduction__concept-ttl">朝食のご案内</h2>
          </div>
          <h2 class="introduction__concept-ttl2">鹿児島の名物を、一番美味しい時間に。</h2>
          <p class="w500">
            桜島を目の前に、最高の状態で味わう郷土の恵みをお届けします。<br>
            出来立てアツアツを味わう名物の「さつま揚げ」や、お好みの具材に旨味たっぷりの出汁を注ぐ伝統の「鶏飯（けいはん）」。地元の新鮮な食材をふんだんに使用した、滋味あふれる料理の数々が朝のテーブルを彩ります。<br>
            最高のロケーションと、ここでしか味わえない鹿児島の「美味しい朝」を、心ゆくまでご堪能ください。</p>
        </div>
        <div class="top__wrapper pd80 w750">
          <div class="menu-container center">
            <div class="menu-item">
              <a href="#menu-item1">こだわり</a>
            </div>
            <div class="menu-item">
              <a href="./">おすすめメニュー</a>
            </div>
            <div class="menu-item">
              <a href="./">フォトギャラリー</a>
            </div>
            <div class="menu-item">
              <a href="./">朝食会場</a>
            </div>
        </div>
      </div>
    </div>
    </div>

    <div class="mg80">
    <div class="passion w1200" id="menu-item1">
      <div class="ttl center">
        <div class="ttl-img">
          <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
        </div>
        <h2>こだわり</h2>
      </div>
      <div class="passion__card bc-unbleached">
        <div class="passion__img">
          <img src="{{ asset('img/passion1.jpg') }}" alt="">
        </div>
        <div class="passion__txt">
          <div class="center">
            <p class="passion__numbers">01</p>
            <h2 class="passion__txt-h2">桜島が見える朝食会場</h2>
          </div>
          <p>雄大な桜島を望む地で、鹿児島の豊かな食文化に触れる特別な朝。地元食材を贅沢に使った、当館自慢の朝食ビュッフェを心ゆくまでご堪能ください。</p>
        </div>
      </div>
      <div class="passion__card bc-unbleached right">
        <div class="passion__txt">
          <div class="center">
            <p class="passion__numbers">02</p>
            <h2 class="passion__txt-h2">鹿児島の郷土料理</h2>
          </div>
          <p>長年愛され続ける郷土の味「さつま揚げ」や、出汁の旨味が染み渡る「鶏飯」など、鹿児島の伝統的な美味しさを贅沢に揃えました。</p>
        </div>
        <div class="passion__img">
          <img src="{{ asset('img/passion2-1.jpg') }}" alt="">
        </div>
      </div>
      <div class="passion__card bc-unbleached">
        <div class="passion__img">
          <img src="{{ asset('img/passion3.jpg') }}" alt="">
        </div>
        <div class="passion__txt">
          <div class="center">
            <p class="passion__numbers">03</p>
            <h2 class="passion__txt-h2">ビュッフェスタイル</h2>
          </div>
          <p>心ゆくまで鹿児島の食文化を満喫していただけるよう、多彩なメニューをビュッフェスタイルでご用意しました。</p>
        </div>
      </div>
    </div>
    </div>

    <div class="mg80">
      <div class="w1200">
        <div class="ttl center">
        <div class="ttl-img">
          <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
        </div>
        <h2>おすすめメニュー</h2>
        <div class="recommend">
          <div class="recommend-item">
            <div class="recommend-img">
              <img src="{{ asset('img/satsumaage.png') }}" alt="">
            </div>
            <div class="recommend__label">さつま揚げ</div>
          </div>
          <div class="recommend-item">
            <div class="recommend-img">
              <img src="{{ asset('img/chickenrice.png') }}" alt="">
            </div>
            <div class="recommend__label">鶏飯</div>
          </div>
          <div class="recommend-item">
            <div class="recommend-img">
              <img src="{{ asset('img/porkcutlet.png') }}" alt="">
            </div>
            <div class="recommend__label">黒豚とんかつ</div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('java')
<script>
  // jQueryの例（500ミリ秒 = 0.5秒かけてスクロール）
$('a[href^="#"]').on('click', function(e) {
  let speed = 1200;
  let href = $(this).attr('href');
  let target = $(href == '#' || href == '' ? 'html' : href);
  let position = target.offset().top;
  $('html, body').animate({scrollTop: position}, speed, 'swing');
  e.preventDefault();
});

</script>
@endsection