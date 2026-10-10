@extends('layouts.app')

@section('title')
<title>Restaurant</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="bc-unbleached">
      <div class="top__header w1200">
        <div class="logo">
          <p>郷土ビュッフェ</p>
        </div>
        <nav>
          <ol class="top__header-breadcrumb">
            <li><a href="./">TOP</a></li>
            <li>朝食のご案内</li>
          </ol>
        </nav>
      </div>
    </div>

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
              <a href="#menu-item2">おすすめメニュー</a>
            </div>
            <div class="menu-item">
              <a href="#menu-item3">フォトギャラリー</a>
            </div>
            <div class="menu-item">
              <a href="#menu-item4">朝食会場</a>
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
      <div class="passion__card passion__card--reverse bc-unbleached right">
        <div class="passion__txt">
          <div class="center">
            <p class="passion__numbers">02</p>
            <h2 class="passion__txt-h2">鹿児島の郷土料理</h2>
          </div>
          <p>長年愛され続ける郷土の味「さつま揚げ」や、出汁の旨味が染み渡る「鶏飯」など、鹿児島の伝統的な美味しさを贅沢に揃えました。</p>
        </div>
        <div class="passion__img">
          <img src="{{ asset('img/chickenrice.jpg') }}" alt="">
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
      <div class="w1200" id="menu-item2">
        <div class="ttl center">
          <div class="ttl-img">
            <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
          </div>
          <h2>おすすめメニュー</h2>
        </div>
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

    <div class="mg80">
      <div class="w1200" id="menu-item3">
        <div class="gallery">
          <div class="ttl center">
            <div class="ttl-img">
              <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
            </div>
            <h2>フォトギャラリー</h2>
          </div>
          <div class="gallery__group">
            <div class="gallery__img">
              <a href="{{ asset('img/satsumaage.jpg') }}" class="gallery__link">
                <img src="{{ asset('img/satsumaage.jpg') }}" alt="">
              </a>
            </div>
            <div class="gallery__img">
              <a href="{{ asset('img/chickenrice.jpg') }}" class="gallery__link">
                <img src="{{ asset('img/chickenrice.jpg') }}" alt="">
              </a>
            </div>
            <div class="gallery__img">
              <a href="{{ asset('img/porkcutlet.jpg') }}" class="gallery__link">
                <img src="{{ asset('img/porkcutlet.jpg') }}" alt="">
              </a>
            </div>
            <div class="gallery__img">
              <a href="{{ asset('img/cake.jpg') }}" class="gallery__link">
                <img src="{{ asset('img/cake.jpg') }}" alt="">
              </a>
            </div>
            <div class="gallery__img">
              <a href="{{ asset('img/coffee.jpg') }}" class="gallery__link">
                <img src="{{ asset('img/coffee.jpg') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="photo-modal">
      <span class="modal__arrow modal__arrow--prev" id="modal-prev">&lt;</span>
      <div>
        <div class="modal__close--right"><span class="modal__close">&times;</span></div>
        <div class="modal__content"><img id="modal-img" alt=""></div>
      </div>
      <span class="modal__arrow modal__arrow--next" id="modal-next">&gt;</span>
    </div>

    <div class="mg80">
      <div class="w1200">
        <div class="venue" id="menu-item4">
          <div class="ttl center">
            <div class="ttl-img">
              <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
            </div>
            <h2>朝食会場</h2>
          </div>
          <div class="venue__group">
            <div class="venue__img">
              <img src="{{ asset('img/venue.jpg') }}" alt="">
            </div>
            <div class="venue__item">
              <ul class="venue__ul">
                <li class="venue__li">
                  <div class="venue__ttl"><p>朝食会場</p></div>
                  <div class="venue__txt"><p>17階 レストラン</p></div>
                </li>
                <li class="venue__li">
                  <div class="venue__ttl"><p>営業時間</p></div>
                  <div class="venue__txt"><p>6:30~10:00</p></div>
                </li>
                <li class="venue__li">
                  <div class="venue__ttl"><p>定休日</p></div>
                  <div class="venue__txt"><p>定休日なし</p></div>
                </li>
                <li class="venue__li">
                  <div class="venue__ttl"><p>座席数</p></div>
                  <div class="venue__txt"><p>80席</p></div>
                </li>
                <li class="venue__li">
                  <div class="venue__ttl"><p>料金</p></div>
                  <div class="venue__txt">
                    <div class="venue__txt-justify">
                      <div>大人</div>
                      <div>¥1500</div>
                    </div>
                    <div class="venue__txt-justify">
                      <div>お子様</div>
                      <div>¥800</div>
                    </div>
                  </div>
                </li>
              </ul>
              <p>ご宿泊以外のお客様もご利用いただけます。鹿児島の伝統の味をビュッヒェスタイルでぜひご堪能ください</p>
              <div class="button"><a href="./">ご予約はこちら</a></div>
            </div>
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

<script>
document.addEventListener('DOMContentLoaded', () => {
  const links = Array.from(document.querySelectorAll('.gallery__link')); // 配列に変換
  const modal = document.getElementById('photo-modal');
  const modalImg = document.getElementById('modal-img');
  const closeBtn = document.querySelector('.modal__close');
  const prevBtn = document.getElementById('modal-prev');
  const nextBtn = document.getElementById('modal-next');
  
  let currentIndex = 0; // 現在表示している画像のインデックス番号

  // モーダルの画像を更新する関数
  const updateModalImage = (index) => {
    currentIndex = index;
    const imageSrc = links[currentIndex].getAttribute('href');
    modalImg.setAttribute('src', imageSrc);
  };

  // 画像をクリックしたときの処理
  links.forEach((link, index) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      updateModalImage(index); // クリックした画像の番号で表示
      modal.classList.add('is-open');
    });
  });

  // 「前へ」ボタンをクリック
  prevBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // 背景クリック処理の連動を防ぐ
    // 最初の画像なら最後の画像へ、それ以外は1つ前へ
    const nextIndex = currentIndex === 0 ? links.length - 1 : currentIndex - 1;
    updateModalImage(nextIndex);
  });

  // 「次へ」ボタンをクリック
  nextBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    // 最後の画像なら最初の画像へ、それ以外は1つ後ろへ
    const nextIndex = currentIndex === links.length - 1 ? 0 : currentIndex + 1;
    updateModalImage(nextIndex);
  });

  // 閉じるボタン（×）をクリック
  closeBtn.addEventListener('click', () => {
    modal.classList.remove('is-open');
  });

  // 背景の黒い部分をクリック
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('is-open');
    }
  });
});

</script>

<!-- ─── JavaScript部分を以下に差し替えてください ─── -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // 1. querySelectorAll でページ内のすべてのラベルを取得する
        const labels = document.querySelectorAll(".recommend__label");

        // 2. 画面内に入ったかを監視する設定（処理内容は前回と同じ）
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // 画面内に入った要素（entry.target）にクラスを追加
                    entry.target.classList.add("is-visible");
                } else {
                    // 画面外に出たらクラスを外す（1回きりの表示にしたい場合はこのelseは削除）
                    entry.target.classList.remove("is-visible");
                }
            });
        }, {
            threshold: 0.2 // 要素が20%見えたらアニメーションを開始
        });

        // 3. getしたすべてのラベルをループ処理で監視対象に登録する
        labels.forEach(label => {
            observer.observe(label);
        });
    });
</script>

@endsection