<!-- body閉じタグの前にJavascriptを入れる場合、これを使う -->
<!-- ********** JavaScript ********** -->

  <!-- メニュー用JS -->
  <script src="js/menu.js"></script>

  <!-- Initialize Swiper -->
  <script>
    /*
     *  swiper option
     */
    const swiper = new Swiper(".swiper-container", {
      speed: 4000,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      // 任意のスライドで前後の画像へ移動：無効
      // allowTouchMove: false,
      pagination: {
        // ページネーション（スライド下部に白丸のナビゲート表示）
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <script>
    const setFillHeight = () =>
    {
      const vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    // 画面のサイズ変動があった時に高さを再計算する
    window.addEventListener('resize', setFillHeight);

    // 初期化
    setFillHeight();
  </script>

  <!-- iOS Safariアドレスバー対策2 -->
  <script>
    // resizeイベントの取得
    window.addEventListener('resize', () => {
      // あとは上記と同じスクリプトを実行
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
  </script>

  <!-- ********** JavaScript ********** -->



  <!-- ********** JavaScript ********** -->
  <!-- ********** スクロールとフェードイン用 ********** -->
  <!-- ********** START ********** -->
  <script>
		let fadeInTarget = document.querySelectorAll('.fade-in');
		window.addEventListener('scroll', () => {
		for (let i = 0; i < fadeInTarget.length; i++){
			const rect = fadeInTarget[i].getBoundingClientRect().top;
			const scroll = window.pageYOffset || document.documentElement.scrollTop;
			const offset = rect + scroll;
			const windowHeight = window.innerHeight; // 現在のブラウザの高さ
			if (scroll > offset - windowHeight + 100) {
			fadeInTarget[i].classList.add('scroll-in');
			}
      // if (scroll > offset - windowHeight + 150) {
			// fadeInTarget[i].classList.add('scroll-in');
			// }
		}
		});
	</script>
  <!-- ********** END ********** -->
  <!-- ********** スクロールとフェードイン用 ********** -->
  <!-- ********** JavaScript ********** -->
  